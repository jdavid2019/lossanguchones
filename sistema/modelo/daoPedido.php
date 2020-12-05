<?php
require_once '../util/Conexion.php';
require_once '../bean/BeanPedido.php';

class daoPedido{


public function InsertarPedido(BeanPedido $dato){

$insertarp=0;
try {
$sql="INSERT INTO pedido(idusuarioped,idproductop,cantidadped,subtotal,iddistritoped,direccionped,telefcontactoped,iddettpedido) values('$dato->idusuarioped','$dato->idproductop','$dato->cantidadped','$dato->subtotal','$dato->iddistritoped','$dato->direccionped','$dato->telefcontactoped','$dato->iddettpedido');";
//$sql="INSERT INTO pedido(idusuarioped,nombrepro,imagenpro,preciopro,cantidadped,subtotal,iddistritoped,direccionped,telefcontactoped,iddettpedido) values('$dato->idusuarioped','$dato->nombrepro','$dato->imagenpro','$dato->preciopro','$dato->cantidadped','$dato->subtotal','$dato->iddistritoped','$dato->direccionped','$dato->telefcontactoped','$dato->iddettpedido');";//

$rs=Conexion::obtenerInstancia();
$insertarp=mysqli_query($rs,$sql);

} catch (Exception $ex) {
	
}
return $insertarp;

}


public function VerPedido(){
$verp=0;
	
try {
$sql="select distinct pedido.iddettpedido,pedido.direccionped,usuario.nombres ,usuario.apellidos,usuario.correoe,distrito.distrito,pedido.telefcontactoped,detpedido.id_status,detpedido.total,detpedido.fecha from pedido inner join detpedido on pedido.iddettpedido=detpedido.iddetpedido inner join usuario on pedido.idusuarioped=usuario.id_usuario inner join distrito on pedido.iddistritoped=distrito.iddistrito order by pedido.iddettpedido asc";
$rs=Conexion::obtenerInstancia();
$verp=mysqli_query($rs,$sql);	
} catch (Exception $e) {
	
}
return $verp;
}

}




?>
