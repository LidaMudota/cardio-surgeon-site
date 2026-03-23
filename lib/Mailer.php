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
        $transport = strtolower((string) ($this->config['transport'] ?? 'smtp'));

        if ($transport === 'mail') {
            return $this->sendViaMail($subject, $body);
        }

        if (!class_exists(PHPMailer::class)) {
            $this->lastError = 'PHPMailer не найден. Проверьте vendor/autoload.php.';
            return false;
        }

        return $this->sendViaSmtp($subject, $body);
    }

    private function sendViaMail(string $subject, string $body): bool
    {
        $recipient = trim((string) ($this->config['to']['address'] ?? ''));
        $fromAddress = trim((string) ($this->config['from']['address'] ?? ''));

        if ($recipient === '' || $fromAddress === '') {
            $this->lastError = 'Не заполнены адреса отправителя/получателя в config/mail.php.';
            return false;
        }

        $headers = [
            'MIME-Version: 1.0',
            'Content-type: text/plain; charset=UTF-8',
            'From: ' . $fromAddress,
            'Reply-To: ' . $fromAddress,
            'X-Mailer: PHP/' . phpversion(),
        ];

        $sent = mail($recipient, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, implode("\r\n", $headers));

        if (!$sent) {
            $this->lastError = 'Функция mail() вернула ошибку.';
        }

        return $sent;
    }

    private function sendViaSmtp(string $subject, string $body): bool
    {
        $smtp = $this->config['smtp'] ?? [];
        $recipient = trim((string) ($this->config['to']['address'] ?? ''));
        $fromAddress = trim((string) ($this->config['from']['address'] ?? ''));
        $fromName = trim((string) ($this->config['from']['name'] ?? ''));

        if ($recipient === '' || $fromAddress === '') {
            $this->lastError = 'Не заполнены адреса отправителя/получателя в config/mail.php.';
            return false;
        }

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = trim((string) ($smtp['host'] ?? ''));
            $mail->Port = (int) ($smtp['port'] ?? 587);
            $mail->SMTPAuth = true;
            $mail->Username = trim((string) ($smtp['username'] ?? ''));
            $mail->Password = (string) ($smtp['password'] ?? '');
            $mail->SMTPSecure = trim((string) ($smtp['secure'] ?? PHPMailer::ENCRYPTION_STARTTLS));
            $mail->CharSet = 'UTF-8';

            $mail->setFrom($fromAddress, $fromName !== '' ? $fromName : 'Website');
            $mail->addAddress($recipient);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->isHTML(false);

            return $mail->send();
        } catch (Exception $exception) {
            $this->lastError = $exception->getMessage();
            return false;
        }
    }
}
