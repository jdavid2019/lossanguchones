<?php
require_once '../util/Conexion.php';
require_once '../bean/BeanDetpedido.php';

class daoDetpedido{

public function InsertarDetallePedido(BeanDetpedido $dato){

$insertard=0;
try {
$sql="INSERT INTO detpedido(fecha,total) values ('$dato->fecha','$dato->total') ";
$rs=Conexion::obtenerInstancia();
$insertarp=mysqli_query($rs,$sql);

} catch (Exception $ex) {
	
}

return $insertard;

}

public function ActualizarDetPagoProd(BeanDetpedido $dato){
$actupago=0;

try {
$sql="UPDATE detpedido SET id_pago=".$dato->id_pago." where iddetpedido=".$dato->iddetpedido." ";
$rs=Conexion::obtenerInstancia();
$actupago=mysqli_query($rs,$sql);  
} catch (Exception $e) {
 
}
return $actupago;


}

public function MostrarDetallePedido(BeanDetpedido $dato){
$mostrardt=0;
try {
$sql="select pedido.direccionped,distrito.distrito,pedido.telefcontactoped,usuario.nombres,usuario.apellidos,usuario.correoe,detpedido.total,detpedido.fecha from pedido inner join usuario on pedido.idusuarioped=usuario.id_usuario inner join detpedido on pedido.iddettpedido=detpedido.iddetpedido inner join distrito on pedido.iddistritoped=distrito.iddistrito where iddetpedido='".$dato->iddetpedido."' ";
$rs=Conexion::obtenerInstancia();
$mostrardt=mysqli_query($rs,$sql);

} catch (Exception $ex) {
	
}

return $mostrardt;
}

public function MostrarProductoDetallePedido(BeanDetpedido $dato){
$datosproducto=0;
try {
$sql="select producto.imagenp,producto.nombrep,producto.preciop,producto.tipo_id,pedido.cantidadped,pedido.subtotal,detpedido.total from pedido inner join producto on pedido.idproductop=producto.id inner join detpedido on pedido.iddettpedido=detpedido.iddetpedido where detpedido.iddetpedido='".$dato->iddetpedido."' ";

//$sql="select pedido.imagenpro,pedido.nombrepro,pedido.preciopro,pedido.cantidadped,pedido.subtotal,detpedido.total from pedido inner join detpedido on pedido.iddettpedido=detpedido.iddetpedido where detpedido.iddetpedido='".$dato->iddetpedido."' ";//
$rs=Conexion::obtenerInstancia();
$datosproducto=mysqli_query($rs,$sql);

} catch (Exception $ex) {
	
}

return $datosproducto;
}


public function MostrarProductoDetallePedidoG(BeanDetpedido $dato){
$datosproductos=0;
try {
$sql="select pedido.iddettpedido,producto.imagenp,producto.nombrep,producto.preciop,producto.tipo_id,pedido.cantidadped,pedido.subtotal,detpedido.total from pedido inner join producto on pedido.idproductop=producto.id inner join detpedido on pedido.iddettpedido=detpedido.iddetpedido where iddetpedido=".$dato->iddetpedido."";
$rs=Conexion::obtenerInstancia();
$datosproductos=mysqli_query($rs,$sql);

} catch (Exception $ex) {
	
}

return $datosproductos;
}

public function MostrarPagoDetalle(BeanDetpedido $dato){
$datospago=0;
try {
	$sql="select detpedido.iddetpedido,pago.id_metpago,metodo_pago.metodo_pago,pago.estado from detpedido inner join pago on detpedido.id_pago=pago.id inner join metodo_pago on pago.id_metpago=metodo_pago.id where detpedido.iddetpedido=".$dato->iddetpedido."";
	$rs=Conexion::obtenerInstancia();
    $datospago=mysqli_query($rs,$sql);	
	} catch (Exception $e) {
		
	}	
	return  $datospago;
}

public function Ultimoid(){
$iddetpedidoc=0;
try {
$sql="select detpedido.iddetpedido from detpedido ORDER BY iddetpedido DESC LIMIT 1";

$rs=Conexion::obtenerInstancia();
$iddetpedidoc=mysqli_query($rs,$sql);

} catch (Exception $ex) {
	
}

return $iddetpedidoc;
}

public function MostrarDetPedidoPDF(BeanDetpedido $dato){
$datos=0;
try {
$sql="select detpedido.iddetpedido,detpedido.fecha,usuario.nombres,usuario.apellidos,usuario.correoe,distrito.distrito,producto.imagenp,producto.nombrep,producto.preciop,pedido.cantidadped,producto.tipo_id,pedido.subtotal,pedido.direccionped,detpedido.total from pedido inner join detpedido on pedido.iddettpedido=detpedido.iddetpedido inner join producto on pedido.idproductop=producto.id inner join usuario on pedido.idusuarioped=usuario.id_usuario inner join distrito on pedido.iddistritoped=distrito.iddistrito where pedido.iddettpedido='$dato->iddetpedido'";

$rs=Conexion::obtenerInstancia();
$datos=mysqli_query($rs,$sql);

} catch (Exception $ex) {
	
}

return $datos;
}


public function MostrarDetPedidoPoR(BeanDetpedido $dato){
$verp=0;
try {
$sql="SELECT DISTINCT pedido.iddettpedido,pedido.direccionped,usuario.nombres ,usuario.apellidos,usuario.correoe,distrito.distrito,pedido.telefcontactoped,detpedido.id_status,detpedido.total,detpedido.fecha from pedido INNER JOIN detpedido on pedido.iddettpedido=detpedido.iddetpedido INNER JOIN usuario on pedido.idusuarioped=usuario.id_usuario INNER JOIN distrito on pedido.iddistritoped=distrito.iddistrito where detpedido.id_status='$dato->id_status' ORDER BY detpedido.iddetpedido ASC";
$rs=Conexion::obtenerInstancia();
$verp=mysqli_query($rs,$sql);

} catch (Exception $ex) {
	
}

return $verp;
}


public function ActualizarStatus(BeanDetpedido $dato){
$actstatus=0;
try {
$sql="update detpedido set id_status=".$dato->id_status." where iddetpedido='".$dato->iddetpedido."'";
$rs=Conexion::obtenerInstancia();
$actstatus=mysqli_query($rs,$sql);

} catch (Exception $ex) {
	
}

return $actstatus;
}
}
?>	

 
