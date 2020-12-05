<?php 
require_once '../bean/BeanProducto.php';
require_once '../modelo/daoProducto.php';

if(!isset($_GET['iddettpedido'])){
  header("Location: ../index.php");
}

$objDetProductoBean= new BeanProducto();
$objDetProductoBean->setNombrep($nombrep);
$objDetProductoDAO = new daoProducto();
$mostrartp=$objDetProductoDAO->MostrarIdtipopro($objDetProductoBean);
$filatp = mysqli_fetch_row($mostrartp);


 ?>
