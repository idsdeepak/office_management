<?php

require_once '../vendor/autoload.php';

use oms\Router;
use oms\controllers\UserController;
use oms\controllers\DashboardController;
use oms\controllers\AdminController;
use oms\controllers\EmployeeController;

$router = new Router();

$userController = new UserController();
$dashboardController = new DashboardController();
$adminController = new AdminController();
$employeeController = new EmployeeController();

//user routes
$router->get("/", [$userController, "index"]);
$router->get("/login", [$userController, "login"]);
$router->post("/login", [$userController, "login"]);

//admin routes
$router->get("/admin", [$dashboardController, "dashboard"]);
$router->get("/admin/dashboard", [$dashboardController, "dashboard"]);
$router->post("/admin", [$dashboardController, "dashboard"]);
$router->post("/admin/dashboard", [$dashboardController, "dashboard"]);

//employee routes
$router->get("/employee", [$dashboardController, "dashboard"]);
$router->get("/employee/dashboard", [$dashboardController, "dashboard"]);
$router->post("/employee", [$dashboardController, "dashboard"]);
$router->post("/employee/dashboard", [$dashboardController, "dashboard"]);

$router->resolve();

// echo "<pre>";
// print_r($router);
// echo "</pre>";
