<?php

namespace oms\controllers;

class UserController {

  public function index($router) {
    $router->renderView("dashboard/index", []);
  }
  public function login($router) {
    $router->renderView("user/login", []);
  }
}
