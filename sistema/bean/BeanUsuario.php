<?php

class BeanUsuario{
public $id_usuario;
public $nombres;
public $apellidos;
public $correoe;
public $dni;
public $password;
public $id_usrol;


    function getId_usuario() {
       return $this->id_usuario;
    }

    function setId_usuario($id_usuario){
       $this->id_usuario=$id_usuario;
    }
    function getNombres(){
        return $this->nombres;
    }

    function setNombres($nombres){
        $this->nombres=$nombres;
    }

    function getApellidos(){
        return $this->apellidos;
    }

   function setApellidos($apellidos){
        $this->apellidos=$apellidos;
    }

    function getCorreoe(){
        return $this->correoe;
    }
 
    function setCorreoe($correoe){
        $this->correoe=$correoe;
    }
   
    function getDni(){
        return $this->dni;
    }
    
    function setDni($dni){
        $this->dni=$dni;
    }

    function getPassword(){
        return $this->password;
    }
 
    function setPassword($password){
        $this->password=$password;
    }
    
    function getId_usrol(){
        return $this->id_usrol;
    }

    function setId_usrol($id_usrol){
        $this->id_usrol=$id_usrol;
    }

  }





















?>