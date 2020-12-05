<?php 
require_once '../util/Conexion.php';
require_once '../bean/BeanPago.php';
require_once '../bean/BeanDetpedido.php';
require_once '../modelo/daoPago.php';
require_once '../modelo/daoDetpedido.php';

if(isset($_GET['iddettpedido']) && isset($_GET['metodopago'])){
$iddetpedido=$_GET['iddettpedido'];
$metodo_pago=$_GET['metodopago'];
if($metodo_pago=='paypal'){
$id_metpago='1';
$estado='cancelado';
}elseif ($metodo_pago=='contraentrega') {
$id_metpago='2'; 
$estado='pendiente';
}
$objPagoBean= new BeanPago();
$objPagoBean->setId_metpago($id_metpago);
$objPagoBean->setEstado($estado);
$objPagoDao=new daoPago();
$insertarpago=$objPagoDao->InsertarPago($objPagoBean);
$rs=Conexion::obtenerInstancia();
$id_pago=$rs->insert_id;
$objDetaPedidoBean= new BeanDetpedido();
$objDetaPedidoBean->setId_pago($id_pago);
$objDetaPedidoBean->setIddetpedido($iddetpedido);
$objPagoDetDato = new daoDetpedido();
$actupago=$objPagoDetDato->ActualizarDetPagoProd($objDetaPedidoBean);
header("Location: ../vcliente/pedidoexitoso.php");
}else{
  echo "...";
}








 ?>