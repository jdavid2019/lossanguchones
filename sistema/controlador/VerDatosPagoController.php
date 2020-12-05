<?php 
require_once '../bean/BeanDetpedido.php';
require_once '../modelo/daoDetPedido.php';

$objDetPedidosBean=new BeanDetpedido();
$objDetPedidosBean->setIddetpedido($iddetpedido);
$obDetPedidoPagoDAO = new daoDetpedido();


$datospago=$obDetPedidoPagoDAO->MostrarPagoDetalle($objDetPedidosBean);



 ?>