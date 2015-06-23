<?php
require_once('../conexion.php');
$query_DatosWeb = "SELECT * FROM usuarios WHERE user='".$_POST['user']."' and passw='".md5($_POST['passw'])."'";
$DatosWeb = mysqli_query($conexion,$query_DatosWeb);
$row_DatosWeb = mysqli_fetch_array($DatosWeb);
$totalRows_DatosWeb =mysqli_num_rows($DatosWeb);
if($totalRows_DatosWeb==1){
        $_SESSION['iduser']=$row_DatosWeb['id'];
        $_SESSION['nombreuser']=$row_DatosWeb['user'];
        echo 1;
}
else {
        echo 0;
}
 ?>
