<?php

$app->add(new \RKA\SessionMiddleware(['name' => 'PROJECT_NAME']));

// Get the container
$container = $app->getContainer();

// Twig view container
$container['view'] = function ($c) {

    $cf = $c->get('config')['view'];
    $view = new \Slim\Views\Twig($cf['path'], $cf['twig']);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $c->router,
        $c->request->getUri()
    ));

    return $view;
};

// Medoo database framework
$container['db'] = function($container) {

    $config = $container->get('config')['pdo'];
    $database = new medoo([
        'database_type' => 'mysql',
        'database_name' => $config['dbname'],
        'server' => $config['dbserver'],
        'username' => $config['dbuser'],
        'password' => $config['dbpass'],
        'charset' => 'utf8'
    ]);

    return $database;
};


