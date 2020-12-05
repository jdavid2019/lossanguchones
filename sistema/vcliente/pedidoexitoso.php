<?php
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
<html >
 <head>
        <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
        <meta charset="UTF-8">
        <title>Pedido exitoso</title>
         <link rel="stylesheet" href="../css/gotop.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../css/sismain.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/jquery-ui.css">
        <link rel="stylesheet" href="../../css/fontawesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/pedidoexitoso.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../css/icomoon/style.css">
        <link rel="icon" href="../../Imagenes/logoresponsive.png" type="image/x-icon">
  </head>
<body oncontextmenu="return false">
  <!-- NAVBAR CLIENTE-->
        <?php 
        include "../complementos/navordenpedido.php";
         ?> 
		<section>
    <div class="chekeo">
     <span class="icon-check_circle display-3 text-success"></span>
      <h2 class="gracias">¡ GRACIAS POR CONFIAR EN LOS SANGUCHONES DE KIKE !</h2>
      <h4 class="completado">Tu pedido ha sido completado y ordenado exitosamente!</h4>

    </div> 
    <div >
      <img class="exitosoimg" src="../../Imagenes/logoresponsive.png">
    </div> 
    <div class="bot">
      <a  target="_blank" class="pedibotonoesa" href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" > PUEDES VERIFICAR TU ORDEN INGRESANDO A TU EMAIL</a> <br><br><br>
      <a target="_blank" href="pdfraiz.php"  class="pedibotonoesc"  > IMPRIME LA FACTURA DE TU PEDIDO DANDO CLICK AQUI <i class="far fa-file-pdf"></i></a> <br><br><br>
      <a  class="pedibotonoesb" href="./cliente.php" > REGRESAR AL CATÁLOGO DE HAMBURGUESAS</a>
    </div>
   </section>  
<!---SECCION FOOTER---->
        <?php
          include "../complementos/footer.php";
        ?>
        <!----------------------->
    
  </body>
</html>