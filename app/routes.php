<?php

//  Home page {Redirect}
$app->get('/', function($request, $response, $args) {

    return $this->view->render($response, 'home.twig');

})->setName('home');

$app->get('/{name}', function($request, $response, $args) {

    $name = $args['name'];
    return $response->write("Hello $name");

})->setName('uuhdd');

$app->get('/hello/', function($request, $response, $args) {

    return $response->write("Hello bitch");

})->setName('hello');


?>
