<?php 
require_once('../conexion.php');
$query="select * from peliculas where id = '".$_POST['id']."'";
$show=mysqli_query($conexion,$query) or die ("Error");
$row=mysqli_fetch_array($show);
if($row['imagen']!=NULL)
echo "<img class=\"imagenes \" src=\"".$url."images_uploaded/".$row['imagen']."\">";
else
echo "<img class=\"imagenes\" src=\"".$url."images/no-image.png\">";
echo "<ul>";
echo "<li>Nombre: ".$row['nombre']."</li>";
echo "<li>Director: ".$row['director']."</li>";
echo "<li>Actores: ".$row['actores']."</li>";
echo "<li>Descripcion: ".$row['descripcion']."</li>";
echo "</ul>";


 ?>
