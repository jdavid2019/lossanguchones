<?php

class BeanPedido{

public $idpedido;
public $idusuarioped;
public $nombrepro;
public $imagenpro;
public $preciopro;
public $idproductop;
public $cantidadped;
public $subtotal;
public $iddistritoped;
public $direccionped;
public $telefcontactoped;
public $iddettpedido;


function getIdpedido() {
    return $this->idpedido;
    }
  function setIdpedido($idpedido){
    $this->idpedido=$idpedido;
    }

function getIdusuarioped() {
    return $this->idusuarioped;
    }
  function setIdusuarioped($idusuarioped){
    $this->idusuarioped=$idusuarioped;
    } 
    

 function getIdproductop() {
  return $this->idproductop;
  }
 function setIdproductop($idproductop){
   $this->idproductop=$idproductop;
   }
//function getNombrepro() {
 //   return $this->nombrepro;
 //   }
 // function setNombrepro($nombrepro){
 //   $this->nombrepro=$nombrepro;
 //   }
    
//function getImagenpro() {
 //   return $this->imagenpro;
 //   }
 // function setImagenpro($imagenpro){
 //   $this->imagenpro=$imagenpro;
 //   }

//function getPreciopro() {
 //   return $this->preciopro;
 //   }
 // function setPreciopro($preciopro){
 //   $this->preciopro=$preciopro;
 //   }
 function getCantidadped() {
    return $this->cantidadped;
    }
  function setCantidadped($cantidadped){
    $this->cantidadped=$cantidadped;
    }
    
 function getSubtotal() {
    return $this->subtotal;
    }
  function setSubtotal($subtotal){
    $this->subtotal=$subtotal;
    }
    
 function getIddistritoped() {
    return $this->iddistritoped;
    }
  function setIddistritoped($iddistritoped){
    $this->iddistritoped=$iddistritoped;
    }
 
 function getDireccionped() {
    return $this->direccionped;
    }
  function setDireccionped($direccionped){
    $this->direccionped=$direccionped;
    } 


 function getTelefcontactoped() {
    return $this->telefcontactoped;
    }
  function setTelefcontactoped($telefcontactoped){
    $this->telefcontactoped=$telefcontactoped;
    } 


 function getIddettpedido() {
    return $this->iddettpedido;
    }
  function setIddettpedido($iddettpedido){
    $this->iddettpedido=$iddettpedido;
    }                    






}
?>