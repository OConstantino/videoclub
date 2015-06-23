<?php
require_once("../conexion.php");
	$insert_Datos="INSERT INTO  usuarios (user,passw,name,Lname) VALUES('".$_POST['user']."','".md5($_POST['passw'])."','".$_POST['nombre']."','".$_POST['apellido']."')";
	$DatosWeb=mysqli_query($conexion,$insert_Datos);
	if($DatosWeb==false)
		echo 0;
	else
		echo 1;
?>
