<?php
session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../lib/Mailer.php';

$config = require __DIR__ . '/../config/mail.php';

function wantsJsonResponse(): bool
{
    $accept = strtolower((string) ($_SERVER['HTTP_ACCEPT'] ?? ''));
    $xhr = strtolower((string) ($_SERVER['HTTP_X_REQUESTED_WITH'] ?? ''));

    return str_contains($accept, 'application/json') || $xhr === 'xmlhttprequest';
}

function respond(int $statusCode, array $payload, string $fallbackRedirect): void
{
    if (wantsJsonResponse()) {
        http_response_code($statusCode);
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode($payload, JSON_UNESCAPED_UNICODE);
        exit;
    }

    header('Location: ' . $fallbackRedirect);
    exit;
}

function buildRedirect(string $status): string
{
    $formPage = basename((string) ($_POST['form_page'] ?? 'index.php'));
    $allowedPages = [
        'index.php', 'o-vrache.php', 'o-klinike.php', 'specializatsiya.php', 'uslugi-i-tseny.php', 'konsultatsiya.php',
        'rezultaty-rabot.php', 'otzyvy.php', 'publikatsii.php', 'diplomy.php', 'analizy.php', 'anesteziya.php',
        'kak-prokhodit-operatsiya.php', 'kak-prokhodit-konsultatsiya.php', 'pamyatki-patsientam.php', 'dlya-vrachey.php',
        'patsientam-iz-drugogo-goroda.php', 'podgotovka-k-operatsii.php', 'posle-operatsii.php', 'kontakty.php',
    ];

    $page = in_array($formPage, $allowedPages, true) ? $formPage : 'index.php';

    return '../' . $page . '?status=' . $status;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(405, [
        'success' => false,
        'message' => 'Метод не поддерживается. Используйте POST.',
        'code' => 'method_not_allowed',
    ], '../index.php?status=invalid');
}

$csrfToken = trim((string) ($_POST['csrf_token'] ?? ''));
if (!hash_equals((string) ($_SESSION['csrf_token'] ?? ''), $csrfToken)) {
    respond(422, [
        'success' => false,
        'message' => 'Сессия формы истекла. Обновите страницу и попробуйте снова.',
        'code' => 'csrf',
    ], buildRedirect('csrf'));
}

$honeypot = trim((string) ($_POST['website'] ?? ''));
if ($honeypot !== '') {
    respond(422, [
        'success' => false,
        'message' => 'Форма отклонена системой защиты от спама.',
        'code' => 'spam',
    ], buildRedirect('spam'));
}

$formStartedAt = (int) ($_POST['form_started_at'] ?? 0);
if ($formStartedAt > 0 && (time() - $formStartedAt) < 3) {
    respond(429, [
        'success' => false,
        'message' => 'Слишком быстрая отправка формы. Попробуйте еще раз.',
        'code' => 'spam',
    ], buildRedirect('spam'));
}

$lastSubmissionAt = (int) ($_SESSION['last_submission_at'] ?? 0);
if ((time() - $lastSubmissionAt) < 15) {
    respond(429, [
        'success' => false,
        'message' => 'Слишком частая отправка формы. Подождите немного.',
        'code' => 'rate',
    ], buildRedirect('rate'));
}

$name = trim((string) ($_POST['name'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
$agreement = isset($_POST['agreement']) && (string) $_POST['agreement'] === '1';
$phoneDigits = preg_replace('/\D+/', '', $phone);

if ($name === '' || mb_strlen($name) < 2 || mb_strlen($name) > 100) {
    respond(422, [
        'success' => false,
        'message' => 'Укажите корректное имя (от 2 до 100 символов).',
        'code' => 'invalid_name',
    ], buildRedirect('invalid'));
}

if (strlen((string) $phoneDigits) < 11) {
    respond(422, [
        'success' => false,
        'message' => 'Укажите корректный номер телефона.',
        'code' => 'invalid_phone',
    ], buildRedirect('invalid'));
}

if (!$agreement) {
    respond(422, [
        'success' => false,
        'message' => 'Нужно согласие на обработку персональных данных.',
        'code' => 'agreement_required',
    ], buildRedirect('invalid'));
}

if ($message !== '' && mb_strlen($message) > 2000) {
    respond(422, [
        'success' => false,
        'message' => 'Комментарий слишком длинный (максимум 2000 символов).',
        'code' => 'invalid_message',
    ], buildRedirect('invalid'));
}

$requiredPlaceholders = [
    (string) ($config['smtp']['host'] ?? ''),
    (string) ($config['smtp']['port'] ?? ''),
    (string) ($config['smtp']['username'] ?? ''),
    (string) ($config['smtp']['password'] ?? ''),
    (string) ($config['smtp']['secure'] ?? ''),
    (string) ($config['from']['address'] ?? ''),
    (string) ($config['from']['name'] ?? ''),
    (string) ($config['to']['address'] ?? ''),
];

$hasPlaceholder = false;
foreach ($requiredPlaceholders as $value) {
    if ($value === '' || str_contains($value, 'SMTP_') || str_contains($value, 'MAIL_')) {
        $hasPlaceholder = true;
        break;
    }
}

if ($hasPlaceholder) {
    respond(500, [
        'success' => false,
        'message' => 'Почта не настроена: заполните config/mail.php боевыми значениями.',
        'code' => 'mail_config_required',
    ], buildRedirect('config'));
}

$siteName = trim((string) ($config['site_name'] ?? 'Сайт врача-кардиохирурга'));
$formPage = basename((string) ($_POST['form_page'] ?? 'index.php'));
$subject = 'Новая заявка с сайта';
$body = "Новая заявка с сайта {$siteName}\n\n"
    . "Имя: {$name}\n"
    . "Телефон: {$phone}\n"
    . "Комментарий: " . ($message !== '' ? $message : 'Не указан') . "\n"
    . "Страница: {$formPage}\n"
    . 'Дата и время: ' . date('d.m.Y H:i:s') . "\n";

$mailer = new Mailer($config);

if (!$mailer->send($subject, $body)) {
    respond(500, [
        'success' => false,
        'message' => 'Не удалось отправить заявку. Попробуйте позже.',
        'code' => 'mail_send_error',
        'details' => $mailer->getLastError(),
    ], buildRedirect('error'));
}

$_SESSION['last_submission_at'] = time();

respond(200, [
    'success' => true,
    'message' => 'Заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.',
    'code' => 'ok',
    'redirect' => '../spasibo.php',
], '../spasibo.php');
