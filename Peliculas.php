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
	<header class="encabezado"></header>
	<?php include('/inc/menu.php'); ?>
	<div class="cuerpo">
		<div class="filtro">
			<form onsubmit="return false" method="post">
			        <select name="genero">
			                <option value="ficcion">ficcion</option>
			                <option value="romance">romance</option>
			                <option value="comedia">comedia</option>
			                <option value="accion">accion</option>
			        </select>
			        <input type="submit" value="filtrar" onclick="showRoomG(genero.value);">
			</form>
			<form onsubmit="return false" method="post">
			        <input type="text" name="director" placeholder="director">
			        <input type="submit" value="buscar" onclick="showRoomD(director.value);">
			</form>
			<form onsubmit="return false" method="post">
			        <input type="text" name="actor" placeholder="actor">
			        <input type="submit" value="buscar" onclick="showRoomA(actor.value);">
			</form>
			<form onsubmit="return false" method="post">
			        <input type="text" name="titulo"placeholder="titulo">
			        <input type="submit" value="buscar" onclick="showRoomT(titulo.value);">
			</form>
		</div>
		<table id="tabla" class="peliculas">
			<tr>
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
			</tr>
		</table>
	</div>
	<?php include('/inc/footer.php') ?>
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
