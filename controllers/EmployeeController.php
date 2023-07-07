<?php

namespace oms\controllers;

class EmployeeController {

  public function index($router) {
    $router->renderView("dashboard/employee", []);
  }
}
