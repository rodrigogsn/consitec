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

  <link rel="stylesheet" type="text/css" href="./src/assets/css/main.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>
  <script src="https://kit.fontawesome.com/81fa77429e.js" crossorigin="anonymous"></script>
  <script src="./src/assets/js/main.js"></script>
</head>
<body>
  <?php include "./src/views/includes/menu.php" ?>
  <main>

