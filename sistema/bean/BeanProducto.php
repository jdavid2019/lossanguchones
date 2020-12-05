<?php
//producto -> id int,nombrep varchar,descripcionp text,imagenp text,preciop decimal(10,2),tipo_id (int)
class BeanProducto {
public $id;
public $nombrep;
public $descripcionp;
public $imagenp;
public $preciop;
public $tipo_id;
public $id_disponibilidad;
//---------fk-------------//
public $tipo;
  function getId() {
    return $this->id;
    }
  function setId($id){
    $this->id=$id;
    }
  function getNombrep(){
    return $this->nombrep;
  }
   function setNombrep($nombrep){
    $this->nombrep=$nombrep;
   }
  function getDescripcionp(){
  	return $this->descripcionp;
  }
  function setDescripcionp($descripcionp){
    $this->descripcionp=$descripcionp;
   }
  function getImagenp(){
  	return $this->imagenp;
  }
  function setImagenp($imagenp){
    $this->imagenp=$imagenp;
   }
  function getPreciop(){
  	return $this->preciop;
  }
  function setPreciop($preciop){
    $this->preciop=$preciop;
   }
  function getTipo_id(){
  	return $this->tipo_id;
  }
  function setTipo_id($tipo_id){
    $this->tipo_id=$tipo_id;
   }

  function getId_disponibilidad(){
    return $this->id_disponibilidad;
  } 

  function setId_disponibilidad($id_disponibilidad){
    $this->id_disponibilidad=$id_disponibilidad;
   }
 
  function getTipo(){
    return $this->tipo;
  } 

  function setTipo($tipo){
    $this->tipo=$tipo;
   }


}
?>