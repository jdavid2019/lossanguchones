<?php

require_once '../modelo/daoTiproducto.php';

$objBuscarTipoDAO=new daoTiproducto();
$mostraselectp=$objBuscarTipoDAO->SelectTipo();


 while($fila=$mostraselectp->fetch_array()){
            echo "<option value='".$fila['id_tipo']."'>".utf8_encode($fila['tipo'])."</option>";
      }
?>

