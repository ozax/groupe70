<?php
$router = new \Services\Router();

$router->get('/' , function () {
    $route = new \Controllers\HomeController();
    $route->indexHome();
});

$router->get('/login' , function () {

    $route = new \Controllers\AuthentificationController();
    $route->login();
});

$router->get('/users/add' , function () {

    $route = new \Controllers\UserController();
    $route->adduser();
});

$router->post('/users/add' , function () {

    $route = new \Controllers\UserController();
    $route->postadduser();
});

$router->get('/users' , function () {

    $route = new \Controllers\UserController();
    $route->showuser();
});


$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    require './404.html';
});


$router->run();
