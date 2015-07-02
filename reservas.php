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
                        <td>Id</td>
                        <td>User</td>
                        <td></td>
                </table>
	</div>
	<?php include('/inc/footer.php') ?>
	<?php if(!isset($_SESSION['nombreuser'])){
		include('/inc/login and reg.php');
	} ?>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		MostrarTabla("/inc/mostrarr.php");
	});
</script>
</html>
