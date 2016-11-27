<?php

//  Home page {Redirect}
$app->get('/', function($request, $response, $args) {

    return $this->view->render($response, 'home.twig');

})->setName('home');

$app->get('/abcd/', function($request, $response, $args) {

    return "i";

})->setName('uuhdd');
?>
