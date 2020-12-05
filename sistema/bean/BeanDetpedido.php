<?php

class BeanDetpedido {
public $iddetpedido;
public $fecha;
public $total;
public $id_status;
public $id_pago;

 function getIddetpedido() {
    return $this->iddetpedido;
    }
  function setIddetpedido($iddetpedido){
    $this->iddetpedido=$iddetpedido;
    }

  function getFecha(){
  	return $this->fecha;
  }

  function setFecha($fecha){
  	$this->fecha=$fecha;
  }
  
  function getTotal(){
    return $this->total;
  }

  function setTotal($total){
    $this->total=$total;
  }
function getId_status(){
    return $this->id_status;
  }

  function setId_status($id_status){
    $this->id_status=$id_status;
  }

  function getId_pago(){
    return $this->id_pago;
  }

  function setId_pago($id_pago){
    $this->id_pago=$id_pago;
  }

}


?>