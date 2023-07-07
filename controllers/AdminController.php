<?php

namespace oms\controllers;

class AdminController {

  public function index($router) {
    // $user = $router->session->get("user");
    // if ($user["is_admin"]) {
    //   header("location: /admin");
    // }
    $router->renderView("dashboard/admin", []);
  }
}
