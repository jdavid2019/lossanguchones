<?php

class BeanDistrito {
public $iddistrito;
public $distrito;

 function getIddistrito() {
    return $this->iddistrito;
    }
 // function setId($iddistrito){
    function setIddistrito($iddistrito){
    $this->iddistrito=$iddistrito;
    }

  function getDistrito(){
  	return $this->distrito;
  }

  function setDistrito($distrito){
  	$this->distrito=$distrito;
  }

}


?>