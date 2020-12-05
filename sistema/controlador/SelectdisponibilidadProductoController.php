<?php

require_once '../modelo/daoDisponibilidad.php';

$objBuscarTipoDAO=new daoDisponibilidad();
$buscardispo=$objBuscarTipoDAO->Buscardisponibilidad();

while($fila=$buscardispo->fetch_array()){
            echo "<option value='".$fila['id_dispo']."'>".utf8_encode($fila['estado'])."</option>";
      }
?>

