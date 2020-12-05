<?php
<form action="pedidoexitoso.php" method="post" onsubmit="return validarformordenpedido();">
include 'sistema/util/Conexion.php';

$correo='prueba@gmail.com';

$sql="SELECT  id_usuario from usuario where correoe='$correo'";
$rs=Conexion::obtenerInstancia();
$resultado= mysqli_query($rs,$sql);
$fila=$resultado->fetch_array();
$idusuario= $fila['id_usuario'];
date_default_timezone_set('America/Lima');
$fecha= date('d-m-Y h:m:s'); 


echo $fecha;
echo $idusuario;







?>