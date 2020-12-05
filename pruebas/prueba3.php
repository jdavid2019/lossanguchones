<?php
session_start();
  if(!isset($_SESSION['rol'])){
        header('location: ../index.php');
            }else{
        if($_SESSION['rol'] != 2){
            header('location: ../index.php');
        }
    }
?>
<?php
     if(isset($_SESSION['correoe'])){
     $correoelec=$_SESSION['correoe'];
    }
?>
<?php 
include '../Util/Conexion.php';
if (!isset($_SESSION['carrito'])) {
 header('Location: ./cliente.php');
}
$sql="SELECT  id_usuario from usuario where correoe='$correoelec'";
$rs=Conexion::obtenerInstancia();
$resultado= mysqli_query($rs,$sql);
$fila=$resultado->fetch_array();
$idusuario= $fila['id_usuario'];
$datos = $_SESSION['carrito'];
$idistrito=$_POST['iddistrito']; 
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$subtotal=0;
$total=0;
for($i=0;$i<count($datos);$i++){
$subtotal= $datos[$i]['Cantidad']*$datos[$i]['Precio']; 
$total = $total+(($datos[$i]['Cantidad']*$datos[$i]['Precio']));
  $roo=$total+6.4;
}
date_default_timezone_set('America/Lima');
$fecha= date('Y-m-d H:i:s'); 
$sql2="INSERT INTO detpedido(fecha,total) values ('$fecha','".$roo."')";
$rs2=Conexion::obtenerInstancia();
$resultado2=mysqli_query($rs2,$sql2);
$iddetpedido=$rs2 ->insert_id;

for($i=0;$i<count($datos);$i++){
$sql3="INSERT INTO pedido(idusuarioped,idproductop,cantidadped,subtotal,iddistritoped,direccionped,telefcontactoped,iddettpedido) values('$idusuario',".$datos[$i]['Id'].",".$datos[$i]['Cantidad'].",".$datos[$i]['Precio']*$datos[$i]['Cantidad'].",'$idistrito','$direccion','$telefono','$iddetpedido')";
$rs3=Conexion::obtenerInstancia();
$resultado3=mysqli_query($rs3,$sql3);
}


unset($_SESSION['carrito']);
 ?>