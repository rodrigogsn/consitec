<?php 
  $companyName = "Consitec | Engenharia e Tecnologia";
  $title = isset($title) ? $title." - ".$companyName : $companyName;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Language" content="pt-br">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="./src/assets/js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="./src/assets/css/main.css"/>
</head>
<body>
  <?php include "./src/views/includes/menu.php" ?>
  <main>

