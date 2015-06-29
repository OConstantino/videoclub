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
	<div class="cuerpo">
		<table id="tabla" class="peliculas">
			<tr>
				<td></td>
				<td>Titulo</td>
				<td>Director</td>
				<td>Actores</td>
				<td>Genero</td>
			</tr>
		</table>
	</div>
	<footer class="pie"></footer>
	<?php if(!isset($_SESSION['nombreuser'])){
		include('/inc/login and reg.php');
	} ?>
	<div class="cogebox" id="res"style="display:none">
		<div id="loginflotante">
			<h1>reserva exitosa</h1>
		</div>
		<div class="fondonegro"></div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		showRoom(0);
	});
	$(window).scroll(function() {
		if($(window).scrollTop() + window.innerHeight == $(document).height()) {
			showRoom(1);
		}
	});
</script>
</html>