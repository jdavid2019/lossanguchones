
 <?php
include '../util/Conexion.php';
  //significa si existe la variable de session carrito
  if(isset($_SESSION['carrito'])){
    if(isset($_GET['id'])){
          $arreglo=$_SESSION['carrito'];
          $encontro=false;
          $numero=0;

          for($i=0;$i<count($arreglo);$i++){
            if($arreglo[$i]['Id']==$_GET['id']){
              $encontro=true;
              $numero=$i;
            }
          }
          if($encontro==true){
            $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
            $_SESSION['carrito']=$arreglo;
          }else{
            $nombre="";
            $precio=0;
            $imagen="";
            $tipo="";
            $rs=Conexion::obtenerInstancia();
            $re=mysqli_query($rs,"select producto.*,tipo_producto.tipo from producto inner join tipo_producto on producto.tipo_id=tipo_producto.id_tipo where id=".$_GET['id']);
            while ($f=mysqli_fetch_array($re)) {
              $nombre=$f['nombrep'];
              $precio=$f['preciop'];
              $imagen=$f['imagenp'];
              $tipo=$f['tipo'];
            }
            $datosNuevos=array('Id'=>$_GET['id'],
                    'Nombre'=>$nombre,
                    'Precio'=>$precio,
                    'Imagen'=>$imagen,
                    'Tipo'=>$tipo,
                    'Cantidad'=>1);

            array_push($arreglo, $datosNuevos);
            $_SESSION['carrito']=$arreglo;

          }
    }
  }else{
    if(isset($_GET['id'])){
      $nombre="";
      $precio=0;
      $imagen="";
      $tipo="";
      $rs=Conexion::obtenerInstancia();
      $re=mysqli_query($rs,"select producto.*,tipo_producto.tipo from producto inner join tipo_producto on producto.tipo_id=tipo_producto.id_tipo where id=".$_GET['id']);
      while ($f=mysqli_fetch_array($re)) {
        $nombre=$f['nombrep'];
        $precio=$f['preciop'];
        $imagen=$f['imagenp'];
        $tipo=$f['tipo'];
      }
      $arreglo[]=array('Id'=>$_GET['id'],
              'Nombre'=>$nombre,
              'Precio'=>$precio,
              'Imagen'=>$imagen,
              'Tipo'=>$tipo,
              'Cantidad'=>1);
      $_SESSION['carrito']=$arreglo;
    }
  }

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

<section>
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
    echo   '<div  class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/clasicas/'.$datos[$i]['Imagen'].'"><br>';
    echo  '</div>';
    }else if($tipos=='Bebidas'){
      echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/bebidas/'.$datos[$i]['Imagen'].'"><br>'; 
    echo  '</div>'; 
    }else if($tipos=='Papas fritas'){
       echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/papas/'.$datos[$i]['Imagen'].'"><br>'; 
    echo  '</div>';    
    }else if($tipos=='Combos y promos'){
       echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/combosyp/'.$datos[$i]['Imagen'].'"><br>';
    echo  '</div>';  
    }else if($tipos=='Salchipapas'){
    echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/salchipapas/'.$datos[$i]['Imagen'].'"><br>';
    echo  '</div>';  
    }else if($tipos=='Hamburguesas especiales'){
    echo   '<div class="bloqueimg">';
    echo '<img class="imagc"  src="../../Imagenes/especiales/'.$datos[$i]['Imagen'].'"><br>'; 
    echo  '</div>'; 
    }elseif ($tipos=='Ensaladas') {
    echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/ensaladas/'.$datos[$i]['Imagen'].'"><br>';
    echo  '</div>';   
    }
    ?><br>
            <span ><?php echo utf8_encode($datos[$i]['Nombre']);?></span><br>
            <span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
            
            <span>Cantidad: 
              <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
              data-precio="<?php echo $datos[$i]['Precio'];?>"
              data-id="<?php echo $datos[$i]['Id'];?>" class="cantidad" 
              onKeyPress="return soloNumeros(event)" maxlength="1" placeholder="1-6">
            </span><br>
            <span class="subtotal">Subtotal: S/. <?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br><br>
            <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>
            <input type="hidden" name="envio" value="6.4">
          </center>
        </div>
      <?php
             
        $total=(($datos[$i]['Cantidad']*$datos[$i]['Precio']))+$total;
