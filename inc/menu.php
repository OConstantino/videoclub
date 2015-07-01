<nav class="menu">
	<a href="http://localhost/videoclub/"class="cursor"><li class="item_m">Inicio</li></a>
	<a href="http://localhost/videoclub/Peliculas.php"class="cursor"><li class="item_m">Peliculas</li></a>
	<a href="http://localhost/videoclub/contacto.php" class="cursor"><li class="item_m">Contacto</li></a> 
	<?php if(!isset($_SESSION['nombreuser'])) { ?>
	<a onClick="ventana(1);"class="cursor"><li class="item_l">Iniciar Sesion</li></a>
	<a onClick="regis(1);" class="cursor"><li class="item_l">Registrarse</li></a>
	<?php } else { ?>
	<a href="http://localhost/VideoClub/inc/cerrar.php?cerrar=yes"><li class="item_l">X</li></a>
	<li class="item_l"><?php echo $_SESSION['nombreuser'] ?></li>
	<?php }
	if(isset($_SESSION['nombreuser']) && $_SESSION['nombreuser']=='admin'){ ?>
			<li class="item_m cursor" id="click">+
				<ul id="solapa" style="display:none">
					<li><a href="http://localhost/VideoClub/agregar_peliculas.php">Agregar peliculas</a></li>
					<li><a href="http://localhost/VideoClub/reservas.php">Confirmar Reservas</a></li>
				</ul>
			</li>
			<script>
			$( "#click" ).click(function() {
				$( "#solapa" ).slideToggle();
			});
			</script>
			<style>
			#solapa{
				padding:10px 0;
				list-style: none;
				text-decoration:none;
				margin:2px;
				padding:2px;
				background-color: #ccc;
				position: absolute;
			}
			#solapa li{
				display: block;
			}
			#solapa li a{
				text-decoration:none;
			}
			</style>
		<?php } ?>
</nav>
