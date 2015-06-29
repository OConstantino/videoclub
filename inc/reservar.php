<?php 
require_once('../conexion.php');
$insert_Datos="INSERT INTO  reservas(id,user)
VALUES('".$_POST['id']."',
	'".$_POST['user']."')";
$DatosWeb=mysqli_query($conexion,$insert_Datos);
echo mysqli_error($conexion);
if($DatosWeb==false)
	echo 0;		
else
	echo 1;

?>