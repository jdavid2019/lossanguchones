<?php 
require_once '../util/Conexion.php';
class daoStatus{

public function BuscarStatus(){

$buscarstatus=0;
try {
$sql="SELECT * FROM status_pedido";
$rs=Conexion::obtenerInstancia();
$buscarstatus=mysqli_query($rs,$sql);

} catch (Exception $ex) {
	
}
	return $buscarstatus;

}











}










 ?>