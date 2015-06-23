<div class="cogebox" id="log"style="display:none">
	<div id="loginflotante">
		<form onsubmit="return false" id="LogIn" method="post">
			<ul>
				<li><input name="user"  type="text" placeholder="Ingrese nombre de usuario" required></li>
				<li><input name="passw"  type="password" placeholder="Ingrese contraseña" required></li>
				<li id="error_login" style="display:none">Error usuario o contraseña no validos</li>
				<li><input id="bn" type="submit" value="Iniciar" onClick="ajax_login(user.value,passw.value);"></li>
			</ul>
		</form>
	</div>
	<a onClick="ventana(0);"><div class="fondonegro"></div></a>
</div>
<div class="cogebox" id="reg" style="display:none">
	<div id="loginflotante">
		<form onsubmit="return false" id="LogIn" method="post">
			<ul>
				<li><input name="nombre"  type="text" placeholder="Nombre" required></li>
				<li><input name="Lname"  type="text" placeholder="Apellido" required></li>
				<li><input name="user"  type="text" placeholder="Usuario" required></li>
				<li><input name="passw"  type="password" placeholder="Contraseña" required></li>
				<li id="success_regis" style="display:none">Usuario registrado exitosamente</li>
				<li id="error_regis" style="display:none">Usuario ya existe</li>
				<li><input id="bn" type="submit" value="Registrarse" onClick="ajax_register(user.value,passw.value,nombre.value,Lname.value);"></li>
			</ul>
		</form>
	</div>
	<a onclick="regis(0);"><div class="fondonegro"></div></a>
</div>