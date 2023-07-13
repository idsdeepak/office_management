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

  public function getUserAttendance($userId) {
    $sql = "SELECT * FROM `attendance` 
            WHERE `user_id`=$userId 
            AND `today_date`=CURDATE()";
    try {
      $result = mysqli_query($this->conn, $sql);
      $attendance = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } catch (mysqli_sql_exception $e) {
      echo "$e </br> failed";
      exit;
    }
    return $attendance;
  }

  public function getUserLastAttendance($userId) {
    $sql = "SELECT * FROM `attendance` 
            WHERE `user_id`=$userId 
            AND `today_date`=CURDATE() 
            AND `last_action`='in'";
    try {
      $result = mysqli_query($this->conn, $sql);
      $attendance = mysqli_fetch_assoc($result);
    } catch (mysqli_sql_exception $e) {
      echo "$e </br> failed";
      exit;
    }
    return $attendance;
  }

  public function insertUserAttendance($userId) {
    $sql = "INSERT INTO `attendance`(`user_id`, `last_action`) 
            VALUES ($userId,'in')";
    try {
      $result = mysqli_query($this->conn, $sql);
    } catch (mysqli_sql_exception $e) {
      echo "$e </br> failed";
      exit;
    }
    return $result;
  }

  public function updateUserAttendance($attendanceId) {
    $sql = "UPDATE `attendance` 
            SET `last_action` = 'out' 
            WHERE `id` = $attendanceId;";
    try {
      $result = mysqli_query($this->conn, $sql);
    } catch (mysqli_sql_exception $e) {
      echo "$e </br> failed";
      exit;
    }
    return $result;
  }
}
