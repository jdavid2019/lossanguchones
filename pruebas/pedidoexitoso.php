<?php 


if(isset($_GET['iddettpedido']) && isset($_GET['metodo_pago'])){
$iddettpedido=$_GET['iddettpedido'];
$metodo_pago=$_GET['metodo_pago'];
if($metodo_pago=='paypal'){
$id_metpago='1';
$estado='cancelado';
}elseif ($metodo_pago=='contraentrega') {
$id_metpago='2'; 
$estado='pendiente';
}

$sql="INSERT INTO pago(id_metpago,estado) values(".$id_metpago.",'".$estado."') ";
$rs=Conexion::obtenerInstancia();
$resultado=mysqli_query($rs,$sql);
$id_pago=$rs->insert_id;

$sql2="UPDATE DETPEDIDO SET id_pago=".$id_pago." where IDDETPEDIDO=".$iddettpedido." ";
$resultado2=mysqli_query($rs,$sql2);


header("Location: ./pedidoexitoso.php");
}else{
  echo "errpr";
}








 ?>