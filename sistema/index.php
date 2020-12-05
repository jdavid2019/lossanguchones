<?php
session_start();

 if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: vadministrador/admin.php');
            break;

            case 2:
            header('location: vcliente/cliente.php');
            break;

            default:
        }
    }
?>
<!DOCTYPE html>
<html>
  <head>
        <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
        <meta charset="UTF-8">
        <title>Inicio de sesión del cliente | LSDK</title>
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="css/sismain.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/jquery-ui.css">
		<link rel="stylesheet" href="../css/fontawesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/login.css" media="screen" type="text/css">
    
        <link rel="icon" href="../Imagenes/icoprincipal.png" type="image/x-icon">
    </head>
<body oncontextmenu="return false">
<?php 
include "complementos/nav.php";
 ?>	
<section id="story" class="description_content">
    <div class="text-content container">
        <div class="col-md-6">
            <form action="controlador/LoginController.php" method="POST" onsubmit="return validarformlogin();">
            <h2 class="iniciarsesion"><center>INGRESA<i class="fas fa-hamburger" id="icono"></i></center></h2>
            <p class="indicadores">Ingrese su correo electrónico<a class="asterisco">*</a>&nbsp;<span id="emailOK"></span></a></p>
            <p> <input id="correoe" type="text" name="correoe" placeholder="example@gmail.com"></p>
           <p class="indicadores">Ingrese su contraseña<a class="asterisco">*</a></p>
            <p> <input  id="password" type="password" name="password" placeholder="*******"></p>
            <?php 
            if(isset($_SESSION['alerta'])){
              include_once 'complementos/alertas/errorus.php'; 
            }
            ?>
            <p><input type="submit" class="inises" value="INICIAR SESION"></p>
            <div class="crearcu">
            <a  class="crearcu1" href="registro.php" > CREAR CUENTA</a>
            </div>
            </form>
        </div>
            <div class="col-md-6">
            <img class="imlogin" src="../Imagenes/logoresponsive.png" width="500" height="500">
            </div>
    </div>
 </section>

<!-- ============ Footer información social ============= -->
 <section  class="social_connect">
        <div  class="text-content container"> 
            <div class="col-md-6">
                <span class="social_heading">SIGUENOS EN NUESTRAS REDES</span>
                <ul class="social_icons">
                <li><a class="fa fa-instagram color_animation" href="https://www.instagram.com/sanguchonesdekike/" target="_blank"></a></li>
                <li><a class="fa fa-youtube  color_animation" href="https://www.youtube.com/channel/UC3vw8XlvAEIwxvLGJNK8VYw" target="_blank"></a></li>
                <li><a class="fa fa-facebook-square color_animation" href="https://www.facebook.com/LosSanguchonesDeKike/" target="_blank"></a></li>
                </ul>
            </div>
            <div class="col-md-6">
                    <span class="social_heading"><a class="sociale">O LLAMA A LOS NÚMEROS </a></span>
                    <span class="social_info"><a class="color_animation1" href="#"><i class="fas fa-phone-volume"></i>(01)-515 877 Ó&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-mobile">&nbsp;985400951</i> </a>
                    </span>
                </div> 
            </div>
  </section>
<!-- ============ Footer complemento ============= -->
  <footer class="sub_footer">
            <div class="container">
                <div class="col-md-2"><p class="sub-footer-text text-center"></p></div>
                <div class="col-md-8"><center><p class="sub-footer-text text-center">Los Sanguchones de Kike ® - Desarrollado por Joseph David 🖥️</a></center></p>
                </div>
            </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript" src="../js/jquery-1.10.2.min.js"> </script>
  <script type="text/javascript" src="../js/bootstrap.min.js" ></script>
  <script type="text/javascript" src="../js/jquery-1.10.2.js"></script>     
  <script type="text/javascript" src="../js/jquery.mixitup.min.js" ></script>
   <script type="text/javascript"  src="js/scriptlogin.js"></script>
  <script type="text/javascript"  src="js/validarformlogin.js"></script>
</body>
</html>