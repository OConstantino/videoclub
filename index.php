<?php
require_once('conexion.php');
?>
<!doctype html>
<html>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link type="text/css" href="video.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<script src="video.js"></script>
<head>
	<title>VideoClub</title>
</head>

<body>
	<header class="encabezado">
	<center class="titulo"> Videoclub </center>
	</header>
	<?php include('/inc/menu.php'); ?>
	<div class="cuerpo">
		<div class="bienvenido">
			Bienvenido al nuevo videoclub de Rosario.
			Ofrecemos todo tipo de peliculas de muy buena calidad de imagen y sonido.
			Solo tienes que registrarte para poder reservar tu pelicula y luego retirarla en nuestro local.
		</div>
		<div id="slideshow">
			<div class="ele">
				<img src="http://edge.alluremedia.com.au/m/k/2015/06/arkham.jpg">
			</div>
			<div class="ele">
				<img src="http://i.kinja-img.com/gawker-media/image/upload/etwiuigvocmvjrakayvx.jpg">
			</div>
		</div>
	</div>
	<?php include('/inc/footer.php') ?>
	<?php if(!isset($_SESSION['nombreuser'])){
		include('/inc/login and reg.php');
	} ?>
</body>
</html>
