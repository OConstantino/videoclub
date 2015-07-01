<?php
require_once('../conexion.php');
$action=$_POST['action'];
$action1=$_POST['action1'];
if($action>=0){
	$query="select * from (select @rownum := @rownum+1 as c, p.* from peliculas p, (select @rownum := 0) r) j where c >= ".$action." and c < ".$action1."";
	$show=mysqli_query($conexion,$query) or die ("Error");
	while($row=mysqli_fetch_array($show)){
		echo "<tr>";
		echo "<form onsubmit=\"return false\" id=\"reserva\" method=\"post\">";
		if($row['imagen']!=NULL){
                        if(mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM alquilado WHERE id='".$row['id']."' AND user='".$_SESSION['nombreuser']."'")))
                                echo "<td><div class=\"visto\"></div><img class=\"imagenes\" src=\"".$url."images_uploaded/".$row['imagen']."\"></td>";
                        else
                                echo "<td><img class=\"imagenes \" src=\"".$url."images_uploaded/".$row['imagen']."\"></td>";
		}
		else{
                        if(mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM alquilado WHERE id='".$row['id']."' AND user='".$_SESSION['nombreuser']."'")))
                                echo "<td><div class=\"visto\"></div><img class=\"imagenes \" src=\"".$url."images/no-image.png\"></td>";
                        else
                                echo "<td><img class=\"imagenes\" src=\"".$url."images/no-image.png\"></td>";
		}
		echo "<td>".$row['nombre']."</td>";
		echo "<td>".$row['director']."</td>";
		echo "<td>".$row['actores']."</td>";
		echo "<td>".$row['genero']."</td>";
		if(isset($_SESSION['nombreuser']) && $_SESSION['nombreuser']=='admin'){
			echo "<td>".$row['cantidad']."</td>";
			echo "<td>".$row['stock']."</td>";
		}
		if(isset($_SESSION['nombreuser']) &&
		mysqli_fetch_array(mysqli_query($conexion,"SELECT stock FROM peliculas WHERE id='".$row['id']."' AND stock>0"))
		&& !mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM reservas WHERE id='".$row['id']."' AND user='".$_SESSION['nombreuser']."'"))
		&& !mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM alquilado WHERE id='".$row['id']."' AND user='".$_SESSION['nombreuser']."' AND deudas IS NULL ")))
		echo "<td><input type=\"submit\" name=\"boton\" onClick=\"reservar('".$row['id']."','".$_SESSION['nombreuser']."');this.style.display='none'\" value=\"reservar\"></td>";
		echo "</form>";
		echo "</tr>";
	}

}
?>
