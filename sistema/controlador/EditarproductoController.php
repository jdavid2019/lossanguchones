<?php
session_start();
require_once '../bean/BeanProducto.php';
require_once '../modelo/daoProducto.php';

$alerta='';
$listProducto=$_POST['listProducto'];
$nombrep=utf8_decode($_POST['nombrep']);
$descripcionp=utf8_decode($_POST['descripcionp']);
$preciop=$_POST['preciop'];
$tipo_id=$_POST['tipo_id'];
$id=$_POST['id'];
$id_disponibilidad=$_POST['id_disponibilidad'];
$imagenp= $_FILES['file']['name'];
$imagenp2=$_POST['imagenp2'];

if($listProducto == 0){
	$_SESSION['alerta']=$alerta;
 header('location: ../vadministrador/editar_producto.php');
}else{
	if($_FILES["file"]["name"] !=''){
 		//$imagenp= $_FILES['file']['name'];
 		//$id=$_POST['id'];
		$tam='';
	if($tipo_id==1){
              move_uploaded_file($_FILES["file"]["tmp_name"],
              "../../Imagenes/clasicas/" .$_FILES["file"]["name"]);
               $tam='1';
  	}elseif ($tipo_id==2) {
              move_uploaded_file($_FILES["file"]["tmp_name"],
              "../../Imagenes/bebidas/" .$_FILES["file"]["name"]); 
               $tam='1';
  	}elseif($tipo_id==3){
              move_uploaded_file($_FILES["file"]["tmp_name"],
              "../../Imagenes/papas/" .$_FILES["file"]["name"]);
              $tam='1';
    }elseif($tipo_id==4){
              move_uploaded_file($_FILES["file"]["tmp_name"],
              "../../Imagenes/combosyp/" .$_FILES["file"]["name"]);
              $tam='1';
    }elseif($tipo_id==5){
              move_uploaded_file($_FILES["file"]["tmp_name"],
              "../../Imagenes/salchipapas/" .$_FILES["file"]["name"]);
              $tam='1';
    }elseif($tipo_id==6){
              move_uploaded_file($_FILES["file"]["tmp_name"],
              "../../Imagenes/especiales/" .$_FILES["file"]["name"]);
              $tam='1';
    }elseif($tipo_id==7){
              move_uploaded_file($_FILES["file"]["tmp_name"],
              "../../Imagenes/ensaladas/" .$_FILES["file"]["name"]);
              $tam='1';
    } 
   if($tam == '1'){
       $objProductoBean = new BeanProducto();
	   $objProductoBean->setId($id);
       $objProductoDAO = new daoProducto();
       $buscariproducto=$objProductoDAO->BuscarImagenProductoporId($objProductoBean);
       $ids=mysqli_fetch_row($buscariproducto);
	   
	   if(file_exists('../../Imagenes/clasicas/'.$ids[0])){
               unlink('../../Imagenes/clasicas/'.$ids[0]);
            }elseif (file_exists('../../Imagenes/bebidas/'.$ids[0])) {
             unlink('../../Imagenes/bebidas/'.$ids[0]);
            }elseif (file_exists('../../Imagenes/papas/'.$ids[0])) {
              unlink('../../Imagenes/papas/'.$ids[0]);
            }elseif (file_exists('../../Imagenes/combosyp/'.$ids[0])) {
              unlink('../../Imagenes/combosyp/'.$ids[0]);
            }elseif (file_exists('../../Imagenes/salchipapas/'.$ids[0])) {
              unlink('../../Imagenes/salchipapas/'.$ids[0]);
            }elseif (file_exists('../../Imagenes/especiales/'.$ids[0])) {
              unlink('../../Imagenes/especiales/'.$ids[0]);
            }elseif (file_exists('../../Imagenes/ensaladas/'.$ids[0])) {
              unlink('../../Imagenes/ensaladas/'.$ids[0]);
            }
     $objProductoBean->setImagenp($imagenp);
     $actualizarimg=$objProductoDAO->ActualizarImagenProductoporId($objProductoBean);
}
}else{
  $objProductoBeanOrigen = new BeanProducto();
  $objProductoBeanOrigen->setId($id);
  $objProductoDAOrigen= new daoProducto();

  $buscar=$objProductoDAOrigen->BuscarProductoporId($objProductoBeanOrigen);
  $tipoorigens=mysqli_fetch_row($buscar);
  $tipo_id_origen=$tipoorigens[5];
   
  if($tipo_id_origen==1){
           $o='../../Imagenes/clasicas/'.$imagenp2;  
    }elseif ($tipo_id_origen==2) {
          $o='../../Imagenes/bebidas/'.$imagenp2;   
    }elseif($tipo_id_origen==3){
          $o="'../../Imagenes/papas/'.$imagenp2";     
    }elseif($tipo_id_origen==4){
          $o='../../Imagenes/combosyp/'.$imagenp2;     
    }elseif($tipo_id_origen==5){
          $o='../../Imagenes/salchipapas/'.$imagenp2;     
    }elseif($tipo_id_origen==6){
          $o='../../Imagenes/especiales/'.$imagenp2;   
    }elseif($tipo_id_origen==7){
          $o='../../Imagenes/ensaladas/'.$imagenp2;     
    } 

  if($tipo_id==1){
    $d='../../Imagenes/clasicas/'.$imagenp2;
  }elseif ($tipo_id==2) {
    $d='../../Imagenes/bebidas/'.$imagenp2; 
  }elseif ($tipo_id==3) {
    $d='../../Imagenes/papas/'.$imagenp2; 
  }elseif ($tipo_id==4) {
    $d='../../Imagenes/combosyp/'.$imagenp2; 
  }elseif ($tipo_id==5) {
   $d='../../Imagenes/salchipapas/'.$imagenp2;
  }elseif ($tipo_id==6) {
   $d='../../Imagenes/especiales/'.$imagenp2; 

  }elseif($tipo_id_origen==7){
    $d='../../Imagenes/ensaladas/'.$imagenp2;     
    } 

  if (copy($o, $d)) {  
      unlink($o);
  }
}
  $objProductoBean1 = new BeanProducto();
  $objProductoBean1->setNombrep($nombrep);
  $objProductoBean1->setDescripcionp($descripcionp);
  $objProductoBean1->setPreciop($preciop);
  $objProductoBean1->setTipo_id($tipo_id);
  $objProductoBean1->setId_disponibilidad($id_disponibilidad);
  $objProductoBean1->setId($id);
   $objProductoDAO1 = new daoProducto();
  $actualizarprod=$objProductoDAO1->ActualizarProducto($objProductoBean1);

  if($actualizarprod){
      $_SESSION['alerta2']=$alerta;
  header('location: ../vadministrador/editar_producto.php');
}else{
  echo 'error';
}








}
?>