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
?>
<html>
  <head>
        <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
        <meta charset="UTF-8">
        <title>Menú administrador Los Sanguchones de Kike</title>
        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../css/sismain.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../css/menu3.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/jquery-ui.css">
        <link rel="stylesheet" href="../../css/fontawesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/admin.css">
       <link rel="icon" href="../../Imagenes/icoprincipal.png" type="image/x-icon">
    </head>
<body>
<?php 
include "../complementos/navadmin.php";
 ?>
 <?php
include '../complementos/menu3.php';
 ?>

 <?php 
header('Location:./ver_pedidos.php');

  ?>
   

</body>

</html>