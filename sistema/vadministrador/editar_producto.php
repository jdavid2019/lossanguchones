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
//isset determina si esta variable esta definida
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
        <title>Actualizar Productos</title>
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
       <link rel="stylesheet" href="../css/editarproducto.css">
        <link rel="stylesheet" href="../css/selectmul4.css">
    </head>
<body>
<?php 
include "../complementos/navadmin.php";
 ?>
<?php
include '../complementos/menu3.php';
 ?>
<form action="../controlador/EditarproductoController.php" method="POST" onsubmit="return validarformactualizarproducto();" enctype="multipart/form-data">
<h2 class="registrarproductos">EDITAR PRODUCTOS</h2>
<div class="sub">
<img src="../../Imagenes/cambiarproducto.png" class="imcambiar" width="180" height="180">
<p class="labels1">Elija el producto a editar</p>
<select id="listProducto" name="listProducto" class="select-css">
<option value="0">Elija una opción</option> 
 <?php
  while($fila=$mostraselectp->fetch_array()){
            echo "<option value='".$fila['id']."'>".utf8_encode($fila['nombrep'])."</option>";
 }
 ?>
</select>

<p class="labels">Imagen del producto a editar</p>
<div class="photo" >
  <label for="foto" class="fphoto">Añadir foto del producto ( Opcional )</label>
        <div class="prevPhoto">
        <span class="delPhoto notBlock">X</span>
        <label for="foto" class="cuadro"></label>
        </div>
        <div class="upimg">
        <input type="file" name="file" id="foto">
        </div>
        <div id="form_alert"></div>
</div>
<div id="listResultado">
</div>
<input type="submit"  class="botregis" value="Editar Producto">
            <?php 
            if(isset($_SESSION['alerta'])){
              include_once '../complementos/alertas/sinseleccion.php';
            }elseif (isset($_SESSION['alerta2'])) {
              include_once '../complementos/alertas/productoactualizado.php';
            }
           
            ?>
</form>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript" src="../../js/jquery-1.10.2.min.js"> </script>
  <script type="text/javascript" src="../js/selecproducto.js" ></script>
  <script type="text/javascript" src="../js/validarformactualizarproducto.js" ></script>
  <script type="text/javascript" src="../js/imputsautomaticos.js" ></script>
</body>
</html>