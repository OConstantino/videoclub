<?php
require_once('conexion.php');
?>
<!doctype html>
<html>
<meta charset="utf-8">
<link type="text/css" href="video.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

<link rel="stylesheet" href="vakata-jstree-8ea6ce7/dist/themes/default/style.min.css" />

<!-- 4 include the jQuery library -->
<script src="vakata-jstree-8ea6ce7/dist/libs/jquery-2.1.4.min.js"></script>
<!-- 5 include the minified jstree source -->
<script src="vakata-jstree-8ea6ce7/dist/jstree.min.js"></script>
<head>
	<title>VideoClub</title>
</head>

<body>
	<header class="encabezado">
		<center class="titulo"> Videoclub </center>
	</header>
	<?php include('/inc/menu.php'); ?>
	<div class="cuerpo">
		<div id="jstree"></div>
		<div id="contenidos"></div>
	</div>
	<script >
		$(document).ready (function () {
			$('#jstree').jstree({ 
				'core' : {
					'data' : {
						"url" : "/videoclub/inc/jstree.php",
						"dataType" : "Json"
					}
				}
			})
			.on('changed.jstree',function (e, data){
				node = data.node;
				$.post("/videoclub/inc/contenido.php",{'id':node.id}, function(data) { 
					$('#contenidos').html(data);
				});
			});
		});
	</script>
	<style type="text/css">
		#jstree{
			width: 30%;
			float: left;
		}
		#contenidos{
			margin-top: 10px;
			width: 70%;
			float: right;
			font-size: 25px;
		}
		#contenidos ul{
			list-style: none;
			display: inline;
		}
		.imagenes{
			width: 400px;
			height:300px;
			float: left;
		}
	</style>
	<?php include('/inc/footer.php') ?>
	<?php if(!isset($_SESSION['nombreuser'])){
		include('/inc/login and reg.php');
	} ?>
</body>
</html>
