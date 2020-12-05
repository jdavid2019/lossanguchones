<?php

class BeanDisponibilidad {
public $id_dispo;
public $estado;

 function getId_pos() {
    return $this->id_dispo;
    }
  function setId_pos($id_dispo){
    $this->id_dispo=$id_dispo;
    }

  function getEstado(){
  	return $this->estado;
  }

  function setEstado($estado){
  	$this->estado=$estado;
  }

}


?>