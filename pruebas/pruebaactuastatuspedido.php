<?php 
include '../util/Conexion.php';
if(isset($_GET['iddettpedido'])){
$estatus=2;
$iddettpedido=$_GET['iddettpedido'];

$sql="UPDATE DETPEDIDO SET detpedido.id_status=".$estatus." where iddetpedido='".$iddettpedido."'";
$rs=Conexion::obtenerInstancia();
$resultado=mysqli_query($rs,$sql);

if($resultado){
	echo "bien";
}else{
	echo "mal";
}


}
 ?>