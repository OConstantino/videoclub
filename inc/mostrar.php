<?php
require_once('../conexion.php');
$action=$_POST["action"];
if($action==0)
$action1=7;
else{
	$action1=$action;
	$action=7;

}
if($action>=0){
	$query="select * from (select @rownum := @rownum+1 as c, p.* from peliculas p, (select @rownum := 0) r) j where c >= ".$action." and c < ".$action1."";
	$show=mysqli_query($conexion,$query) or die ("Error");
	while($row=mysqli_fetch_array($show)){
		echo "<tr>";
		if($row['imagen']!=NULL)
			echo "<td><img class=\"imagenes\" src=\"".$url."images_uploaded/".$row['imagen']."\"></td>";
		else
			echo "<td><img class=\"imagenes\" src=\"".$url."images/no-image.png\"></td>";
		echo "<td>".$row['nombre']."</td>";
		echo "<td>".$row['director']."</td>";
		echo "<td>".$row['actores']."</td>";
		echo "<td>".$row['genero']."</td>";
		echo "</tr>";
	}
}
?>
