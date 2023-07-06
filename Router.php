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
    $currentUrl = $_SERVER["PATH_INFO"] ?? "/";
    $requestMethod = $_SERVER["REQUEST_METHOD"];

    if ($requestMethod == "GET") {
      $fn = $this->getRoutes[$currentUrl] ?? null;
    } else {
      $fn = $this->getRoutes[$currentUrl] ?? null;
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
