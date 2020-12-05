<?php
require_once '../util/Conexion.php';
require_once '../bean/BeanUsuario.php';

class daoProducto{

public function VerificarExistenciaProducto(BeanProducto $dato){
 $verifica=0;
try {
$sql="SELECT * FROM producto where nombrep='".$dato->nombrep."'";
$rs=Conexion::obtenerInstancia();
$verifica=mysqli_query($rs,$sql);

} catch (Exception $ex) {
  
}
  return $verifica;
}


public function RegistrarProducto(BeanProducto $dato){
  $registra=0;
  try{
 $sql="INSERT INTO producto(nombrep,descripcionp,imagenp,preciop,tipo_id)VALUES('".utf8_decode($dato->nombrep)."','".utf8_decode($dato->descripcionp)."','$dato->imagenp','$dato->preciop','$dato->tipo_id');";
  $rs=Conexion::obtenerInstancia();
  $registra=mysqli_query($rs,$sql);
  } catch (Exception $ex){

  }
     return $registra;
}

public function BuscarProducto(BeanProducto $dato){
$busqueda=0;
try {
 $sql="SELECT producto.*,tipo_producto.tipo from producto inner join tipo_producto on producto.tipo_id=tipo_producto.id_tipo where nombrep like'%".utf8_decode($dato->nombrep)."%' or tipo like'%".utf8_decode($dato->tipo)."%'";
 $rs=Conexion::obtenerInstancia();
 $busqueda=mysqli_query($rs,$sql);  
} catch (Exception $e) {
  
}
return $busqueda;


}


public function BuscarProductoporIdcarrito(BeanProducto $dato){
 $buscar=0;
 try {
  $sql="SELECT producto.*,tipo_producto.tipo from producto inner join tipo_producto on producto.tipo_id=tipo_producto.id_tipo where id='".$dato->id."'";
    $rs=Conexion::obtenerInstancia();
  $buscar=mysqli_query($rs,$sql);
 } catch (Exception $ex) {
 
 }
    return $buscar;
}

public function MostrarDetalleProducto(BeanProducto $dato){
$mostrar=0;
try {
 $sql="select producto.id,producto.nombrep,producto.descripcionp,producto.imagenp,producto.preciop,tipo_producto.tipo,disponibilidad.estado from producto inner join  tipo_producto on producto.tipo_id=tipo_producto.id_tipo inner join disponibilidad on producto.id_disponibilidad=disponibilidad.id_dispo where producto.id='".$dato->id."'"; 
 $rs=Conexion::obtenerInstancia();
 $mostrar=mysqli_query($rs,$sql);
} catch (Exception $e) {
  
}
   return $mostrar;
}

public function BuscarNombreProducto(){
  $buscar=0;
try {
$sql="select * from producto";
$rs=Conexion::obtenerInstancia();
$buscar=mysqli_query($rs,$sql);

} catch (Exception $ex) {
  
}
  return $buscar;
}

public function SelectProducto(){
$mostraselectp=0;

try {
  $sql="select * from producto";
  $rs=Conexion::obtenerInstancia();
  $mostraselectp=mysqli_query($rs,$sql);
} catch (Exception $e) {
  
}
  return $mostraselectp;
}
public function BuscarNombreaeliminarProducto(){
  $buscar=0;
try {
$sql="SELECT * from producto WHERE not EXISTS (SELECT * from pedido where pedido.idproductop=producto.id)";
$rs=Conexion::obtenerInstancia();
$buscar=mysqli_query($rs,$sql);

} catch (Exception $ex) {
  
}
  return $buscar;
}

public function CambiarEstadoProducto(BeanProducto $dato){
$cambiar=0;

try {
$sql="UPDATE producto SET id_disponibilidad='".$dato->id_disponibilidad."' where id='".$dato->id."';";
$rs=Conexion::obtenerInstancia();
$cambiar=mysqli_query($rs,$sql);  
} catch (Exception $e) {
  
}
return $cambiar;
}


public function BuscarProductoporId(BeanProducto $dato){
$buscar=0;

try {
 $sql="SELECT * FROM producto WHERE id='".$dato->id."';"; 
 $rs=Conexion::obtenerInstancia();
$buscar=mysqli_query($rs,$sql);    
  } catch (Exception $e) {
    
  }
  return $buscar;
}

public function BuscarTipoporIdproducto(BeanProducto $dato){
$buscartipopro=0;

try {
 $sql="SELECT id_tipo,tipo from tipo_producto inner join producto on tipo_producto.id_tipo=producto.tipo_id WHERE id='".$dato->id."';"; 
 $rs=Conexion::obtenerInstancia();
$buscartipopro=mysqli_query($rs,$sql);    
  } catch (Exception $e) {
    
  }
  return $buscartipopro;
}

public function BuscarDispoporIdproducto(BeanProducto $dato){
$buscardispopro=0;

try {
 $sql="SELECT id_dispo,estado from disponibilidad inner join producto on disponibilidad.id_dispo=producto.id_disponibilidad where id='".$dato->id."';"; 
 $rs=Conexion::obtenerInstancia();
$buscardispopro=mysqli_query($rs,$sql);    
  } catch (Exception $e) {
    
  }
  return $buscardispopro;
}




public function EliminarProductoporId(BeanProducto $dato){
$eliminar=0;

try {
 $sql="DELETE FROM producto WHERE id='".$dato->id."';"; 
 $rs=Conexion::obtenerInstancia();
$eliminar=mysqli_query($rs,$sql);    
  } catch (Exception $e) {
    
  }
  return $eliminar;
}



public function BuscarImagenProductoporId(BeanProducto $dato){
$buscariproducto=0;

try {
 $sql="SELECT imagenp from producto where id='".$dato->id."';"; 
 $rs=Conexion::obtenerInstancia();
$buscariproducto=mysqli_query($rs,$sql);    
  } catch (Exception $e) {
    
  }
  return $buscariproducto;
}


public function ActualizarImagenProductoporId(BeanProducto $dato){
$actualizarimg=0;

try {
 $sql="UPDATE producto SET imagenp='".$dato->imagenp."' where  id='".$dato->id."';"; 
 $rs=Conexion::obtenerInstancia();
$actualizarimg=mysqli_query($rs,$sql);    
  } catch (Exception $e) {
    
  }
  return $actualizarimg;
}

public function ActualizarProducto(BeanProducto $dato){
$actualizarprod=0;

try {
 $sql="UPDATE producto set nombrep='".$dato->nombrep."',descripcionp='".$dato->descripcionp."',preciop='".$dato->preciop."',tipo_id='".$dato->tipo_id."',id_disponibilidad='".$dato->id_disponibilidad."' where  id='".$dato->id."';"; 
 $rs=Conexion::obtenerInstancia();
$actualizarprod=mysqli_query($rs,$sql);    
  } catch (Exception $e) {
    
  }
  return $actualizarprod;
}


}


?>