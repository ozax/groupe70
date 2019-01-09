<?php
$router = new \Services\Router();

$router->get('/' , function () {
    $route = new \Controllers\HomeController();
    $route->showClandar();
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


$router->get('/chantier/add' , function () {

    $route = new \Controllers\ChantierController();
    $route->addChantier();
});

$router->post('/chantier/add' , function () {

    $route = new \Controllers\ChantierController();
    $route->postaddChantier();
});

$router->get('/chantier' , function () {

    $route = new \Controllers\ChantierController();
    $route->showchantier();
});

$router->get('/moyens/add' , function () {

    $route = new \Controllers\MoyensController();
    $route->addMoyens();
});

$router->post('/moyens/add' , function () {

    $route = new \Controllers\MoyensController();
    $route->postaddMoyens();
});

$router->get('/moyens' , function () {

    $route = new \Controllers\MoyensController();
    $route->showmoyens();
});

$router->get('/societe/add' , function () {

    $route = new \Controllers\SocieteController();
    $route->addSociete();
});

$router->post('/societe/add' , function () {

    $route = new \Controllers\SocieteController();
    $route->postaddSociete();
});

$router->get('/societe' , function () {

    $route = new \Controllers\SocieteController();
    $route->showsociete();
});




$router->get('/login' , function () {

    $route = new \Controllers\UserController();
    $route->LoginUser();
});

$router->post('/login' , function () {
    $route = new \Controllers\UserController();
    $route->PostLoginUser();
});

/**$router->get('/calandar' , function () {
    $route = new \Controllers\HomeController();
    $route->showClandar();
});**/






$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    require './404.html';
});


$router->run();
