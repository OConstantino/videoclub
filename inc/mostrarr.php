<?php
require_once('../conexion.php');
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha=date('Y-m-d');
$query="UPDATE peliculas SET stock=stock+1 WHERE id=(SELECT id FROM reservas WHERE fechaf<'$fecha')";
$show=mysqli_query($conexion,$query) or die ("Error");
$query="DELETE FROM reservas WHERE fechaf<'$fecha'";
$show=mysqli_query($conexion,$query) or die ("Error");
$query="select * from reservas ";
$show=mysqli_query($conexion,$query) or die ("Error");
while($row=mysqli_fetch_array($show)){
        echo "<tr>";
        echo "<form onsubmit=\"return false\" id=\"reserva\" method=\"post\">";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['user']."</td>";
        echo "<td><input type=\"submit\" id=\"boton\" onClick=\"alquilar('".$row['id']."','".$row['user']."');\" value=\"Confirmar\"></td>";
        echo "</form>";
        echo "</tr>";
}
 ?>
