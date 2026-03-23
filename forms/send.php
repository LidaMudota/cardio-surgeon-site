<?php
session_start();

$config = require __DIR__ . '/../config/mail.php';
require_once __DIR__ . '/../lib/Mailer.php';

$autoloadPath = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

$formPage = basename((string) ($_POST['form_page'] ?? 'index.php'));
$allowedPages = [
    'index.php', 'o-vrache.php', 'o-klinike.php', 'specializatsiya.php', 'uslugi-i-tseny.php', 'konsultatsiya.php',
    'rezultaty-rabot.php', 'otzyvy.php', 'publikatsii.php', 'diplomy.php', 'analizy.php', 'anesteziya.php',
    'kak-prokhodit-operatsiya.php', 'kak-prokhodit-konsultatsiya.php', 'pamyatki-patsientam.php', 'dlya-vrachey.php',
    'patsientam-iz-drugogo-goroda.php', 'podgotovka-k-operatsii.php', 'posle-operatsii.php', 'kontakty.php'
];
$redirect = in_array($formPage, $allowedPages, true) ? "../{$formPage}" : '../index.php';

$csrfToken = $_POST['csrf_token'] ?? '';
if (!hash_equals($_SESSION['csrf_token'] ?? '', $csrfToken)) {
    header("Location: {$redirect}?status=csrf");
    exit;
}

$honeypot = trim($_POST['website'] ?? '');
if ($honeypot !== '') {
    header("Location: {$redirect}?status=spam");
    exit;
}

$formStartedAt = (int) ($_POST['form_started_at'] ?? 0);
if ($formStartedAt > 0 && (time() - $formStartedAt) < 3) {
    header("Location: {$redirect}?status=spam");
    exit;
}

$lastSubmissionAt = $_SESSION['last_submission_at'] ?? 0;
if ((time() - $lastSubmissionAt) < 15) {
    header("Location: {$redirect}?status=rate");
    exit;
}

$name = trim((string) ($_POST['name'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
$agreement = isset($_POST['agreement']) ? '1' : '0';
$phoneDigits = preg_replace('/\D+/', '', $phone);

if ($name === '' || $agreement !== '1' || strlen((string) $phoneDigits) < 11) {
    header("Location: {$redirect}?status=invalid");
    exit;
}

$recipient = trim((string) ($config['recipient'] ?? ''));
if ($recipient === '') {
    header("Location: {$redirect}?status=config");
    exit;
}

$siteName = $config['site_name'] ?? 'Сайт врача-кардиохирурга';
$subject = 'Новая заявка с сайта';
$body = "Новая заявка с сайта {$siteName}\n\n"
    . "Имя: {$name}\n"
    . "Телефон: {$phone}\n"
    . "Комментарий: " . ($message !== '' ? $message : 'Не указан') . "\n"
    . "Страница: {$formPage}\n"
    . "Дата и время: " . date('d.m.Y H:i:s') . "\n";

$mailer = new Mailer($config);
$sent = $mailer->send($subject, $body);

if (!$sent) {
    header("Location: {$redirect}?status=error");
    exit;
}

$_SESSION['last_submission_at'] = time();
header('Location: ../spasibo.php');
exit;
