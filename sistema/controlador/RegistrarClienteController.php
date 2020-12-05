<?php
session_start();
require_once '../bean/BeanUsuario.php';
require_once '../modelo/daoUsuario.php';
if(!empty($_POST))
    {
    //  if(isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['correoe']) && isset($_POST['dni']) && isset($_POST['password'])){
      if(isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['correoe']) &&  isset($_POST['password'])){
//campos:nombres,apellidos,correoe,dni,password
	   $nombres = $_POST['nombres'];
     $apellidos = $_POST['apellidos'];
   	 $correoe = $_POST['correoe'];
   	// $dni = $_POST['dni'];
     $password = $_POST['password'];
     $objUsuarioBeanv= new BeanUsuario();
     $objUsuarioBeanv->setCorreoe($correoe);
     $objUsuarioDAOv = new daoUsuario();
     $verifica=$objUsuarioDAOv->VerificarUsuarioCorreo($objUsuarioBeanv);
     $contador = mysqli_num_rows($verifica);
     if($contador == 1){
      $alert='';
       $_SESSION['alertaerror']=$alert;
       header('location: ../registro.php');
     }else{
       $id_usrol='2';
       $objUsuarioBean= new BeanUsuario();
       $objUsuarioBean->setNombres($nombres);
       $objUsuarioBean->setApellidos($apellidos);
       $objUsuarioBean->setCorreoe($correoe);
     //  $objUsuarioBean->setDni($dni);
       $objUsuarioBean->setPassword($password);
       $objUsuarioBean->setId_usrol($id_usrol);
       $objUsuarioDAO = new daoUsuario();
       $registra=$objUsuarioDAO->RegistrarUsuarioCliente($objUsuarioBean);
       if(!$registra){
          echo 'Error en la sentencia';
       }else{
          $alert1='';
          $_SESSION['alertagood']=$alert1;
          header('location: ../registro.php');
       }
     }
     }
     }
   
?>