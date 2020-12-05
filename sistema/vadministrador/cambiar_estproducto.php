<?php

    session_start();
      if(!isset($_SESSION['rol'])){
        header('location: ../index.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: ../index.php');
        }
        }
    ?>
<?php
    if(isset($_SESSION['nombres'])){
     $nombres=$_SESSION['nombres'];
    }
  require_once '../modelo/daoProducto.php';
  require_once '../modelo/daoDisponibilidad.php';
  $objBuscarNProductoDAO=new daoProducto();
  $buscar=$objBuscarNProductoDAO->BuscarNombreProducto();
  $objBuscarTipoDAO=new daoDisponibilidad();
  $buscardispo=$objBuscarTipoDAO->Buscardisponibilidad();
?>
<html>
  <head>
        <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
        <meta charset="UTF-8">
        <title>Cambiar estado del Producto</title>
        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../css/sismain.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../css/menu3.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/jquery-ui.css">
        <link rel="stylesheet" href="../../css/fontawesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
       <link rel="icon" href="../../Imagenes/icoprincipal.png" type="image/x-icon">
       <!--lo que compete al formulario-->
       <link rel="stylesheet" href="../css/cambestadoproducto.css">
        <link rel="stylesheet" href="../css/selectmul2.css">
  </head>
<body>
<?php 
include "../complementos/navadmin.php";
 ?>
<?php
include '../complementos/menu3.php';
 ?>
<form action="../controlador/CambiarestproductoController.php" method="POST" onsubmit="return validarformcambestadoproducto();" >
<h2 class="registrarproductos">CAMBIAR ESTADO DEL PRODUCTO</h2>
<div class="sub">
  <img src="../../Imagenes/cambiarproducto.png" class="imcambiar" width="180" height="180">
<p class="labels">Nombre del producto</p>
<div class="custom-select" style="width:370px;">
  <select  name="id" id="id">
    <option value="0">Seleccione el nombre de producto:</option>
    <?php
    while($fila=$buscar->fetch_array()){
        echo "<option value='".$fila['id']."'>".utf8_encode($fila['nombrep'])."</option>";
    }
    ?>
  </select>
</div>

<p class="labels">Disponibilidad del producto</p>
<div class="custom-select" style="width:370px;">
  <select  name="id_disponibilidad" id="id_disponibilidad">
    <option value="0">Seleccione la disponibilidad de producto:</option>
    <?php
      while($fila=$buscardispo->fetch_array()){
            echo "<option value='".$fila['id_dispo']."'>".utf8_encode($fila['estado'])."</option>";
      }
    ?>
  </select>
</div>
<input type="submit"  class="botregis" value="Cambiar estado del producto">
<?php 
            if(isset($_SESSION['alerta'])){
              include_once '../complementos/alertas/estadopactualizado.php'; 
            }elseif (isset($_SESSION['alerta2'])) {
              echo "No se puede modificar la disponibilidad";
            }
            ?>
</form>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript" src="../../js/jquery-1.10.2.min.js"> </script>
  <script type="text/javascript" src="../js/selectmult.js" ></script>
  <script type="text/javascript" src="../js/validarformcambestadoproducto.js" ></script>
</body>
</html>