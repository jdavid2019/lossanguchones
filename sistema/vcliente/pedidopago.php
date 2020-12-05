<?php
session_start();
if (!isset($_SESSION['rol'])) {
  header('location: ../index.php');
} else {
  if ($_SESSION['rol'] != 2) {
    header('location: ../index.php');
  }
}
?>
<?php
if (isset($_SESSION['nombres'])) {
  $userr = $_SESSION['nombres'];
}
if (isset($_SESSION['apellidos'])) {
  $apellidos = $_SESSION['apellidos'];
}
if (isset($_SESSION['correoe'])) {
  $correoelec = $_SESSION['correoe'];
}
?>
<?php
include_once '../complementos/apidivisa/api.php';
include_once '../controlador/VerpedidoController.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
  <meta charset="UTF-8">
  <title>Método de pago®</title>
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

<body oncontextmenu="return false">
  <script src="https://www.paypal.com/sdk/js?client-id=AfUAVr6aNJ46mdL21iCVGYbx_pMfTSG4ap7beNx9zuodqpw9sZepEq6HJ0OWhPguik3RF7l9qbu8DZZ_&currency=USD">
  </script>
  <?php
  include "../complementos/navordenpedido.php";
  ?>
  <?php
  include "../complementos/bannerordenpedido.php";
  ?>
  <div id="contenedor">
    <?php
    date_default_timezone_set('America/Lima');
    $fecha = date("Y-m-d");
    $hora = date("H:i:s");
    ?>
    <h1 class="alldop">PEDIDO REALIZADO EL <?php echo $datosusuario[7]; ?></h1>
    <div id="flotanteizquierda">
      <h2 class="alldop2">
        <center>SUS DATOS PERSONALES</center>
      </h2>
      <div class="sub">
        <div>
          <label class="primpe">Pedido #<?php echo $_GET['iddettpedido']; ?></label>
        </div>
        <div>
          <label class="primpe1"><a class="cnm">Nombres :</a> <?php echo $datosusuario[3]; ?></label>
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
          <label class="primpe1"><a class="cnm">Teléfono de contacto : </a><?php echo $datosusuario[2]; ?></label><br>
          <img src="../../Imagenes/logoresponsive.png" class="detalle" width="120" height="120">
        </div>
      </div>
    </div>
    <div id="flotantederecha">
      <h2 class="alldop3">
        <center>ESPECIFICACIÓN DE SU PEDIDO</center>
      </h2>
      <?php
      while ($f = mysqli_fetch_array($datosproducto)) {
      ?>
        <?php
        $tipo = $f['tipo_id'];
        if ($tipo == '1') {
          echo   '<div  class="bloqueimg">';
          echo '<img class="imagcs" src="../../Imagenes/clasicas/' . $f['imagenp'] . '"><br>';
          echo  '</div>';
        } else if ($tipo == '2') {
          echo '<div class="bloqueimg">';
          echo '<img class="imagcs" src="../../Imagenes/bebidas/' . $f['imagenp'] . '"><br>';
          echo  '</div>';
        } else if ($tipo == '3') {
          echo   '<div class="bloqueimg">';
          echo '<img class="imagcs" src="../../Imagenes/papas/' . $f['imagenp'] . '"><br>';
          echo  '</div>';
        } else if ($tipo == '4') {
          echo   '<div class="bloqueimg">';
          echo '<img class="imagcs" src="../../Imagenes/combosyp/' . $f['imagenp'] . '"><br>';
          echo  '</div>';
        } else if ($tipo == '5') {
          echo   '<div class="bloqueimg">';
          echo '<img class="imagcs" src="../../Imagenes/salchipapas/' . $f['imagenp'] . '"><br>';
          echo  '</div>';
        } else if ($tipo == '6') {
          echo   '<div class="bloqueimg">';
          echo '<img class="imagcs"  src="../../Imagenes/especiales/' . $f['imagenp'] . '"><br>';
          echo  '</div>';
        } elseif ($tipo == '7') {
          echo   '<div class="bloqueimg">';
          echo '<img class="imagcs" src="../../Imagenes/ensaladas/' . $f['imagenp'] . '"><br>';
          echo  '</div>';
        }
        ?>
        <div class="detm">
          <label class="primpe2"><a class="cnm"> Nombre:</a> <?php echo utf8_encode($f['nombrep']); ?></a></label><br>
          <label class="primpe2"> <a class="cnm"> Precio : </a> S/. <?php echo $f['preciop']; ?></a></label><br>
          <label class="primpe2"> <a class="cnm">Cantidad : </a><?php echo $f['cantidadped']; ?></a></label><br>
          <label class="primpe2"> <a class="cnm"> Subtotal : </a> S/. <?php echo $f['subtotal']; ?></a></label> <br>
        </div>
      <?php } ?>
      <hr style="border:8px;border-width: 2px;width:385px; border-style: solid;">
      <hr style="border-color: black;width:385px;">
      <div class="totsubtl">
        <?php
        //$tdol=number_format($datosusuario[6]/3.55,2,'.','');

        $rea = round($conv7, 2);
        $tdol = round($datosusuario[6] / $rea, 2);
        ?>
        <label class="primpe5"> <a class="cnm"> Delivery del envío : </a>&nbsp;&nbsp; S/.&nbsp;<?php echo number_format(6.4, 2, '.', ''); ?></a></label>
        <label class="primpe3"> <a class="cnm"> Total del pedido en soles : </a>&nbsp;&nbsp;&nbsp; S/.<?php echo $datosusuario[6]; ?></a></label>
        <label class="primpe4"> <a class="cnm"> Precio del dolar actual : </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rea; ?></a> PEN</label>
        <label class="primpe4"> <a class="cnm"> Total del pedido en dólares: </a> $. <?php echo $tdol; ?></a></label>
      </div>
      <br>
      <i class="fas fa-truck"></i><br>
      <form action="../controlador/PedidoExitosoController.php?iddettpedido=<?php echo $_GET['iddettpedido'];?>&metodopago=contraentrega" method="POST">
        <input type="submit" class="pedidos" value="Pagar contraentrega">
      </form>
      <label class="o">______________________ó_____________________</label><br>
      <label class="op">Usuario : <span class="bls">sb-bhw4722863212@personal.example.com</span></label>
      <label class="op">Contraseña: <span class="bls">RMlI3yV?</span></label>
      <label class="t">Pagar con PayPal</label><br>
      <div id="paypal-button-container" class="paypals"></div>


    </div>
  </div>
  <!---BOTON IR ARRIBA---->
  <?php
  include "../complementos/btnirarriba.php";
  ?>

  <!----------------------->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript" src="../../js/jquery-1.10.2.min.js"> </script>
  <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../js/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="../../js/jquery.mixitup.min.js"></script>
  <script type="text/javascript" src="../js/gotop.js"></script>
  <script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '<?php echo $tdol; ?>'
            },
          }]
        });
      },
      onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
          if (details.status == 'COMPLETED') {
            location.href = "./pedidoexitoso.php?iddettpedido=<?php echo $_GET['iddettpedido']; ?>&metodopago=paypal";
          }
          // alert('Transaction completed by ' + details.payer.name.given_name);
        });
      }
    }).render('#paypal-button-container'); // Display payment options on your web page
  </script>

</body>

</html>