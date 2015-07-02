<?php
require_once('conexion.php');
if(!isset($_SESSION['nombreuser'])||$_SESSION['nombreuser']!='admin')
header('Location:'.$url);
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
		<form id="agregar"action="inc/subir_peli.php" method="post" enctype="multipart/form-data">
				<input type="text" name="nombre"placeholder="titulo"required>
				<input type="text" name="director" placeholder="director"required>
				<input type="file" name="imagefile" >
				<input type="text" name="actores" placeholder="actores"required>
				<input type="number"name="cantidad" placeholder="cantidad"required>
				<input type="text"name="genero"placeholder="genero"required>
				<input type="text"name="descripcion"placeholder="descripcion"required>
				<input type="submit" id="boton" value="subir">
		</form>
	</div>
	<?php include('/inc/footer.php') ?>
	<?php if(!isset($_SESSION['nombreuser'])){
		include('/inc/login and reg.php');
	} ?>
</body>
</html>
