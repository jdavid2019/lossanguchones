<?php 
session_start();
require_once '../util/Conexion.php';
require_once '../modelo/daoDetpedido.php';
require_once '../bean/BeanDetpedido.php';
$pedidos = array();


$objDPFDAO1=new daoDetpedido();
$iddetpedidoc=$objDPFDAO1->Ultimoid();

$fila=mysqli_fetch_assoc($iddetpedidoc);

$iddetpedido=$fila['iddetpedido'];

$objBeanDetpedido = new BeanDetpedido();
$objBeanDetpedido->setIddetpedido($iddetpedido);
$objDPFDAO=new daoDetpedido();
$datos=$objDPFDAO->MostrarDetPedidoPDF($objBeanDetpedido);



?>