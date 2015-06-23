<?php
//SESSIONES
if (!isset($_SESSION)) {
 session_start();
}
$url="http://localhost/VideoClub/";
$hostname_conexion = "localhost";
$database_conexion = "videoclub";
$username_conexion = "video";
$password_conexion = "admin";
$conexion = mysqli_connect($hostname_conexion, $username_conexion, $password_conexion,$database_conexion);
include('inc/funciones.php');
?>
