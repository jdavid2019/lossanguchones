<?php 
include '../util/Conexion.php';
if(!isset($_GET['iddettpedido'])){
  header("Location: ../index.php");
}
$rs= Conexion::obtenerInstancia();
$sql="select pedido.direccionped,distrito.distrito,pedido.telefcontactoped,usuario.nombres,usuario.apellidos,usuario.correoe,detpedido.total from pedido inner join usuario on pedido.idusuarioped=usuario.id_usuario inner join detpedido on pedido.iddettpedido=detpedido.iddetpedido inner join distrito on pedido.iddistritoped=distrito.iddistrito where iddetpedido =".$_GET['iddettpedido'];
$resultado=mysqli_query($rs,$sql);
$datosusuario= mysqli_fetch_row($resultado);

$sql2="select producto.imagenp,producto.nombrep,producto.preciop,producto.tipo_id,pedido.cantidadped,pedido.subtotal,detpedido.total from pedido inner join producto on pedido.idproductop=producto.id inner join detpedido on pedido.iddettpedido=detpedido.iddetpedido where detpedido.iddetpedido=".$_GET['iddettpedido'];
$datosproducto=mysqli_query($rs,$sql2);
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-7">

            <form action="#" method="post">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
<label for="c_fname" class="text-black">Pedido #<?php echo $_GET['iddettpedido']; ?></label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
<label for="c_fname" class="text-black">Nombres : <?php echo $datosusuario[3]; ?></label>
                  </div>
                </div>
<div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Apellidos : <?php echo $datosusuario[4]; ?></label>
                  </div>
                </div>
<div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Email de contacto :<?php echo $datosusuario[5]; ?></label>
                  </div>
                </div>
<div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Telefono de contacto :<?php echo $datosusuario[2]; ?></label>
                  </div>
                </div>

              </div>
            </form>
          </div>
          <div class="col-md-5 ml-auto">

            <?php 
              while ($f = mysqli_fetch_array($datosproducto)) {
              ?>
              <?php
    $tipo=$f['tipo_id'];
    if($tipo =='1'){
    echo   '<div  class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/clasicas/'.$f['imagenp'].'"><br>';
    echo  '</div>';
    }else if($tipo=='2'){
      echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/bebidas/'.$f['imagenp'].'"><br>'; 
    echo  '</div>'; 
    }else if($tipo=='3'){
       echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/papas/'.$f['imagenp'].'"><br>'; 
    echo  '</div>';    
    }else if($tipo=='4'){
       echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/combosyp/'.$f['imagenp'].'"><br>';
    echo  '</div>';  
    }else if($tipo=='5'){
    echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/salchipapas/'.$f['imagenp'].'"><br>';
    echo  '</div>';  
    }else if($tipo=='6'){
    echo   '<div class="bloqueimg">';
    echo '<img class="imagc"  src="../../Imagenes/especiales/'.$f['imagenp'].'"><br>'; 
    echo  '</div>'; 
    }elseif ($tipo=='7') {
    echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/ensaladas/'.$f['imagenp'].'"><br>';
    echo  '</div>';   
    }
    ?>
            <div class="p-4 border mb-3">
            <a class="greens"> Nombre: <?php echo utf8_encode($f['nombrep']);?></a><br>
            <a class="greens"> Precio : <?php echo $f['preciop'];?></a><br>
            <a class="greens">Cantidad :<?php echo $f['cantidadped'];?></a><br>
            <a class="greens"> Subtotal: <?php echo $f['subtotal'];?></a><br>
            </div>
            <?php } ?>
            <a class="greens"> Delivery: <?php echo 6.40; ?></a><br>
            <a class="greens"> Total: <?php echo $datosusuario[6]; ?></a><br>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>