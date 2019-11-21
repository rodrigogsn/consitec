<?php

require_once('Routes.php');

function __autoload($class_name) {
  if (file_exists('./src/classes/'.$class_name.'.php')) {
    require_once './src/classes/'.$class_name.'.php';
  } else if (file_exists('./src/controllers/'.$class_name.'.php')) {
    require_once './src/controllers/'.$class_name.'.php';
  }
}

?>