<?php 
session_start();
require_once '../bean/BeanDetpedido.php';
require_once '../modelo/daoDetpedido.php';
if(isset($_GET['iddettpedido'])){
$id_status=$_POST['id_status'];
$iddetpedido=$_GET['iddettpedido'];    
$objDetpedidosBean = new BeanDetpedido();
$objDetpedidosBean->setId_status($id_status);
$objDetpedidosBean->setIddetpedido($iddetpedido);
$objDetpedDao = new daoDetpedido();
$actstatus=$objDetpedDao->ActualizarStatus($objDetpedidosBean);
$alerta='';
if($actstatus){
    $_SESSION['alerta1']=$alerta;
	header('Location: ../vadministrador/ver_pedidos.php');
 //echo "ok";
}else{
    $_SESSION['alerta2']=$alerta;
	header('Location: ../vadministrador/ver_pedidos.php');
    //echo "no";
}

}
 ?>