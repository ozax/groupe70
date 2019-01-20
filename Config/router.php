<?php
$router = new \Services\Router();
// **********calandrier**************
$router->get('/' , function () {
    $route = new \Controllers\HomeController();
    $route->showClandar();
});

$router->get('/salles' , function () {
    $route = new \Controllers\HomeController();
    $route->showClandarSalle();
});

$router->get('/testcalandar' , function () {
    $route = new \Controllers\CalandarController();
    $route->getCalandar();
});

//************** users******************

$router->get('/users/add' , function () {

    $route = new \Controllers\UserController();
    $route->adduser();
});

$router->post('/users/add' , function () {

    $route = new \Controllers\UserController();
    $route->postadduser();
});

$router->get('/users/edit/(\d+)' , function ($id) {

    $route = new \Controllers\UserController();
    $route->editUser($id);
});

$router->post('/users/edit/(\d+)' , function ($id) {

    $route = new \Controllers\UserController();
    $route->postEditUser($id);
});

$router->get('/users/delete/(\d+)' , function ($id) {
    $route = new \Controllers\UserController();
    $route->deleteUser($id);
});


$router->get('/users' , function () {

    $route = new \Controllers\UserController();
    $route->showuser();
});

// **********chantier*************************

$router->get('/chantier/add' , function () {

    $route = new \Controllers\ChantierController();
    $route->addChantier();
});

$router->post('/chantier/add' , function () {

    $route = new \Controllers\ChantierController();
    $route->postaddChantier();
});

$router->get('/chantier/edit/(\d+)' , function ($id) {

    $route = new \Controllers\ChantierController();
    $route->editChantier($id);
});

$router->post('/chantier/edit/(\d+)' , function ($id) {

    $route = new \Controllers\ChantierController();
    $route->postEditChantier($id);
});

$router->get('/chantier/delete/(\d+)' , function ($id) {
    $route = new \Controllers\ChantierController();
    $route->deleteChantier($id);
});

$router->get('/chantier' , function () {

    $route = new \Controllers\ChantierController();
    $route->showchantier();
});

// ***********moyens*******************

$router->get('/moyens/add' , function () {

    $route = new \Controllers\MoyensController();
    $route->addMoyens();
});

$router->post('/moyens/add' , function () {

    $route = new \Controllers\MoyensController();
    $route->postaddMoyens();
});

$router->get('/moyens/edit/(\d+)' , function ($id) {

    $route = new \Controllers\MoyensController();
    $route->editMoyen($id);
});

$router->post('moyens/edit/(\d+)' , function ($id) {

    $route = new \Controllers\MoyensController();
    $route->postEditMoyen($id);
});

$router->get('/moyens/delete/(\d+)' , function ($id) {
    $route = new \Controllers\MoyensController();
    $route->deleteMoyen($id);
});

$router->get('/moyens' , function () {

    $route = new \Controllers\MoyensController();
    $route->showmoyens();
});

// ***********societe*******************

$router->get('/societe/add' , function () {

    $route = new \Controllers\SocieteController();
    $route->addSociete();
});

$router->post('/societe/add' , function () {

    $route = new \Controllers\SocieteController();
    $route->postaddSociete();
});

$router->get('/societe/edit/(\d+)' , function ($id) {

    $route = new \Controllers\SocieteController();
    $route->editSociete($id);
});

$router->post('/societe/edit/(\d+)' , function ($id) {

    $route = new \Controllers\SocieteController();
    $route->postEditSociete($id);
});

$router->get('/societe/delete/(\d+)' , function ($id) {
    $route = new \Controllers\SocieteController();
    $route->deleteSociete($id);
});

$router->get('/societe' , function () {

    $route = new \Controllers\SocieteController();
    $route->showsociete();
});

// ***********stockage*******************

$router->get('/stockage/add' , function () {

    $route = new \Controllers\StockageController();
    $route->addStockage();
});


$router->post('/stockage/add' , function () {

    $route = new \Controllers\StockageController();
    $route->postaddStockage();
});

$router->get('/stockage/edit/(\d+)' , function ($id) {

    $route = new \Controllers\StockageController();
    $route->editStockage($id);
});

$router->post('/stockage/edit/(\d+)' , function ($id) {

    $route = new \Controllers\StockageController();
    $route->postEditStockage($id);
});

$router->get('/stockage/delete/(\d+)' , function ($id) {
    $route = new \Controllers\StockageController();
    $route->deleteStockage($id);
});

$router->get('/stockage' , function () {

    $route = new \Controllers\StockageController();
    $route->showsstockage();
});

// ***********Aires*******************

$router->get('/aires/add' , function () {

    $route = new \Controllers\AiresController();
    $route->addAires();
});

$router->post('/aires/add' , function () {

    $route = new \Controllers\AiresController();
    $route->postaddAires();
});

$router->get('/aires/edit/(\d+)' , function ($id) {

    $route = new \Controllers\AiresController();
    $route->editAire($id);
});

$router->post('/aires/edit/(\d+)' , function ($id) {

    $route = new \Controllers\AiresController();
    $route->postEditAire($id);
});

$router->get('/aires/delete/(\d+)' , function ($id) {
    $route = new \Controllers\AiresController();
    $route->deleteAire($id);
});

$router->get('/aires' , function () {

    $route = new \Controllers\AiresController();
    $route->showaires();
});




// ***********login*******************

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
