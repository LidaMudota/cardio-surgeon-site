<?php
session_start();

$config = require __DIR__ . '/../config/mail.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

$redirect = '../index.php';

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
$agreement = isset($_POST['agreement']) ? '1' : '0';

$phoneDigits = preg_replace('/\D+/', '', $phone);

if ($name === '' || $agreement !== '1' || strlen($phoneDigits) < 11) {
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
$message = "Новая заявка с сайта {$siteName}\n\n"
    . "Имя: {$name}\n"
    . "Телефон: {$phone}\n"
    . "Дата и время: " . date('d.m.Y H:i:s') . "\n";

$headers = [
    'MIME-Version: 1.0',
    'Content-type: text/plain; charset=UTF-8',
    'From: ' . ($config['from_email'] ?? 'no-reply@example.com'),
    'Reply-To: ' . ($config['from_email'] ?? 'no-reply@example.com'),
    'X-Mailer: PHP/' . phpversion(),
];

$sent = mail($recipient, '=?UTF-8?B?' . base64_encode($subject) . '?=', $message, implode("\r\n", $headers));

if (!$sent) {
    header("Location: {$redirect}?status=error");
    exit;
}

$_SESSION['last_submission_at'] = time();
header("Location: {$redirect}?status=success");
exit;
