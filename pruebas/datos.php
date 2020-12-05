<?php
include '../sistema/util/Conexion.php';

$rs=Conexion::obtenerInstancia();
$producto=$_POST['producto'];

$sql="select * from producto where id='$producto'";
$sql2="SELECT id_tipo,tipo from tipo_producto inner join producto on tipo_producto.id_tipo=producto.tipo_id where id='$producto' ";

$sql3="SELECT * from tipo_producto";
$sql4="SELECT id_dispo,estado from disponibilidad inner join producto on disponibilidad.id_dispo=producto.id_disponibilidad where id='$producto'";
$sql5="SELECT * FROM disponibilidad";
$resultado=mysqli_query($rs,$sql);
$resultado2=mysqli_query($rs,$sql2);
$resultado3=mysqli_query($rs,$sql3);
$resul=mysqli_fetch_row($resultado2);

$resultado4=mysqli_query($rs,$sql4);
$resul4=mysqli_fetch_row($resultado4);
$resultado5=mysqli_query($rs,$sql5);

$det=utf8_encode($resul[1]);
$cadena="<br>
         ";
while ($ver=$resultado->fetch_array()) {
       $cadena=$cadena.'<input type="text"  name="id" value="'.$ver['id'].'"><label>Nombre del producto</label><br><input  type="text" class="txtarea" name="nombrep" id="nombrep" rows="8" cols="49.5" value="'.utf8_encode($ver['nombrep']).'" placeholder="Escriba aquí..."><br><label>Descripción del producto</label><br><textarea name="descripcionp" id="descripcionp" rows="10" cols="50">'.utf8_encode($ver['descripcionp']).'</textarea><br><label>Precio del producto</label><br><input  type="text" class="txtarea" name="preciop" id="preciop" rows="8" cols="49.5" value="'.$ver['preciop'].'" placeholder="Escriba aquí..."><br>';


         } 
$cadena=$cadena."<label>Tipo del producto</label><br><select name='tipo_id' id='tipo_id'><option value='$resul[0]'>$det</option>" ;        
 while($fila=$resultado3->fetch_array()){
            $cadena=$cadena.'<option value='.$fila['id_tipo'].'>'.utf8_encode($fila['tipo']).'</option>';
      }

$cadena=$cadena."</select><br><label>Disponibilidad del producto</label><br><select name='id_disponibilidad' id='id_disponibilidad'><option value='$resul4[0]'>$resul4[1]</option>" ;
 while($fila=$resultado5->fetch_array()){
            $cadena=$cadena.'<option value='.$fila['id_dispo'].'>'.$fila['estado'].'</option>';
      }

echo $cadena."</select>";

?>