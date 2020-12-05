<?php

class BeanTiproducto{
public $id_tipo;
public $tipo;

function getId_tipo() {
    return $this->id_tipo;
    }
 
 //function setId($id_tipo){
 	function setId_tipo($id_tipo){
    $this->id_tipo=$id_tipo;
    }
 function getTipo() {
    return $this->tipo;
    }
function setTipo($tipo){
    $this->tipo=$tipo;
    }


}
?>