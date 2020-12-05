
<?php
 include_once '../controlador/VerpedidoController.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
        <meta charset="UTF-8">
        <title>Ver Pedido®</title>
        <link rel="stylesheet" href="../css/gotop.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../css/sismain.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/jquery-ui.css">
        <link rel="stylesheet" href="../../css/fontawesome/css/all.css">
        <link rel="stylesheet" href="../css/verpedido.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="../../Imagenes/icoprincipal.png" type="image/x-icon">
    </head>
<body>
    <?php 
      include "../complementos/navverpedido.php";
     ?> 
    <?php 
      include "../complementos/bannerordenpedido.php";
    ?> 
<section class="sectiond">
  <?php
  date_default_timezone_set('America/Lima');
  $fecha=date("Y-m-d"); 
  $hora=date("H:i:s");  
  ?>
<h1 class="alldop">PEDIDO REALIZADO EL <?php echo $datosusuario[7];?> </h1> 
<form>
<div class="left">
<h2 class="cdatosp"><center>SUS DATOS PERSONALES</center></h2>
<div class="sub">
<div>
 <label class="primpe">Pedido #<?php echo $_GET['iddettpedido']; ?> </label> 
</div>
<div>
  <label  class="primpe1"><a class="cnm">Nombres :</a> <?php echo $datosusuario[3]; ?></label>
</div>
<div>
   <label class="primpe1"><a class="cnm">Apellidos :</a> <?php echo $datosusuario[4]; ?></label>
</div>
<div>
   <label class="primpe1"><a class="cnm">Email de contacto : </a><?php echo $datosusuario[5]; ?></label>
</div>
<div>
   <label class="primpe1"><a class="cnm">Dirección de envío : </a><?php echo $datosusuario[0]; ?></label>
</div>
<div>
   <label class="primpe1"><a class="cnm">Distrito : </a> <?php echo $datosusuario[1]; ?></label>
</div>
<div>
   <label class="primpe1"><a class="cnm">Telefono de contacto : </a><?php echo $datosusuario[2]; ?></label>
</div>
</div>  
</div>

<div class="right">
<h2 class="cdatosp"><center>ESPECIFICACIÓN DE SU PEDIDO</center></h2>
<div class="sub2">
<div class="sub3">
    <?php 
              while ($f = mysqli_fetch_array($datosproducto)) {
              ?>
               <?php
    $tipo=$f['tipo_id'];
    if($tipo =='1'){
    echo   '<div  class="bloqueimg">';
    echo '<img class="imagcs" src="../../Imagenes/clasicas/'.$f['imagenp'].'"><br>';
    echo  '</div>';
    }else if($tipo=='2'){
      echo   '<div class="bloqueimg">';
    echo '<img class="imagcs" src="../../Imagenes/bebidas/'.$f['imagenp'].'"><br>'; 
    echo  '</div>'; 
    }else if($tipo=='3'){
       echo   '<div class="bloqueimg">';
    echo '<img class="imagcs" src="../../Imagenes/papas/'.$f['imagenp'].'"><br>'; 
    echo  '</div>';    
    }else if($tipo=='4'){
       echo   '<div class="bloqueimg">';
    echo '<img class="imagcs" src="../../Imagenes/combosyp/'.$f['imagenp'].'"><br>';
    echo  '</div>';  
    }else if($tipo=='5'){
    echo   '<div class="bloqueimg">';
    echo '<img class="imagcs" src="../../Imagenes/salchipapas/'.$f['imagenp'].'"><br>';
    echo  '</div>';  
    }else if($tipo=='6'){
    echo   '<div class="bloqueimg">';
    echo '<img class="imagcs"  src="../../Imagenes/especiales/'.$f['imagenp'].'"><br>'; 
    echo  '</div>'; 
    }elseif ($tipo=='7') {
    echo   '<div class="bloqueimg">';
    echo '<img class="imagcs" src="../../Imagenes/ensaladas/'.$f['imagenp'].'"><br>';
    echo  '</div>';   
    }
    ?>
    <div class="detm">
<label class="primpe2"><a class="cnm"> Nombre:</a> <?php echo utf8_encode($f['nombrep']);?></a></label><br>
         <label class="primpe2">   <a class="cnm"> Precio :  </a>  S/. <?php echo $f['preciop'];?></a></label><br> 
          <label class="primpe2">  <a class="cnm">Cantidad :</a><?php echo $f['cantidadped'];?></a></label><br> 
          <label class="primpe2">  <a class="cnm"> Subtotal:  </a> S/. <?php echo $f['subtotal'];?></a></label><br> 
            <?php } ?>
          </div>
           <hr style="border:10px;border-width: 3px; border-style: solid;"><hr style="border-color: black;">
          <div class="totsubtl">

<label class="primpe3">   <a class="cnm"> Delivery del envío:  </a>  S/.&nbsp; <?php echo number_format(6.4,2,'.','');?></a></label><br> 
<label class="primpe2">   <a class="cnm"> Total del pedido :  </a>  S/. <?php echo $datosusuario[6]; ?></a></label><br> 
          </div>
            </div>
            
</div> 
</div>  
</form>


</section>



<!---SECCION FOOTER---->
      <?php
        include "../complementos/footer.php";
      ?>
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
<script type="text/javascript"  src="../js/validarformordenpedido.js"></script>            
</body>
</html>