<?php

class Mailer
{
    private array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function send(string $subject, string $body): bool
    {
        $recipient = trim((string) ($this->config['recipient'] ?? ''));
        if ($recipient === '') {
            return false;
        }

        $smtpEnabled = (bool) ($this->config['smtp']['enabled'] ?? false);
        if ($smtpEnabled && class_exists('PHPMailer\PHPMailer\PHPMailer')) {
            return $this->sendViaSmtp($recipient, $subject, $body);
        }

        return $this->sendViaMail($recipient, $subject, $body);
    }

    private function sendViaMail(string $recipient, string $subject, string $body): bool
    {
        $fromEmail = (string) ($this->config['from_email'] ?? 'no-reply@example.com');

        $headers = [
            'MIME-Version: 1.0',
            'Content-type: text/plain; charset=UTF-8',
            'From: ' . $fromEmail,
            'Reply-To: ' . $fromEmail,
            'X-Mailer: PHP/' . phpversion(),
        ];

        return mail($recipient, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, implode("\r\n", $headers));
    }

    private function sendViaSmtp(string $recipient, string $subject, string $body): bool
    {
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        $smtp = $this->config['smtp'];

        try {
            $mail->isSMTP();
            $mail->Host = (string) ($smtp['host'] ?? '');
            $mail->Port = (int) ($smtp['port'] ?? 587);
            $mail->SMTPAuth = true;
            $mail->Username = (string) ($smtp['username'] ?? '');
            $mail->Password = (string) ($smtp['password'] ?? '');
            $mail->SMTPSecure = (string) ($smtp['secure'] ?? PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS);
            $mail->CharSet = 'UTF-8';
            $mail->setFrom((string) ($this->config['from_email'] ?? 'no-reply@example.com'), (string) ($this->config['site_name'] ?? 'Кардиохирург'));
            $mail->addAddress($recipient);
            $mail->Subject = $subject;
            $mail->Body = $body;
            return $mail->send();
        } catch (Throwable $exception) {
            return false;
        }
    }
}
