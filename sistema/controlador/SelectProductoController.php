<?php

require_once '../modelo/daoProducto.php';

$objBuscarTipoDAO=new daoProducto();
$mostraselectp=$objBuscarTipoDAO->SelectProducto();


 while($fila=$mostraselectp->fetch_array()){
            echo "<option value='".$fila['id']."'>".utf8_encode($fila['nombrep'])."</option>";
      }
?>
