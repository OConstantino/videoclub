<?php
require_once('../conexion.php');
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha=date('Y-m-d');
$fechaf=date('Y-m-d', strtotime($fecha. ' + 1 days'));
$insert_Datos="INSERT INTO  alquilado(id,user,fechai,fechaf)
VALUES('".$_POST['id']."',
	'".$_POST['user']."',
	'$fecha',
	'$fechaf')";
$DatosWeb=mysqli_query($conexion,$insert_Datos);
if($DatosWeb==false)
	echo 0;
else{
	$insert_Datos="DELETE FROM reservas WHERE id='".$_POST['id']."'";
	$DatosWeb=mysqli_query($conexion,$insert_Datos);
	$insert_Datos="UPDATE peliculas SET stock=stock-1 WHERE id='".$_POST['id']."'";
	$DatosWeb=mysqli_query($conexion,$insert_Datos);
	echo 1;
}

?>
