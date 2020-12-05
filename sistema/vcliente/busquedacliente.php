<?php
 include '../util/Conexion.php';
    session_start();
    if(!isset($_SESSION['rol'])){
        header('location: ../index.php');
            }else{
        if($_SESSION['rol'] != 2){
            header('location: ../index.php');
        }
    }
?>
<?php
    if(isset($_SESSION['nombres'])){
     $userr=$_SESSION['nombres'];
    }

    if(!isset($_GET['search'])){
   header('location: cliente.php');
 }
?>
<!DOCTYPE html>
<html>
  <head>
        <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
        <meta charset="UTF-8">
        <title>Pedidos online cliente</title>
        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../css/sismain.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../css/cajaproducto.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../css/gotop.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/jquery-ui.css">
        <link rel="stylesheet" href="../../css/fontawesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="../../Imagenes/icoprincipal.png" type="image/x-icon">
  </head>
<body>
<!-- ============ NAVBAR CLIENTE ============= -->
        <?php 
          include "../complementos/navcli.php";
        ?> 
<!-- === -->
<!-- ============ BANNER============= -->
 <?php 
include "../complementos/bannerprincipal.php";
 ?> 
<!-- === -->

<form  action="busquedacliente.php#top" method="GET">
    <div  class="box">
      <input  type="text" name="search" class="src" autocomplete="off" placeholder="Buscar algún producto por nombre o tipo del mismo">
    </div>
</form>
<!-------BUSQUEDA -->
<?php

   include "../controlador/BuscarproductoController.php"   
?>
<!------- fin --------------------------------->
<!---VISTA PRODUCTO CATEGORIAS- -->
        <section class="ham">
         <?php 
          include "../controlador/MostrarcatprodController.php";
         ?> 
        </section>
        <!----------------------->
 <!---SECCION FOOTER---->
        <?php
          include "../complementos/footer.php";
        ?>
        <!----------------------->
        <!---BOTON IR ARRIBA---->
        <?php
          include "../complementos/btnirarriba.php";
        ?>
        <!----------------------->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript" src="../../js/jquery-1.10.2.min.js"> </script>
  <script type="text/javascript" src="../../js/bootstrap.min.js" ></script>
  <script type="text/javascript" src="../../js/jquery-1.10.2.js"></script>     
  <script type="text/javascript" src="../../js/jquery.mixitup.min.js" ></script>
  <script type="text/javascript" src="../js/gotop.js"></script>  
</body>
</html>