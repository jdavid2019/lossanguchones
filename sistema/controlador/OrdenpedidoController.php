<?php
     session_start();
     if(isset($_SESSION['correoe'])){
     $correoelec=$_SESSION['correoe'];
    }
     if(isset($_SESSION['nombres'])){
     $userr=$_SESSION['nombres'];
    }
     if(isset($_SESSION['apellidos'])){
     $apellidos=$_SESSION['apellidos'];
    }
?>
<?php
require_once '../util/Conexion.php';
require_once '../bean/BeanUsuario.php';
require_once '../bean/BeanDetpedido.php';
require_once '../bean/BeanPedido.php';
require_once '../modelo/daoUsuario.php';
require_once '../modelo/daoDetpedido.php';
require_once '../modelo/daoPedido.php';
if (!isset($_SESSION['carrito'])) {
 header('Location: ./cliente.php');
}

$objUsuarioBean = new BeanUsuario();
$objUsuarioBean->setCorreoe($correoelec);
$objUsuarioDAO = new daoUsuario();
$buscarid=$objUsuarioDAO->BuscaridUsuario($objUsuarioBean);
$fila=$buscarid->fetch_array();
$idusuarioped= $fila['id_usuario'];
$datos = $_SESSION['carrito'];
$iddistritoped=$_POST['iddistrito']; 
$direccionped=$_POST['direccion'];
$telefcontactoped=$_POST['telefono'];
$subtotal=0;
$total=0;
for($i=0;$i<count($datos);$i++){
$total = $total+(($datos[$i]['Cantidad']*$datos[$i]['Precio']));
  $roo=$total+6.4;
}
date_default_timezone_set('America/Lima');
$fecha= date('Y-m-d H:i:s'); 
$objDetpedidoBean= new BeanDetpedido();
$objDetpedidoBean->setFecha($fecha);
$objDetpedidoBean->setTotal($roo);
$objDetpedidoDAO= new daoDetpedido();
$insertard=$objDetpedidoDAO->InsertarDetallePedido($objDetpedidoBean);
$rs=Conexion::obtenerInstancia();
$iddettpedido=$rs->insert_id;

for($i=0;$i<count($datos);$i++){
$objPedidoBean = new BeanPedido();
$idproductop=$datos[$i]['Id'];
$cantidadped=$datos[$i]['Cantidad'];
$subtotal=$datos[$i]['Precio']*$datos[$i]['Cantidad'];
$objPedidoBean->setIdusuarioped($idusuarioped);
$objPedidoBean->setIdproductop($idproductop);
$objPedidoBean->setCantidadped($cantidadped);
$objPedidoBean->setSubtotal($subtotal);
$objPedidoBean->setIddistritoped($iddistritoped);
$objPedidoBean->setDireccionped($direccionped);
$objPedidoBean->setTelefcontactoped($telefcontactoped);
$objPedidoBean->setIddettpedido($iddettpedido);

$objPedidoDAO=new daoPedido();
$insertarp=$objPedidoDAO->InsertarPedido($objPedidoBean);

}
//include './MailController.php';
unset($_SESSION['carrito']);

//header('location: ../vcliente/pedidoexitoso.php');
header("location: ../vcliente/pedidopago.php?iddettpedido=".$iddettpedido);
?>


