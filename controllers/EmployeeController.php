<?php

namespace oms\controllers;

class EmployeeController {

  public function dashboard($router) {
    $router->renderView("dashboard/dashboard", []);
  }
}
