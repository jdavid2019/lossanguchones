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
?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
    <meta charset="UTF-8">
    <title>Detalle del producto</title>
    <link rel="stylesheet" href="../css/gotop.css" media="screen" type="text/css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../css/sismain.css" media="screen" type="text/css">
    <link rel="stylesheet" href="../css/cajaproducto.css" media="screen" type="text/css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../css/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="../../Imagenes/icoprincipal.png" type="image/x-icon">
    </head>
<body>
    <?php 
        include "../complementos/navcli.php";
     ?> 
    <?php 
        include "../complementos/bannerprincipal.php";
    ?> 
    <div id="detallado"><br><br><br><br></div>
    <section>
        <h1 class="alld">DETALLE DEL PRODUCTO</h1> 
        <?php 
            include '../controlador/MostrardetprodController.php';
        ?>  
    </section>
        <?php
            include '../complementos/footer.php';
        ?>
  <script type="text/javascript" src="../../js/jquery-1.10.2.min.js"> </script>
  <script type="text/javascript" src="../../js/bootstrap.min.js" ></script>
  <script type="text/javascript" src="../../js/jquery-1.10.2.js"></script>     
  <script type="text/javascript" src="../../js/jquery.mixitup.min.js" ></script>
</body>
</html>