<?php
session_start();
require_once '../bean/BeanProducto.php';
require_once '../modelo/daoProducto.php';
require_once '../modelo/daoTiproducto.php';
require_once '../modelo/daoDisponibilidad.php';
$producto=$_POST['producto'];

$objProductoBean = new BeanProducto();
$objProductoBean->setId($producto);
$objProductoDAO= new daoProducto();
/*result producto por id*/
$buscar=$objProductoDAO->BuscarProductoporId($objProductoBean);
/*result tipo producto por id */
$buscartipopro=$objProductoDAO->BuscarTipoporIdproducto($objProductoBean);
/*result tipo producto general*/
$objTiproductoDAO= new daoTiproducto();
$mostraselectp=$objTiproductoDAO->SelectTipo();
/*result disponibilidad por id producto*/
$buscardispopro=$objProductoDAO->BuscarDispoporIdproducto($objProductoBean);
/*result disponibilidad general*/
$objDisponibilidadDAO= new daoDisponibilidad();
$buscardispo=$objDisponibilidadDAO->Buscardisponibilidad();

/*-----------------------------------------------------------*/
/*disponilidad fila*/
$resul4=mysqli_fetch_row($buscardispopro);
/*tipo fila*/
$resul=mysqli_fetch_row($buscartipopro);
$det=utf8_encode($resul[1]);


$cadena="<br>
         ";
while ($ver=$buscar->fetch_array()) {
       $cadena=$cadena.'<input type="hidden"  name="id" value="'.$ver['id'].'"><input type="hidden"  name="imagenp2" value="'.$ver['imagenp'].'"><p class="labels1">Nombre del producto</p><input  type="text" name="nombrep" id="nombrep"  value="'.utf8_encode($ver['nombrep']).'" placeholder="Escriba aquí..."><br><p class="labels1">Descripción del producto</p><textarea class="txtarea"  name="descripcionp" id="descripcionp" rows="10" cols="48">'.utf8_encode($ver['descripcionp']).'</textarea><br><p class="labels1">Precio del producto</p><input  type="text"  name="preciop" id="preciop" rows="8" cols="49.5" value="'.$ver['preciop'].'" placeholder="Escriba aquí..."><br>';


         } 

 $cadena=$cadena."<p class='labels1'>Tipo del producto</p><select name='tipo_id' id='tipo_id' class='select-css'><option value='$resul[0]'>$det</option>" ;        
 while($fila=$mostraselectp->fetch_array()){
            $cadena=$cadena.'<option value='.$fila['id_tipo'].'>'.utf8_encode($fila['tipo']).'</option>';
      }

$cadena=$cadena."</select><br><p class='labels1'>Disponibilidad del producto</p><select name='id_disponibilidad' id='id_disponibilidad' class='select-css'><option value='$resul4[0]'>$resul4[1]</option>" ;
 while($fila=$buscardispo->fetch_array()){
            $cadena=$cadena.'<option value='.$fila['id_dispo'].'>'.$fila['estado'].'</option>';
      }

echo $cadena."</select>";        
?>

