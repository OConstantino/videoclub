<?php
require_once("../conexion.php");
//CERRAR SESION
echo $_GET['cerrar'];
if ((isset($_GET['cerrar'])) &&($_GET['cerrar']=="yes")){
      //to fully log out a visitor we need to clear the session varialbles
      $_SESSION['iduser'] = NULL;
      $_SESSION['nombreuser'] = NULL;
      unset($_SESSION['iduser']);
      unset($_SESSION['nombreuser']);

      $logoutGoTo = 'http://localhost/VideoClub/';

       header("Location: $logoutGoTo");
       exit;
}
?>
