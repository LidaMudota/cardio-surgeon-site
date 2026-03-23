<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Mailer
{
    private array $config;
    private string $lastError = '';

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getLastError(): string
    {
        return $this->lastError;
    }

    public function send(string $subject, string $body): bool
    {
        if (!class_exists(PHPMailer::class)) {
            $this->lastError = 'PHPMailer не найден. Проверьте подключение vendor/autoload.php.';
            return false;
        }

        $smtp = $this->config['smtp'] ?? [];
        $fromAddress = trim((string) ($this->config['from']['address'] ?? ''));
        $fromName = trim((string) ($this->config['from']['name'] ?? ''));
        $toAddress = trim((string) ($this->config['to']['address'] ?? ''));

        $host = trim((string) ($smtp['host'] ?? ''));
        $port = (int) ($smtp['port'] ?? 465);
        $secure = strtolower(trim((string) ($smtp['secure'] ?? 'ssl')));
        $smtpAuth = (bool) ($smtp['auth'] ?? true);
        $username = trim((string) ($smtp['username'] ?? ''));
        $password = (string) ($smtp['password'] ?? '');

        if ($host === '' || $username === '' || $password === '' || $fromAddress === '' || $toAddress === '') {
            $this->lastError = 'Не заполнены обязательные SMTP-параметры в config/mail.local.php.';
            return false;
        }

        if ($host !== 'smtp.yandex.ru') {
            $this->lastError = 'Для этого проекта требуется SMTP Яндекса: smtp.yandex.ru.';
            return false;
        }

        if ($port !== 465 || $secure !== 'ssl') {
            $this->lastError = 'Для Яндекс Почты используйте порт 465 и secure=ssl.';
            return false;
        }

        if (!$smtpAuth) {
            $this->lastError = 'Для Яндекс SMTP требуется auth=true.';
            return false;
        }

        if (!filter_var($fromAddress, FILTER_VALIDATE_EMAIL) || !filter_var($toAddress, FILTER_VALIDATE_EMAIL)) {
            $this->lastError = 'Проверьте корректность email-адресов отправителя и получателя.';
            return false;
        }

        if ($fromAddress !== $username) {
            $this->lastError = 'Для Яндекс SMTP адрес отправителя from.address должен совпадать с smtp.username.';
            return false;
        }

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = $host;
            $mail->Port = $port;
            $mail->SMTPAuth = $smtpAuth;
            $mail->Username = $username;
            $mail->Password = $password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = PHPMailer::ENCODING_BASE64;

            $mail->setFrom($fromAddress, $fromName !== '' ? $fromName : 'Форма сайта');
            $mail->addAddress($toAddress);
            $mail->addReplyTo($fromAddress, $fromName !== '' ? $fromName : 'Форма сайта');

            $mail->isHTML(false);
            $mail->Subject = $subject;
            $mail->Body = $body;

            return $mail->send();
        } catch (Exception $exception) {
            $this->lastError = 'SMTP ошибка: ' . $exception->getMessage();
            return false;
        }
    }
}
