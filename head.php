<?php include 'functions.php' ?>

<?php $path = ( getRelativePath(getcwd(), $_SERVER["DOCUMENT_ROOT"].'/consitec') ? getRelativePath(getcwd(), $_SERVER["DOCUMENT_ROOT"].'/consitec') : '') ?>

<meta charset="utf-8" />
<title>Consitec</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="<?= $path.'main.js' ?>"></script>

<link rel="stylesheet" type="text/css" href="<?= $path.'main.css' ?>"/>
