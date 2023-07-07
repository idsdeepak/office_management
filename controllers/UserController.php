<?php

namespace oms\controllers;

use oms\models\User;

class UserController {

  public function index($router) {

    $user = $router->session->get("user");
    if ($user["is_admin"]) {
      header("location: /admin/dashboard");
      exit;
    } else {
      header("location: /employee/dashboard");
      exit;
    }
    // $router->renderView("dashboard/employee", []);
  }

  public function login($router) {
    $errors = [];
    $inputData = [
      "email" => "",
      "password" => ""
    ];
    // check for post request and validate input data
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $inputData["email"] = trim(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL));
      $inputData["password"] = trim(filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING));

      $user = new User();
      $user->load($inputData);
      $errors = $user->validateLogin();
      if (!$errors) {
        $errors = $user->login($router);
      }
    }
    $router->renderView("user/login", [
      "errors" => $errors,
      "inputData" => $inputData
    ]);
  }
}
