<?php

//  Landing page
$app->get('/', function($request, $response, $args) {

    // Render twig template
    return $this->view->render($response, 'sample.twig', ['name'=>'Hello Lazy world']);

})->setName('home');


$app->get('/post/', function($request, $response, $args){

    // Render post example template
    return $this->view->render($response, 'post.twig');

})->setName("post_page");


$app->post('/post/', function($request, $response, $args) {
    /*
     * Input
     * {
     *     "yourname" : "value"
     * }
     */

    // Post Example

    $post_data = $request->getParsedBody();

    return "Welcome to the Lazy world ".$post_data['yourname'];

})->setName('post_handler');


$app->get('/{custom}', function($request, $response, $args) {

    // Getting values from url
    $name = $args['custom'];
    return "Change '".$name."' in the URL as you wish!<br> Check it!";

})->setName('custom_url');


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

    // Destroy session
    // \RKA\Session::destroy();

})->setName('Session');


$app->get('/db/', function($request, $response, $args) {
    /*
     * DB check Documentation at http://www.medoo.in
     */

    // Post Example

    $data = $this->db->select("table","*",[
       "AND" => [
           "username" => "admin",
           "password" => "godpass"
       ]
    ]); // Check documentation for more info.

    return "<a href='http://medoo.in'>Click here for Documentation</a>";

})->setName('db_example');

