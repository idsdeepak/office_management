<?php

namespace oms\controllers;

class AdminController {

  public function dashboard($router) {
    $user = $router->session->get("user");
    $userId = $user["id"];
    $attendance = $router->db->getUserLastAttendance($userId);
    $attendanceId = $attendance["id"] ?? null;
    $punched = $attendance ? true : false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      if ($punched) {
        $router->db->updateUserAttendance($attendanceId);
        $punched = false;
      } else {
        $router->db->insertUserAttendance($userId);
        $punched = true;
      }
    }

    $router->renderView("dashboard/dashboard", [
      "punched" => $punched,
    ]);
  }
}
