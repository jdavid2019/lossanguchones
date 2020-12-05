<?php 
require_once '../bean/BeanDetpedido.php';
require_once '../modelo/daoDetpedido.php';

require_once '../bean/BeanProducto.php';
require_once '../modelo/daoProducto.php';
if(!isset($_GET['iddettpedido'])){
  header("Location: ../index.php");
}
$iddettpedido="";
$iddettpedido= $_GET['iddettpedido'];
$objDetPedidoBean= new BeanDetpedido();
$objDetPedidoBean->setIddetpedido($iddettpedido);
$objDetPedidoDAO = new daoDetpedido();
$mostrardt=$objDetPedidoDAO->MostrarDetallePedido($objDetPedidoBean);
$datosusuario= mysqli_fetch_row($mostrardt);
$datosproducto=$objDetPedidoDAO->MostrarProductoDetallePedido($objDetPedidoBean);



 ?>
