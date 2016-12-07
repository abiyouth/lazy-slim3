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

// DB container
$container['db'] = function($container) {

        $config = $container->get('config')['pdo'];
        $dsn = "{$config['engine']}:host={$config['host']};dbname={$config['database']};charset={$config['charset']}";
        $username = $config['username'];
        $password = $config['password'];

        return new PDO($dsn, $username, $password, $config['options']);

};



?>
