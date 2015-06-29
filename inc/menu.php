<nav class="menu">
	<a href="http://localhost/videoclub/"class="cursor"><li class="item_m">Inicio</li></a>
	<a href="http://localhost/videoclub/Peliculas.php"class="cursor"><li class="item_m">Peliculas</li></a>
	<li class="item_m">Contacto</li>
	<?php if(!isset($_SESSION['nombreuser'])) { ?>
	<a onClick="ventana(1);"class="cursor"><li class="item_l">Iniciar Sesion</li></a>
	<a onClick="regis(1);" class="cursor"><li class="item_l">Registrarse</li></a>
	<?php } else { ?>
	<a href="http://localhost/VideoClub/inc/cerrar.php?cerrar=yes"><li class="item_l">X</li></a>
	<li class="item_l"><?php echo $_SESSION['nombreuser'] ?></li>
	<?php }
	if(isset($_SESSION['nombreuser'])){
		if($_SESSION['nombreuser']=='admin'){
			echo "<a href=\"http://localhost/VideoClub/agregar_peliculas.php\"><li class=\"item_m\">+</li></a>";
		}}?>
</nav>