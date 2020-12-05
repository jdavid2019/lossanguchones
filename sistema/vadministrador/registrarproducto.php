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
    $objBuscarTipoDAO=new daoProducto();
    $mostraselectp=$objBuscarTipoDAO->SelectProducto();
?>
<html>
  <head>
        <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
        <meta charset="UTF-8">
        <title>Registrar Productos</title>
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
       <link rel="stylesheet" href="../css/selectimagenprod.css">
       <link rel="stylesheet" href="../css/agregarproducto.css">
        <link rel="stylesheet" href="../css/selectmul.css">


    </head>
<body>
<?php 
include "../complementos/navadmin.php";
 ?>
<?php
include '../complementos/menu3.php';
 ?>
<form action="../controlador/RegistrarproductoController.php" method="POST" onsubmit="return validarformagregarproducto();" enctype="multipart/form-data">
<h2 class="registrarproductos">REGISTRAR PRODUCTO</h2>
<div class="sub">
<img src="../../Imagenes/cambiarproducto.png" class="imcambiar" width="180" height="180">
<p class="labels1">Nombre del producto</p>
<input type="text" name="nombrep" id="nombrep"  placeholder="Escriba aquí...">
<p class="labels">Descripción del producto</p>
<textarea  class="txtarea" name="descripcionp" id="descripcionp" rows="8" cols="49.5" value="" placeholder="Escriba aquí..."></textarea> <p class="labels">Imagen del Producto</p>
<div class="photo" >
  <label for="foto" class="fphoto">Foto a insertar</label>
        <div class="prevPhoto">
        <span class="delPhoto notBlock">X</span>
        <label for="foto" class="cuadro"></label>
        </div>
        <div class="upimg">
        <input type="file" name="file" id="foto">
        </div>
        <div id="form_alert"></div>
</div>
<p class="labels">Precio Producto</p>
<input type="text" name="preciop" id="preciop"  placeholder="S/.">

<p class="labels">Tipo del producto</p>
<div class="custom-select" style="width:370px;">
  <select  name="tipo_id" id="tipo_id">
    <option value="0">Seleccione el tipo de producto:</option>
    <?php
    while($fila=$mostraselectp->fetch_array()){
            echo "<option value='".$fila['id']."'>".utf8_encode($fila['nombrep'])."</option>";
      }
    ?>
  </select>
</div>
<input type="submit"  class="botregis" value="Registrar Producto">
<?php 
            if(isset($_SESSION['alerta'])){
              include_once '../complementos/alertas/productoduplicado.php'; 
            }elseif (isset($_SESSION['alerta1'])) {
              include_once '../complementos/alertas/productoregistrado.php';
            }elseif (isset($_SESSION['alerta2'])) {
              include_once '../complementos/alertas/errorinterno.php';
            }
            ?>
</form>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript" src="../../js/jquery-1.10.2.min.js"> </script>
  <script type="text/javascript" src="../js/selectmult.js" ></script>
  <script type="text/javascript" src="../js/selecproducto.js" ></script>
  <script type="text/javascript" src="../js/validarformagregarproducto.js" ></script>
</body>
</html>