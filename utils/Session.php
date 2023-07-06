<?php

namespace oms\utils;

class Session {

  public function __construct() {
    session_start();
  }

  public function get($key) {
    return $_SESSION[$key] ?? null;
  }

  public function set($key, $value) {
    $_SESSION[$key] = $value;
  }

  public function destroy() {
    session_unset();
    session_destroy();
  }
}
