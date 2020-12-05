<?php
session_start();
require_once '../bean/BeanProducto.php';
require_once '../modelo/daoProducto.php';


$id= $_POST['id'];

$objElimProductoBean = new BeanProducto();
$objElimProductoBean->setId($id);
$objProductoDAO = new daoProducto();
$buscariproducto=$objProductoDAO->BuscarImagenProductoporId($objElimProductoBean);
$imagenid=mysqli_fetch_row($buscariproducto);
if(file_exists('../../Imagenes/clasicas/'.$imagenid[0])){
               unlink('../../Imagenes/clasicas/'.$imagenid[0]);
            }elseif (file_exists('../../Imagenes/bebidas/'.$imagenid[0])) {
             unlink('../../Imagenes/bebidas/'.$imagenid[0]);
            }elseif (file_exists('../../Imagenes/papas/'.$imagenid[0])) {
              unlink('../../Imagenes/papas/'.$imagenid[0]);
            }elseif (file_exists('../../Imagenes/combosyp/'.$imagenid[0])) {
              unlink('../../Imagenes/combosyp/'.$imagenid[0]);
            }elseif (file_exists('../../Imagenes/salchipapas/'.$imagenid[0])) {
              unlink('../../Imagenes/salchipapas/'.$imagenid[0]);
            }elseif (file_exists('../../Imagenes/especiales/'.$imagenid[0])) {
              unlink('../../Imagenes/especiales/'.$imagenid[0]);
            }elseif (file_exists('../../Imagenes/ensaladas/'.$imagenid[0])) {
              unlink('../../Imagenes/ensaladas/'.$imagenid[0]);
            }

$eliminar=$objProductoDAO->EliminarProductoporId($objElimProductoBean);
$alerta='';
if($eliminar){
   $_SESSION['alerta']=$alerta;
   header('location: ../vadministrador/eliminar_producto.php');
}else{
	$_SESSION['alerta2']=$alerta;
	 header('location: ../vadministrador/eliminar_producto.php');
}


?>