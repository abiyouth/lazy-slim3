<?php

//  Home page {Redirect}
$app->get('/', function($request, $response, $args) {

    // Render twig template
    return $this->view->render($response, 'home.twig', ['ray'=>'Hello Lazy world']);

})->setName('home');

$app->get('/{name}', function($request, $response, $args) {

    // Getting values from url
    $name = $args['name'];
    return $this->view->render($response, 'sample.twig', ['name'=>$name] );

})->setName('name');


$app->group('/group/', function () use ($app) {

    // Grouping routes
    $app->get('', function ($req, $res) {
        return "get";
    });

    $app->post('', function ($req, $res) {
        return "post";
    });

});

$app->get('/session/', function($request, $response, $args){

    // RKA Session sample
    $session = new \RKA\Session();

    // Get session variable:
    $foo = $session->get('foo', 'some-default');
    $bar = $session->bar;

    // Set session variable:
    $session->foo = 'this';
    $session->set('bar', 'that');

    return $foo." and ".$bar;

    // \RKA\Session::destroy();

});

$app->get('/login/', function($request, $response, $args) {

    return $response->write("Login page goes here.");

})->setName('login');

?>
