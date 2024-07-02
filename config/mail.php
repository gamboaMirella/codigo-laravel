<?php

return [

    'default' => env('MAIL_MAILER', 'smtp'),

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'sandbox.smtp.mailtrap.io'),
            'port' => env('MAIL_PORT', 2525),
            'encryption' => env('MAIL_ENCRYPTION', null),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
        ],
    ],

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'mgamboav@unitru.edu.pe'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],
];
