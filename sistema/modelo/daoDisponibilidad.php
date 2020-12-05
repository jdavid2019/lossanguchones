<?php
require_once '../util/Conexion.php';
require_once '../bean/BeanDisponibilidad.php';

class daoDisponibilidad{

public function Buscardisponibilidad(){

$buscardispo=0;
try {
$sql="SELECT * FROM disponibilidad";
$rs=Conexion::obtenerInstancia();
$buscardispo=mysqli_query($rs,$sql);

} catch (Exception $ex) {
	
}
	return $buscardispo;

}


}
?>	