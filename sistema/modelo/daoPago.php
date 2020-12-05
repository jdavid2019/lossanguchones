
<?php
require_once '../util/Conexion.php';
require_once '../bean/BeanPago.php';


class daoPago{

public function InsertarPago(BeanPago $dato){
$insertarpago=0;
try {
$sql="INSERT INTO pago(id_metpago,estado) values(".$dato->id_metpago.",'".$dato->estado."') ";
$rs=Conexion::obtenerInstancia();	
$insertarpago=mysqli_query($rs,$sql);	
} catch (Exception $e) {
	
}
return $insertarpago;


}


}



?>