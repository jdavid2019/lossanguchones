<?php
require_once '../util/Conexion.php';
require_once '../bean/BeanUsuario.php';

class daoUsuario{

public function VerificarUsuario(BeanUsuario $dato){
$verifica=0;
try{

$sql="SELECT * FROM usuario where correoe ='".$dato->correoe."' AND password ='".$dato->password."'";
$rs= Conexion::obtenerInstancia(); 
$verifica=mysqli_query($rs,$sql);
}catch(Exception $ex){


}
  return $verifica;

}


public function VerificarUsuarioCorreo(BeanUsuario $dato){
 $verifica=0;
try {
$sql="SELECT * FROM usuario where correoe='".$dato->correoe."'";
$rs= Conexion::obtenerInstancia();
$verifica=mysqli_query($rs,$sql);
} catch (Exception $ex) {
	
}
	return $verifica;
}

public function RegistrarUsuarioCliente(BeanUsuario $dato){
  $registra=0;
  try{
 //$sql="INSERT INTO usuario(nombres,apellidos,correoe,dni,password,id_usrol)VALUES('$dato->nombres','$dato->apellidos','$dato->correoe','$dato->dni','$dato->password','$dato->id_usrol');";
 $sql="INSERT INTO usuario(nombres,apellidos,correoe,password,id_usrol)VALUES('$dato->nombres','$dato->apellidos','$dato->correoe','$dato->password','$dato->id_usrol');";
 $rs= Conexion::obtenerInstancia();
  $registra=mysqli_query($rs,$sql);
  } catch (Exception $ex){

  }
     return $registra;
}


public function BuscaridUsuario(BeanUsuario $dato){
	$buscarid=0;
	try {
	$sql ="SELECT  id_usuario from usuario where correoe='$dato->correoe'";	
	$rs=Conexion::obtenerInstancia();
	$buscarid=mysqli_query($rs,$sql);
	} catch (Exception $e) {
		
	}
    return $buscarid;
}

}
?>