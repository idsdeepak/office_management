<?php

require_once '../vendor/autoload.php';

use oms\Router;
use oms\controllers\UserController;
use oms\controllers\AdminController;
use oms\controllers\EmployeeController;

$router = new Router();



$userController = new UserController();
$adminController = new AdminController();
$employeeController = new EmployeeController();

//user routes
$router->get("/", [$userController, "index"]);
$router->get("/login", [$userController, "login"]);
$router->post("/login", [$userController, "login"]);

//admin routes
$router->get("/admin", [$adminController, "index"]);
$router->get("/admin/dashboard", [$adminController, "index"]);
// $router->get("/admin/attendance", [$adminController, "attendance"]);

//employee routes
$router->get("/employee", [$employeeController, "index"]);
$router->get("/employee/dashboard", [$employeeController, "index"]);




$router->resolve();

// echo "<pre>";
// print_r($router);
// echo "</pre>";
