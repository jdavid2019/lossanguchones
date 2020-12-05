<?php 
require_once '../bean/BeanDetpedido.php';
require_once '../modelo/daoDetPedido.php';

$objDetPedidoBean=new BeanDetpedido();
$objDetPedidoBean->setIddetpedido($iddetpedido);
$obDetDetPedidoDAO = new daoDetpedido();


$datosproductos=$obDetDetPedidoDAO->MostrarProductoDetallePedidoG($objDetPedidoBean);



 ?>