<?php
require_once '../modelo/daoStatus.php';

$objBuscarStatusDao=new daoStatus();
$buscarstatus=$objBuscarStatusDao->Buscarstatus();

while($fila=$buscarstatus->fetch_array()){
      echo "<option value='".$fila['id']."'>".ucwords($fila['status'])."</option>";
}

?>