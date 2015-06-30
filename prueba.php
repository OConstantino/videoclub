<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha=date("Y-m-d");
$fecha=date('Y-m-d', strtotime($fecha. ' + 1 days'));
echo $fecha;

 ?>
