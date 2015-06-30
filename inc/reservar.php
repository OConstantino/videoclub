<?php
require_once('../conexion.php');
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha=date('Y-m-d');
$fechaf=date('Y-m-d', strtotime($fecha. ' + 4 days'));
$insert_Datos="INSERT INTO  reservas(id,user,fechai,fechaf)
VALUES('".$_POST['id']."',
	'".$_POST['user']."',
	'$fecha',
	'$fechaf')";
$DatosWeb=mysqli_query($conexion,$insert_Datos);
if($DatosWeb==false)
	echo 0;
else
	echo 1;

?>
