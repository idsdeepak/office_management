<?php

require_once '../vendor/autoload.php';

use oms\Router;
use oms\controllers\UserController;
use oms\controllers\AdminController;

$router = new Router();



$userController = new UserController();
$adminController = new AdminController();

$router->get("/", [$userController, "index"]);
$router->get("/login", [$userController, "login"]);
$router->post("/login", [$userController, "login"]);



// $router->get("/admin", [$adminController, "index"]);
// $router->get("/admin/settings", [$adminController, "getSettings"]);


$router->resolve();

// echo "<pre>";
// print_r($router);
// echo "</pre>";
