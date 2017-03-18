<?php

return [

    'config' => [

        'displayErrorDetails' => true,

        'view' => [
            'path' => __DIR__ . '/templates/',
            'twig' => [
                'cache' => false
            ]
        ],

        'db' => [
            'engine' => 'db_type',
            'host' => 'localhost',
            'database' => 'db_name',
            'username' => 'root',
            'password' => 'db_password',
            'charset' => 'utf8',
            'options' => [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => true
            ]
        ]
    ]
];


