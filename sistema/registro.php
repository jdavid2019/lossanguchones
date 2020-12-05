<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
        <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
        <meta charset="UTF-8">
        <title>Crear cuenta | LSDK</title>
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="css/sismain.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/jquery-ui.css">
        <link rel="stylesheet" href="../css/fontawesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/registro.css" media="screen" type="text/css">
        <link rel="icon" href="../Imagenes/icoprincipal.png" type="image/x-icon">
    </head>
<body oncontextmenu="return false">
<?php 
include "complementos/nav.php";
 ?> 
<section id="story" class="description_content">
    <div class="text-content container">
        <div class="col-md-6">
        <form action="controlador/RegistrarClienteController.php" method="POST" onsubmit="return validarformcliente();">
        <h2 class="registrarcliente"><center>CREAR CUENTA<i class="fas fa-hamburger" id="icono"></i></center></h2>
        <!--Lado izquierdo del formulario-->
        <div class="left">
        <p class="indicadores">Ingrese sus nombres<a class="asterisco">*</a>&nbsp;<span id="nombreOK"></span></p>
        <input class="pe" type="text" id="nombres" name="nombres" placeholder="Juan David" ><br>
        <p class="indicadores">Ingrese sus apellidos<a class="asterisco">*</a>&nbsp;<span id="apeOK"></span></p>
        <input class="pe" type="text" name="apellidos" id="apellidos" placeholder="Perez Benito"><br>
        <p class="indicadores">Ingrese su correo e.<a class="asterisco">*</a>&nbsp;<span id="emailOK"></span></p>
        <input class="pe" type="text" name="correoe" id="correoe" placeholder="example@gmail.com"><br>
        </div>
        <div class="right">
       <!-- <p class="indicadores">Ingrese su dni<a class="asterisco">*</a>&nbsp;<span id="dniOK"></span></p>
        <input class="pe" type="text" name="dni" id="dni" placeholder="8 dígitos"><br> -->
        <p class="indicadores">Ingrese su contraseña<a class="asterisco">*</a>&nbsp;<span id="contraOK"></span></p>
        <input  type="password" name="password" id="password" placeholder="********"><br>
        <p class="indicadores">Confirme su contraseña<a class="asterisco">*</a>&nbsp;<span id="ccontraOK"></span></p>
        <input  type="password" name="cpassword" id="cpassword" placeholder="********"><br>
        <p class="indicadores"><label class="asteriscotrans">*</label></p>
        <p class="center"><input  type="submit" class="inises" value="REGISTRARSE"></p>
        <div class="regresarlogin">
        <a  class="regresarlogin1" href="index.php" >INICIAR SESION</a>
        </div>
        <?php 
        if(isset($_SESSION['alertaerror'])){
        include_once 'complementos/alertas/correoyaregistrado.php';
        } else if(isset($_SESSION['alertagood'])){
        include_once 'complementos/alertas/registroclienteok.php';
        }
        ?>
        </div>
        </form>
      </div>
      <div class="col-md-6">
        <img class="imlogin" src="../Imagenes/logoresponsive.png" width="490" height="490">
      </div>   
  </div>
 </section>
 
 
<!-- ============ Footer redes sociales ============= -->
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
  </section>
  <!-- ============ Footer  ============= -->
  <footer class="sub_footer">
      <div class="container">
          <div class="col-md-2"><p class="sub-footer-text text-center"></p></div>
          <div class="col-md-8"><p class="sub-footer-text text-center">Los Sanguchones de Kike ® - Desarrollado por Joseph David 🖥️</a></p>
          </div>
      </div>
  </footer>
    <!-- ============ Scripts  ============= -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"> </script>
    <script type="text/javascript" src="../js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="../js/jquery-1.10.2.js"></script>     
    <script type="text/javascript" src="../js/jquery.mixitup.min.js" ></script>
    <script type="text/javascript"  src="js/scriptregistro.js"></script>
    <script type="text/javascript"  src="js/validarformcliente.js"></script>
</body>
</html>