<?php
require_once('conexion.php');
?>
<!doctype html>
<html>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link type="text/css" href="video.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<script src="video.js"></script>
<head>
	<title>VideoClub</title>
</head>

<body>
	<header class="encabezado"></header>
	<?php include('/inc/menu.php'); ?>
	<div class="cuerpo"></div>
	<footer class="pie"></footer>
	<?php if(!isset($_SESSION['iduser'])){
		include('/inc/login and reg.php');
	} ?>
</body>
</html>
