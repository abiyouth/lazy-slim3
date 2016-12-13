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
    'pdo' => [
      'engine' => 'DBTYPE',
      'host' => 'localhost',
      'database' => 'DBNAME',
      'username' => 'root',
      'password' => '',
      'charset' => 'utf8',
      'options' => [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => true,
      ]
    ]

  ]
];

?>
