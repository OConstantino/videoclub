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
	<header class="encabezado">
		<center class="titulo">Contacto</center>
	</header>
	<?php include('/inc/menu.php'); ?>
	<div class="cuerpo">
		<div class="mapa">
                <iframe  src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d13390.72703062084!2d-60.62866643785412!3d-32.959410618962785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m0!4m5!1s0x95b7ab01ccf483b5%3A0x74c21ff08d3bd046!2sAyacucho+1601-1699%2C+S2000BYF+Rosario%2C+Santa+Fe!3m2!1d-32.9589292!2d-60.6295242!5e0!3m2!1ses!2sar!4v1435772898060" width="980" height="350" frameborder="1" style="border:1" allowfullscreen></iframe>
        </div>
        <div class="descripcion">
    			<h3 class="acercate">Acercate a nuestro único local:</h3>
    			<h4 class="direccion">Pellegrini 250 esq Ayacucho</h4>
    			<br></br>
    			<hr width="950px">
    			<br><h4 class="direccion">Abierto de lunes a sabados de 15hs a 21hs. Feriados cerrado.</h4>
    	</div>
    </div>
	<?php include('/inc/footer.php') ?>
	<?php if(!isset($_SESSION['nombreuser'])){
		include('/inc/login and reg.php');
	} ?>
</body>
</html>
