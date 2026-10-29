<?php
// Configuration settings for mailer and sensitive credentials

return [
    'smtp' => [
        'host'       => 'smtp.gmail.com',
        'auth'       => true,
        'username'   => '4bizinternationalcalicut@gmail.com',
        'password'   => 'qfrq psml vxwi mszr',
        'secure'     => 'ssl', // PHPMailer::ENCRYPTION_SMTPS
        'port'       => 465,
    ],
    'mail' => [
        'from_email' => '4bizinternationalcalicut@gmail.com',
        'from_name'  => 'Website Contact',
        'to_email'   => 'sales@theyyampattilgcc.com',
        // 'cc_email' => '4bizdeveloper@gmail.com',
    ]
];