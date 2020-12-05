<?php
session_start();
require_once '../bean/BeanProducto.php';
require_once '../modelo/daoProducto.php';


$id= $_POST['id'];
$id_disponibilidad= $_POST['id_disponibilidad'];

$objProductoBean= new BeanProducto();
$objProductoBean->setId($id);
$objProductoBean->setId_disponibilidad($id_disponibilidad);
$objProductoDAO= new daoProducto();
$cambiar=$objProductoDAO->CambiarEstadoProducto($objProductoBean);
$alerta='';
if($cambiar){
   $_SESSION['alerta']=$alerta;
   header('location: ../vadministrador/cambiar_estproducto.php');
}else{
	$_SESSION['alerta2']=$alerta;
	 header('location: ../vadministrador/cambiar_estproducto.php');
}











?>
