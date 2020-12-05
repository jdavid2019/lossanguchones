<?php 
require_once '../bean/BeanDetpedido.php';
require_once '../modelo/daoDetpedido.php';

$id_status=$_POST['id_status'];

$objDetPedidoBean=new BeanDetpedido();
$objDetPedidoBean->setId_status($id_status);
$obDetDetPedidoDAO = new daoDetpedido();

$verp=$obDetDetPedidoDAO->MostrarDetPedidoPoR($objDetPedidoBean);

$resultadocont=mysqli_num_rows($verp);



 ?>



