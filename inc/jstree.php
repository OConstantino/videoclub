<?php

require_once('../conexion.php');

$query="select * from peliculas where genero = 'vico' ";
$show=mysqli_query($conexion,$query) or die ("Error");
while($row=mysqli_fetch_array($show)){
       $node1[] = ['id'=>$row['id'], 'text'=>$row['nombre']];
}
$query="select * from peliculas where genero = 'amor' ";
$show=mysqli_query($conexion,$query) or die ("Error");
while($row=mysqli_fetch_array($show)){
       $node2[] = ['id'=>$row['id'], 'text'=>$row['nombre']];
}
$query="select * from peliculas where genero = 'accion' ";
$show=mysqli_query($conexion,$query) or die ("Error");
while($row=mysqli_fetch_array($show)){
       $node3[] = ['id'=>$row['id'], 'text'=>$row['nombre']];
}
$query="select * from peliculas where genero = 'age' ";
$show=mysqli_query($conexion,$query) or die ("Error");
while($row=mysqli_fetch_array($show)){
       $node4[] = ['id'=>$row['id'], 'text'=>$row['nombre']];
}

	echo json_encode([
		['id'=>-1, 'text'=>'vico', 'children'=>$node1, 'state'=>['opened'=>false,'disabled'=>true]],
		['id'=>-2, 'text'=>'amor', 'children'=>$node2, 'state'=>['opened'=>false,'disabled'=>true]],
		['id'=>-3, 'text'=>'accion', 'children'=>$node3, 'state'=>['opened'=>false,'disabled'=>true]],
		['id'=>-4, 'text'=>'age', 'children'=>$node4, 'state'=>['opened'=>false,'disabled'=>true]]


		]);

?>