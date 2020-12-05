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
if (!isset($_SESSION['carrito'])) {
 header('Location: ./cliente.php');
}
$datos = $_SESSION['carrito'];
?>
<?php
    if(isset($_SESSION['nombres'])){
     $userr=$_SESSION['nombres'];
    }
     if(isset($_SESSION['apellidos'])){
     $apellidos=$_SESSION['apellidos'];
    }
     if(isset($_SESSION['correoe'])){
     $correoelec=$_SESSION['correoe'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
        <meta charset="UTF-8">
        <title>Orden de pedido - checkout®</title>
        <link rel="stylesheet" href="../css/gotop.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../css/sismain.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/jquery-ui.css">
        <link rel="stylesheet" href="../../css/fontawesome/css/all.css">
        <link rel="stylesheet" href="../css/ordenpedido.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="../../Imagenes/icoprincipal.png" type="image/x-icon">
    </head>
<body oncontextmenu="return false">
    <?php 
      include "../complementos/navordenpedido.php";
     ?> 
    <?php 
      include "../complementos/bannerordenpedido.php";
    ?> 
<section class="sectiond">
<h1 class="alldop">FORMULARIO ORDEN DEL PEDIDO</h1> 
<form action="../controlador/OrdenpedidoController.php" method="post" onsubmit="return validarformordenpedido();">
<div class="left">
<h2 class="cdatosp"><center>COMPLETE SUS DATOS PERSONALES</center></h2>
<div class="sub">
<p class="labels1">Nombres completos</p>
<input type="text" name="nombre" value="<?php echo ucwords($userr); ?>" disabled>
<p class="labels">Apellidos</p>
<input type="text" name="apellidos" value="<?php echo ucwords($apellidos); ?>" disabled>
<p class="labels">Distrito de envío</p>
<select type="text" name="iddistrito" id="iddistrito">
  <option value="0">-----------Distritos disponibles---------------</option>
  <?php
     include '../controlador/MostrardistritoController.php';

   ?>
</select>
<p class="labels">Dirección de envío<a class="asterisco">*</a></p>
 <input type="text" name="direccion" id="direccion">
<p class="labels">Correo electrónico</p>
<input type="text" name="correo" value="<?php echo $correoelec; ?>" disabled>
<p class="labels">Ingrese su teléfono<a class="asterisco">*</a>&nbsp;<span id="telefOK"></span></p>
<input type="text" name="telefono" id="telefono" maxlength="9"> 
</div>  
</div>

<div class="right">
<h2 class="cdatosp"><center>ESPECIFICACIÓN DE SU PEDIDO</center></h2>
<div class="sub2">
<table>
    <thead class="theadtitulo">
        <th>Producto & Cantidad</th>
        <th class="st">Subtotal</th>
    </thead>
    <tbody class="tbodys">
      <?php 
        $subtotal=0;
        $total=0;
        $del=6.4;
        $roo=0;
        for($i=0;$i<count($datos);$i++){
            $subtotal=($datos[$i]['Cantidad']*$datos[$i]['Precio']);
            $total=(($datos[$i]['Cantidad']*$datos[$i]['Precio']))+$total;
            $roo=$total+6.4;
      ?>
      <tr>
        <td class="tds"><?php echo utf8_encode($datos[$i]['Nombre']) ; ?>&nbsp;x&nbsp;<?php  echo $datos[$i]['Cantidad']; ?></td>
        <td class="tds">S/. <?php echo number_format($subtotal, 2, '.', ''); ?></b></td>
      </tr>
      <?php 
          }
      ?>
      <tr>
        <td class="tds1" >Pago único - Delivery</td>
        <td class="tds">S/. <?php echo number_format($del, 2, '.', ''); ?></b></td>
      </tr>
      <tr>
        <td class="tds">Total del pedido</td>
        <td id="total" class="tds">S/. <?php echo number_format($roo, 2, '.', ''); ?></td>
      </tr>
    </tbody>
</table>

</div>

 
<input  type="submit"  class="pedidos" value="Realizar Pedido">
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
