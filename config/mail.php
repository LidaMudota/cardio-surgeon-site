<?php

return [
    'site_name' => 'Сайт врача-кардиохирурга',
    'transport' => 'smtp', // smtp | mail

    'smtp' => [
        'host' => 'SMTP_HOST',
        'port' => 'SMTP_PORT',
        'username' => 'SMTP_USERNAME',
        'password' => 'SMTP_PASSWORD',
        'secure' => 'SMTP_SECURE', // tls | ssl
    ],

    'from' => [
        'address' => 'MAIL_FROM_ADDRESS',
        'name' => 'MAIL_FROM_NAME',
    ],

    'to' => [
        'address' => 'MAIL_TO_ADDRESS',
    ],
];
