<?php
require_once '../modelo/daoDistrito.php';

$objBuscarDistritoDAO=new daoDistrito();
$buscar=$objBuscarDistritoDAO->Buscardistrito();

while($fila=$buscar->fetch_array()){
      echo "<option value='".$fila['iddistrito']."'>".$fila['distrito']."</option>";
}

?>