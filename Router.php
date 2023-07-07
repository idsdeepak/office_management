<?php

namespace oms;

use oms\models\Database;
use oms\utils\Session;

class Router {
  public $db;
  public $session;
  public $getRoutes = [];
  public $postRoutes = [];

  public function __construct() {
    $this->db = new Database();
    $this->session = new Session();
  }

  public function get($url, $callback) {
    $this->getRoutes[$url] = $callback;
  }
  public function post($url, $callback) {
    $this->postRoutes[$url] = $callback;
  }

  public function resolve() {
    $currentUrl = rtrim($_SERVER["PATH_INFO"] ?? "/", '/') ?: '/';
    $requestMethod = $_SERVER["REQUEST_METHOD"];

    $user = $this->session->get("user");

    if (!$user && $currentUrl !== "/login") {
      header("Location: /login");
      exit;
    }

    if ($user && $user["is_admin"] && strpos($currentUrl, "admin") === false) {
      header("Location: /admin/dashboard");
      exit;
    } elseif ($user && !$user["is_admin"] && strpos($currentUrl, "admin") !== false) {
      header("Location: /employee/dashboard");
      exit;
    }


    if ($requestMethod == "GET") {
      $fn = $this->getRoutes[$currentUrl] ?? null;
    } else {
      $fn = $this->postRoutes[$currentUrl] ?? null;
    }

    if ($fn) {
      call_user_func($fn, $this);
    } else {
      echo "page not found";
    }
  }

  public function renderView($view, $params = []) {
    extract($params);
    ob_start();
    include_once __DIR__ . "/views/$view.php";
    $content = ob_get_clean();
    include_once __DIR__ . "/views/layouts/_layout1.php";
  }
}
