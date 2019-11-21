<?php

class NavigationController {
  public static function CreateView($viewName) {
    require_once("./src/views/$viewName.php");
  }
}

?>