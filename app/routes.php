<?php

//  Home page {Redirect}
$app->get('/', function($request, $response, $args) {

    return $this->view->render($response, 'home.twig', ['ray'=>'Hello Lazy world']);

})->setName('home');

$app->get('/{name}', function($request, $response, $args) {

    $name = $args['name'];
    return $this->view->render($response, 'sample.twig', ['name'=>$name] );

})->setName('name');

$app->get('/login/', function($request, $response, $args) {

    return $response->write("Login page goes here.");

})->setName('login');

?>