$roo=$total+6.4;
      }
        
      }else{
        echo '<center><h2>No has añadido ningun producto</h2></center>';
        $roo=0;
        echo '<center><h2 id="total">Total de la compra S/. '.$roo.'</h2></center>';
      }

      
      if($total!=0){
      
      ?>

           
 <hr style="border:10px;"><hr style="border-color: transparent;">
          <center>
  <h1  class="index">Detalles de la orden </h1>         
 <div class="div1">
                
                  <div class="tru" >
                    <h3  class="do">Adicional + Total orden</h3>
                    
                  </div>
               <hr style="border:20px;"><hr style=" border-color: white;">
                <div >
                  <br>
                  <div >
                    <span  class="sp">Envio por delivery</span>
                  </div>
                  <div >
                 <?php
echo'<strong > S/. '.$code.'0</strong>';
                 ?>
                  </div>
                </div>
                  <div>
                    <span class="sp">Total de la compra</span>
                  </div>
                  <div >
                  <?php
echo'<strong id="total" > S/. '.$roo.'0</strong>';
                 ?>
                  </div>
                  <br>
                  <div>
                    <center><input type="submit" id="myBtn" class="aceptar"  value="Términos y condiciones de pago" style="width:400px"/> 
                </div>
                <div>
                  <label class="container"><b>He leído  los terminos y condiciones<b>
          <input type="checkbox" onClick="activar()" >
         <span class="checkmark"></span>
        </label>  

                </div>
            </div>

           
</center>



      <!-- The Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
    <center>  <h2>Terminos y condiciones de la orden por delivery</h2></center>
    </div>
    <div class="modal-body">
      <p >1. El servicio de delivery se brinda respecto de aquellos pedidos efectuados por los Clientes a través de las siguientes vías: (i) vía telefónica o (ii) vía online, realizando el pedido a través de la web (tienda virtual web).</p>
      <p>2. El pedido viene con salsas. Las salsas con las que contamos son mayonesa, ají, BBQ y aliño dulce o salado y serán enviadas junto con tu pedido, de conformidad con la disponibilidad de sabores de cada</p>
      <p>3. Se podrá ingresar un pedido de un rango de 1-5 producto  o productos de lo contrario
      si desea ingresar un número mayor a ese rango el sistema no le permitira ingresarlo</p>
      <p>4. El horario de atención por delivery se da desde las 2 pm hasta las 10 pm</p>
    <p>5. El pago se realizará en el momento que nuestro repartidor llegue a su domicilio</p>
    <p>6. Se procederá con la solicitud del pago siempre y cuando acepte los terminos y condiciones de lo contrario no se podrá continuar con el pago.</p>
    <p>7. Una vez que le de continuar con el pago debe proporcionar sus datos personales para que se realice con éxito la compra.</p>
  </div>
<br>
    <div class="modal-footer">

     <center><h3>Los Sanguchones de Kike</h3></center> 
    </div>
  </div>

</div>


<br>

<form action="./checkout.php" method="post" id="formulario">
          <?php 
            for($i=0;$i<count($datos);$i++){
          ?>
            <input  type="hidden" name="item_name_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Nombre'];?>">
            <input type="hidden" name="amount_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Precio'];?>">
            <input  type="hidden" name="quantity_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Cantidad'];?>">  
          <?php 
            }
          ?>
          <div class="timess">
<center><b><input type="submit" id="more"  class="aceptar"  value="Proceder con la orden"  disabled="true" style="width:450px"></b></center>
      </form>
<script type="text/javascript"  src="./js/modals.js"></script>
<script type="text/javascript"  src="./js/activar.js"></script>
      <?php
      }
      ?>
      <div class="volver"> 
  <center><a href="./cliente.php" class="aceptar4" >Redirigirse al catálogo de Hamburguesas</a></center>
  <br>
    <p class="content2">(*) Usted prodrá proceder con la orden siempre y cuando este de acuerdo
        con los terminos y condiciones de lo contrario no podrá realizar la orden.</p>
      </div>
      <br>
      <div>
        
      
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
                    <span class="social_info">

                        <a class="color_animation" href="#">
                        &nbsp;&nbsp;<i class="fas fa-phone-volume"> </i> (01)-515 877 
                        </a> 
                        
                        <a class="color_animation" href="#">
                        &nbsp; <i class="fas fa-mobile"></i>&nbsp;   98540-0951 
                        </a>

                    </span>   
                </div> 
            </div>
 
</section>
<!-- ============ Fin información social ============= -->
<!-- ============ Footer complemento ============= -->
  <footer class="sub_footer">
            <div class="container">
                <div class="col-md-2"><p class="sub-footer-text text-center"></p></div>
                <div class="col-md-8"><p class="sub-footer-text text-center">Los Sanguchones de Kike ® - Desarrollado por Joseph David 🖥️</a></p>
                </div>
            </div>
  </footer>
  <script type="text/javascript" src="../../js/jquery-1.10.2.min.js"> </script>
  <script type="text/javascript" src="../../js/bootstrap.min.js" ></script>
  <script type="text/javascript" src="../../js/jquery-1.10.2.js"></script>     
  <script type="text/javascript" src="../../js/jquery.mixitup.min.js" ></script>
</body>
</html>