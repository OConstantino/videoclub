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
<script src="inc/buscar.js"></script>
<head>
	<title>VideoClub</title>
</head>

<body>
	<header class="encabezado">
		<center class="titulo">Peliculas</center>
	</header>
	<?php include('/inc/menu.php'); ?>
	<div class="cuerpo">
		<div class="filtro">
			<h4 class="direccion">Filtrar</h4>
			<form onsubmit="return false" method="post">
			        <select name="genero">
			                <option value="ficcion">Ficcion</option>
			                <option value="romance">Romance</option>
			                <option value="comedia">Comedia</option>
			                <option value="accion">Accion</option>
			        </select>
			        <input type="submit" id="boton" value="Filtrar" onclick="showRoomG(genero.value);">
			</form>
			<form onsubmit="return false" method="post">
			        <input type="search" name="director" placeholder="Director">
			        <input type="submit" id="boton" value="Buscar" onclick="showRoomD(director.value);">
			</form>
			<form onsubmit="return false" method="post">
			        <input type="search" name="actor" placeholder="Actor">
			        <input type="submit" id="boton" value="Buscar" onclick="showRoomA(actor.value);">
			</form>
			<form onsubmit="return false" method="post">
			        <input type="search" name="titulo"placeholder="Titulo">
			        <input type="submit" id="boton" value="Buscar" onclick="showRoomT(titulo.value);">
			</form>
		</div>
		<table id="tabla" class="peliculas">
				<thead>
					<td></td>
					<td>Titulo</td>
					<td>Director</td>
					<td>Actores</td>
					<td>Genero</td>
					<?php if(isset($_SESSION['nombreuser'])&& $_SESSION['nombreuser']=='admin'){ ?>
						<td>Cantidad</td>
						<td>Stock</td>
					<?php } ?>
				</thead>
				<tbody id="tbody">

				</tbody>
		</table>
	</div>
	<?php include('/inc/footer.php') ?>
	<?php if(!isset($_SESSION['nombreuser'])){
		include('/inc/login and reg.php');
	} ?>
	<div class="cogebox" id="res"style="display:none">
		<div id="loginflotante">
			<h1>Reserva exitosa</h1>
			<h2>Tiene 4 días para retirar la película.</h2>
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
