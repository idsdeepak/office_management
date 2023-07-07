<?php

namespace oms\models;

use mysqli_sql_exception;

class Database {
  public $conn;

  public function __construct() {
    define("HOST", "127.0.0.1");
    define("USER", "root");
    define("PASSWORD", "");
    define("DB_NAME", "oms_db");
    try {
      $this->conn = mysqli_connect(HOST, USER, PASSWORD, DB_NAME);
    } catch (mysqli_sql_exception $e) {
      echo "$e </br> failed";
      exit;
    }
  }

  public function getUserByEmail($email) {
    $sql = "SELECT * FROM `users` WHERE `email`='$email'";
    try {
      $result = mysqli_query($this->conn, $sql);
      $user = mysqli_fetch_assoc($result);
    } catch (mysqli_sql_exception $e) {
      echo "$e </br> failed";
      exit;
    }
    return $user ?? false;
  }
}
