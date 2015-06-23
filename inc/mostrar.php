<?php 
require_once('../conexion.php');
$action=$_POST["action"];
if($action=="showroom"){
	$query="SELECT * FROM peliculas";
	$show=mysqli_query($conexion,$query) or die ("Error");
	while($row=mysqli_fetch_array($show)){
		echo "<tr>";
		if($row['imagen']!=NULL)
			echo "<td><img class=\"imagenes\" src=\"".$url."images_uploaded/".$row['imagen']."\"></td>";
		else
			echo "<td><img class=\"imagenes\" src=\"".$url."images/no-image.png\"></td>";
		echo "<td>".$row['nombre']."</td>";

		echo "</tr>";
	}
}
?>