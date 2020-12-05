<?php
session_start();
include '../sistema/util/Conexion.php';

$listProducto=$_POST['listProducto'];
$tipo_id=$_POST['tipo_id'];
$nombrep=utf8_decode($_POST['nombrep']);
$descripcionp=utf8_decode($_POST['descripcionp']);
$preciop=$_POST['preciop'];
$tipo_id=$_POST['tipo_id'];
$id_disponibilidad=$_POST['id_disponibilidad'];
$alerta='';
$rs=Conexion::obtenerInstancia();
if($listProducto == 0){
	$_SESSION['alerta']=$alerta;
 header('location: combodinamico.php');
}else{
 	if($_FILES["file"]["name"] !=''){
 	$imagenp= $_FILES['file']['name'];
 	$id=$_POST['id'];
$tam='';
  if($tipo_id==1){
          move_uploaded_file($_FILES["file"]["tmp_name"],
              "../Imagenes/clasicas/" .$_FILES["file"]["name"]);
          $tam='1';
  }elseif ($tipo_id==2) {
                    move_uploaded_file($_FILES["file"]["tmp_name"],
              "../Imagenes/bebidas/" .$_FILES["file"]["name"]); 
                    $tam='1';
  }elseif($tipo_id==3){
          move_uploaded_file($_FILES["file"]["tmp_name"],
              "../Imagenes/papas/" .$_FILES["file"]["name"]);
          $tam='1';
  }elseif($tipo_id==4){
          move_uploaded_file($_FILES["file"]["tmp_name"],
              "../Imagenes/combosyp/" .$_FILES["file"]["name"]);
          $tam='1';
  }elseif($tipo_id==5){
          move_uploaded_file($_FILES["file"]["tmp_name"],
              "../Imagenes/salchipapas/" .$_FILES["file"]["name"]);
          $tam='1';
  }elseif($tipo_id==6){
          move_uploaded_file($_FILES["file"]["tmp_name"],
              "../Imagenes/especiales/" .$_FILES["file"]["name"]);
          $tam='1';
  }elseif($tipo_id==7){
          move_uploaded_file($_FILES["file"]["tmp_name"],
              "../Imagenes/ensaladas/" .$_FILES["file"]["name"]);
          $tam='1';
                    } 

   if($tam == '1'){
           $fila=$rs->query('select imagenp from producto where id='.$id);
           $ids=mysqli_fetch_row($fila);
           echo $ids[0];
            if(file_exists('../Imagenes/clasicas/'.$ids[0])){
               unlink('../Imagenes/clasicas/'.$ids[0]);
            }elseif (file_exists('../Imagenes/bebidas/'.$ids[0])) {
             unlink('../Imagenes/bebidas/'.$ids[0]);
            }elseif (file_exists('../Imagenes/papas/'.$ids[0])) {
              unlink('../Imagenes/papas/'.$ids[0]);
            }elseif (file_exists('../Imagenes/combosyp/'.$ids[0])) {
              unlink('../Imagenes/combosyp/'.$ids[0]);
            }elseif (file_exists('../Imagenes/salchipapas/'.$ids[0])) {
              unlink('../Imagenes/salchipapas/'.$ids[0]);
            }elseif (file_exists('../Imagenes/especiales/'.$ids[0])) {
              unlink('../Imagenes/especiales/'.$ids[0]);
            }elseif (file_exists('../Imagenes/ensaladas/'.$ids[0])) {
              unlink('../Imagenes/ensaladas/'.$ids[0]);
            }                                
    $rs->query("update producto set imagenp='".$imagenp."' where  id=".$id);
}
}

$rs->query("update producto set nombrep='".$nombrep."',descripcionp='".$descripcionp."',preciop='".$preciop."',tipo_id='".$tipo_id."',id_disponibilidad='".$id_disponibilidad."' where id=".$id);


echo "se actualizo correctamente";

                                  


}


?>