<?php
require_once '../util/Conexion.php';
require_once '../bean/BeanTiproducto.php';
class daoTiproducto{


public function MostrarProductoxTipo(BeanTiproducto $dato){
$mostrart=0;

try {
	  $sql="SELECT producto.id,  producto.imagenp,producto.nombrep,producto.descripcionp,producto.preciop from producto inner join tipo_producto on producto.tipo_id=tipo_producto.id_tipo where  tipo='".utf8_decode($dato->tipo)."'";
 	  $rs=Conexion::obtenerInstancia();
      $mostrart=mysqli_query($rs,$sql);
} catch (Exception $e) {
	
}

return $mostrart;
}


public function SelectTipo(){
$mostraselectp=0;

try {
	  $sql="SELECT * from tipo_producto";
 	  $rs=Conexion::obtenerInstancia();
      $mostraselectp=mysqli_query($rs,$sql);
} catch (Exception $e) {
	
}

return $mostraselectp;
}


}
?>