<?php

namespace oms\controllers;

class DashboardController {

  public function dashboard($router) {
    $user = $router->session->get("user");
    $userId = $user["id"];
    $lastAttendance = $router->db->getUserLastAttendance($userId);
    $lastAttendanceId = $lastAttendance["id"] ?? null;
    $isPunched = $lastAttendanceId ? true : false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      if ($isPunched) {
        $router->db->updateUserAttendance($lastAttendanceId);
        $isPunched = false;
      } else {
        $router->db->insertUserAttendance($userId);
        $isPunched = true;
      }
    }
    $attendanceRecords = $router->db->getUserAttendance($userId) ?? [];
    $router->renderView("dashboard/dashboard", [
      "isPunched" => $isPunched,
      "attendanceRecords" => $attendanceRecords,
    ]);
  }
}
