<nav class="menu">
	<script type="text/javascript">
		var num=100;
		$(window).bind('scroll', function () {
			if ($(window).scrollTop() > num){
				$('.menu').addClass('fixed');
			} else {
				$('.menu').removeClass('fixed');
			}
		});
	</script>
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
					<li><a href="http://localhost/VideoClub/alquiladas.php">peliculas alquiladas</a></li>
				</ul>
			</li>
			<script>
			$( "#click" ).click(function() {
				$( "#solapa" ).slideToggle();
			});
			</script>
			<style>
			#solapa{
				list-style: none;
				text-decoration:none;
				margin:2px;
				padding: 12px;
				background-color: #F2F2F2;
				position: absolute;
				z-index: 1;
			}
			#solapa li{
				padding-bottom: 5px;
				display: block;
			}
			#solapa li a{
				text-decoration:none;
			}
			</style>
		<?php } ?>
</nav>
