

<?php
require_once '../modelo/daoProducto.php';

$objBuscarNProductoDAO=new daoProducto();
$buscar=$objBuscarNProductoDAO->BuscarNombreaeliminarProducto();

while($fila=$buscar->fetch_array()){
      echo "<option value='".$fila['id']."'>".utf8_encode($fila['nombrep'])."</option>";
}

?>