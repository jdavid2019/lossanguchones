<?php

class BeanPago {
public $id;
public $id_metpago;
public $estado;


function getId(){
  return $this->id;
}

function setId($id){
  $this->id=$id;
}


function getId_metpago(){
  return $this->id_metpago;
}

function setId_metpago($id_metpago){
  $this->id_metpago=$id_metpago;
}


function getEstado(){
  return $this->estado;
}

function setEstado($estado){
  $this->estado=$estado;
}


}


?>