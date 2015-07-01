<?php
require_once('../conexion.php');
$query="UPDATE peliculas SET stock=stock+1 WHERE id='".$_POST['id']."'";
$show=mysqli_query($conexion,$query) or die ("Error");
$query="UPDATE alquilado SET deudas=1 WHERE id='".$_POST['id']."' AND user='".$_POST['user']."' ";
$show=mysqli_query($conexion,$query) or die ("Error");
echo 1;

?>
