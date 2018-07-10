<?php
$router = new \Services\Router();

$router->get('/' , function () {
    $route = new \Controllers\HomeController();
    $route->indexHome();
});

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    require './404.html';
});


$router->run();
