<?php
session_start();
require_once '../bean/BeanUsuario.php';
require_once '../modelo/daoUsuario.php';

if(!empty($_POST))
    {

if(isset($_POST['correoe'])&& isset($_POST['password'])){
$correoe=$_POST['correoe'];
$password=$_POST['password'];
$objUsuarioBean = new BeanUsuario();
$objUsuarioBean->setCorreoe($correoe);
$objUsuarioBean->setPassword($password);
$objUsuarioDAO=new daoUsuario();
$verifica=$objUsuarioDAO->VerificarUsuario($objUsuarioBean);

$fila=$verifica->fetch_array();
       $alert='';
        if($fila == true){
            //$rol = $fila[6];
            $rol = $fila[5];
            $nombres=$fila[1];
            $apellidos=$fila[2];
            $correoelec=$fila[3];
            $_SESSION['rol'] = $rol;
            $_SESSION['nombres']=$nombres;
            $_SESSION['apellidos']=$apellidos;
            $_SESSION['correoe']=$correoelec;
            switch($rol){
                case 1:
                    header('location:../vadministrador/admin.php');      
                break;

                case 2:
                header('location:../vcliente/cliente.php');
                break;

                default:
				}

				}else{
                $_SESSION['alerta']=$alert;
                header('location: ../index.php');
        }
}
}
?>