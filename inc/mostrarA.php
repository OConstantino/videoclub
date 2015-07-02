<?php
require_once('../conexion.php');
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha=date('Y-m-d');
$query="select * from alquilado where deudas IS NULL ";
$show=mysqli_query($conexion,$query) or die ("Error");
while($row=mysqli_fetch_array($show)){
        echo "<tr>";
        echo "<form onsubmit=\"return false\" id=\"alquilado\" method=\"post\">";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['user']."</td>";
        echo "<td><input type=\"submit\" id=\"boton\" onClick=\"devuelto('".$row['id']."','".$row['user']."');\" value=\"Confirmar\"></td>";
        echo "</form>";
        echo "</tr>";
}
 ?>
