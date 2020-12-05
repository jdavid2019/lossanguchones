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
    $objBuscarNProductoDAO=new daoProducto();
    $buscar=$objBuscarNProductoDAO->BuscarNombreaeliminarProducto();

?>
<html>
  <head>
        <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
        <meta charset="UTF-8">
        <title>Eliminar Producto</title>
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
       <link rel="stylesheet" href="../css/elimproducto.css">
        <link rel="stylesheet" href="../css/selectmul3.css">
  </head>
<body>
<?php 
include "../complementos/navadmin.php";
 ?>
<?php
include '../complementos/menu3.php';
 ?>
<form action="../controlador/EliminarproductoController.php" method="POST" onsubmit="return validarformeliminproducto();" >
<h2 class="registrarproductos">ELIMINAR PRODUCTOS SIN REGISTRO DE PEDIDO ALGUNO</h2>
<div class="sub">
  <img src="../../Imagenes/cambiarproducto.png" class="imcambiar" width="180" height="180">
<p class="labels">Nombre del producto a eliminar</p>
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

<input type="submit"  class="botrelimi" value="Eliminar producto">
<?php 
            if(isset($_SESSION['alerta'])){
              include_once '../complementos/alertas/productoeliminado.php'; 
            }elseif (isset($_SESSION['alerta2'])) {
             include_once '../complementos/alertas/productonoeliminado.php'; 
            }
            ?>
</form>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript" src="../../js/jquery-1.10.2.min.js"> </script>
  <script type="text/javascript" src="../js/selectmult.js" ></script>
  <script type="text/javascript" src="../js/validarformcambestadoproducto.js" ></script>
</body>
</html>