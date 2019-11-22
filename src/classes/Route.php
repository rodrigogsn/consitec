<?php

class Route {
  public static $validRoutes = array();

  public static function set($route, $function) {
    self::$validRoutes[] = $route;

    $project = isset($_GET['project']) ? $_GET['project'] : '';

    if ($_GET['url'] == $route) {
      $function->__invoke($project);

    }
  }
}

?>