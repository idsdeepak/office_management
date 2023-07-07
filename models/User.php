<?php

namespace oms\models;

class User {
  public $id = null;
  public $firstname;
  public $lastname = null;
  public $email;
  public $phoneNumber;
  public $password;
  public $is_admin;
  public $designation;
  public $startDate;
  public $image;

  public function load($data) {
    $this->id = $data["id"] ?? null;
    $this->firstname = $data["firstname"] ?? null;
    $this->lastname = $data["lastname"] ?? null;
    $this->email = $data["email"] ?? null;
    $this->phoneNumber = $data["phone_number"] ?? null;
    $this->password = $data["password"] ?? null;
    $this->is_admin = $data["is_admin"] ?? null;
    $this->designation = $data["designation"] ?? null;
    $this->startDate = $data["startDate"] ?? null;
    $this->image = $data["image"] ?? null;
  }

  public function validateSignup() {
    $errors = [];
    if (!$this->firstname) {
      $errors["firstname"] = "Firstname is required";
    }
    if (!$this->email) {
      $errors["email"] = "Email is required";
    }
    if (!$this->password) {
      $errors["password"] = "Password is required";
    } elseif (strlen($this->password) <= 6) {
      $errors["password"] = "Password must be atleast 6 characters";
    }
    if (!$this->designation) {
      $errors["desigantion"] = "Desigantion is required";
    }
    return $errors;
  }

  public function validateLogin() {
    $errors = [];

    if (!$this->email) {
      $errors["email"] = "Email is required";
    }

    if (!$this->password) {
      $errors["password"] = "Password is required";
    }

    return $errors;
  }

  public function login($router) {
    $errors = [];

    $user = $router->db->getUserByEmail($this->email);

    if ($user && password_verify($this->password, $user["password"])) {
      $router->session->set("user", $user);
      header('Location: /');
      exit;
    } else {
      $errors["loginError"] = "Incorrect email or password";
    }
    return $errors;
  }
}
