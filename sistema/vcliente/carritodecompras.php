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
<?php
include "../controlador/CarritoproductoController.php";

?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="../css/gotop.css" media="screen" type="text/css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../css/sismain.css" media="screen" type="text/css">
    <link rel="stylesheet" href="../css/cajaproducto.css" media="screen" type="text/css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../css/fontawesome/css/all.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="../js/funcarritos.js" ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="../../Imagenes/icoprincipal.png" type="image/x-icon">
    </head>
<body oncontextmenu="return false">
    <?php 
      include "../complementos/navcli.php";
     ?> 
    <?php 
      include "../complementos/bannerprincipal.php";
    ?> 
<section class="seccion">
  <h1 class="titulocarrito">PRODUCTOS ELEGIDOS PARA EL CARRITO</h1>
  <?php
      $punta=6.4;
      $total=0;
      $envio=0;
      $code=6.4;    
    if(isset($_SESSION['carrito'])){
        $datos=$_SESSION['carrito'];
        $total=0;
        $envio=0;
        $punta=6.4;
    for($i=0;$i<count($datos);$i++){
  ?>
    <div class="producto">
      <center>
      <?php
          $tipos="";
          $tipos=$datos[$i]['Tipo'];
          if($tipos ==utf8_decode('Hamburguesas clásicas')){
          echo '<img class="imagcarrito" src="../../Imagenes/clasicas/'.$datos[$i]['Imagen'].'"><br>';
          }else if($tipos=='Bebidas'){
          echo '<img class="imagcarrito" src="../../Imagenes/bebidas/'.$datos[$i]['Imagen'].'"><br>'; 
          }else if($tipos=='Papas fritas'){
          echo '<img class="imagcarrito" src="../../Imagenes/papas/'.$datos[$i]['Imagen'].'"><br>'; 
          }else if($tipos=='Combos y promos'){
          echo '<img class="imagcarrito" src="../../Imagenes/combosyp/'.$datos[$i]['Imagen'].'"><br>';
          }else if($tipos=='Salchipapas'){
          echo '<img class="imagcarrito" src="../../Imagenes/salchipapas/'.$datos[$i]['Imagen'].'"><br>';  
          }else if($tipos=='Hamburguesas especiales'){
          echo '<img class="imagcarrito"  src="../../Imagenes/especiales/'.$datos[$i]['Imagen'].'"><br>'; 
          }elseif ($tipos=='Ensaladas') {
          echo '<img class="imagcarrito" src="../../Imagenes/ensaladas/'.$datos[$i]['Imagen'].'"><br>';   
          }
          ?>
      <br>
      <div class="datcarriton"><?php echo utf8_encode($datos[$i]['Nombre']);?></div><br>
      <div class="datcarrito">Precio: <a class="datose">S/. <?php echo $datos[$i]['Precio'];?></a></div><br>
      <div class="datcarrito">Cantidad:<br>
          <div class="bundle-qty">
              <input type="button" value="-" class="qty-minus btnIncrementar">
              <input  type="text" value="<?php echo $datos[$i]['Cantidad'];?>" 
              data-precio="<?php echo $datos[$i]['Precio'];?>"
              data-id="<?php echo $datos[$i]['Id'];?>" 
              min="1" max="5"  name="qty" class="qty" readonly="readonly">
              <input type="button" value="+" class="qty-plus btnIncrementar" >
          </div>
      </div>
      <br>
      <div class="cant<?php echo $datos[$i]['Id'];?>" style="margin-bottom: 10px;">
          <span class="subtotal">Subtotal: S/. <?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br><br>
          </div>
          <a href="#" class="eliminado" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>
          <input type="hidden" name="envio" value="6.4">
    </center>
    </div>
      <?php
        $total=(($datos[$i]['Cantidad']*$datos[$i]['Precio']))+$total;
        $roo=$total+6.4;
      }
      }else{
          echo '<img class="sinproductos" src="../../Imagenes/sinproductos.png" width="200px" height="200px">';
          echo '<center><h2 class="ceroproductos">¡ No has añadido ningun producto !</h2></center>';
          $roo=0;
          echo '<center><h2 id="total" class="totcero">Total de la compra : S/. '.$roo.'</h2></center>';
      }
      if($total!=0){
      ?>
      <section>
        <div class="seeterms"> 
            <input type="submit" id="verterminos" class="seeterms2"  value="Ver términos y condiciones del pedido"/> 
        </div>
        <div class="deacuerdo">
            <label class="contenidoch"><b class="bv">Estoy de acuerdo con los términos y condiciones del pedido</b>
            <input type="checkbox" id="presionar" onchange="javascript:mostrarContenido()" >
            <span class="checkmark" ></span>
            </label>  
        </div>
      </section>      
      <section id="partedet" style="display: none;">
      <center>
          <h1  class="titulodetcarrito">Detalles de total del pedido a especificar </h1><section class="adicional">
              <h3  class="h3adicional">Adicional + Subtotal = Total del pedido</h3>
              <div class="indicacionesadicional">  
                  <div class="contendeli">
                    <span  class="endeli">Envio por delivery</span><br>
                    <div class="atend">
                    <?php
                      echo'<strong class="moneys" > S/. '.$code.'0</strong>';
                    ?>
                    </div>
                  </div>
                  <div></div>        
              <div class="contendeli">
                    <span class="endeli">Total de la compra</span><br>
                    <div class="atend">
                    <?php
                      echo'<strong id="total" class="moneys" > S/. '.$roo.'0</strong>';
                    ?>
                    </div>
              </div>  
              </div>
          </section>
      </center>
      <a href="./ordenpedido.php" class="proconorden" >Proceder con la orden</a>
      </section>
      <?php
      }
      ?>
      <div class="volver"> 
        <a href="./cliente.php" class="redireccioncliente" >Redirigirse al catálogo de Hamburguesas</a>
        <br>
      </div>
        <p class="content2">(*) Usted prodrá proceder con la orden del pedido siempre y cuando este de acuerdo con los términos y condiciones de lo contrario no podrá realizar su pedido satisfactoriamente.</p>
        <br>
      </section>
<!---SECCION FOOTER---->
      <?php
        include "../complementos/footer.php";
      ?>
        <!----------------------->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 <script type="text/javascript" src="../../js/jquery-1.10.2.min.js"> </script>
 <script type="text/javascript" src="../../js/bootstrap.min.js" ></script>
 <script type="text/javascript" src="../../js/jquery-1.10.2.js"></script>     
 <script type="text/javascript" src="../../js/jquery.mixitup.min.js" ></script>
 <script type="text/javascript" src="../js/sumrestpro.js" ></script>
 <script type="text/javascript" src="../js/condicionespago.js" ></script>
 <script type="text/javascript" src="../../js/activar.js" ></script>

</body>
</html>