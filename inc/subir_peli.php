<?php
require_once('../conexion.php');
$nombre_imagen = $_FILES['imagefile']['name'];
move_uploaded_file($_FILES['imagefile']['tmp_name'], "../images_uploaded/".$nombre_imagen);
$insert_Datos="INSERT INTO peliculas (nombre,imagen,descripcion, cantidad,stock,genero,director,actores)
 VALUES(
 	'".$_POST['nombre']."',
 	'".$nombre_imagen."',
 	'".$_POST['descripcion']."',
 	'".$_POST['cantidad']."',
         '".$_POST['cantidad']."',
 	'".$_POST['genero']."',
 	'".$_POST['director']."',
 	'".$_POST['actores']."'
 )";
$DatosWeb=mysqli_query($conexion,$insert_Datos);
header('Location:'.$url);
?>
