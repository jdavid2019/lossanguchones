<?php
require_once '../util/Conexion.php';
require_once '../bean/BeanDistrito.php';

class daoDistrito{

public function Buscardistrito(){

$buscar=0;
try {
$sql="SELECT * FROM distrito";
$rs=Conexion::obtenerInstancia();
$buscar=mysqli_query($rs,$sql);

} catch (Exception $ex) {
	
}
	return $buscar;

}


}
?>	