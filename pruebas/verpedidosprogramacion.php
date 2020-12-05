<?php 
include '../util/Conexion.php';
if(!isset($_GET['iddettpedido'])){
  header("Location: ../index.php");
}
$rs= Conexion::obtenerInstancia();
$sql="select pedido.direccionped,distrito.distrito,pedido.telefcontactoped,usuario.nombres,usuario.apellidos,usuario.correoe,detpedido.total,detpedido.fecha from pedido inner join usuario on pedido.idusuarioped=usuario.id_usuario inner join detpedido on pedido.iddettpedido=detpedido.iddetpedido inner join distrito on pedido.iddistritoped=distrito.iddistrito where iddetpedido =".$_GET['iddettpedido'];
$resultado=mysqli_query($rs,$sql);
$datosusuario= mysqli_fetch_row($resultado);

$sql2="select producto.imagenp,producto.nombrep,producto.preciop,producto.tipo_id,pedido.cantidadped,pedido.subtotal,detpedido.total from pedido inner join producto on pedido.idproductop=producto.id inner join detpedido on pedido.iddettpedido=detpedido.iddetpedido where detpedido.iddetpedido=".$_GET['iddettpedido'];
$datosproducto=mysqli_query($rs,$sql2);
 ?>