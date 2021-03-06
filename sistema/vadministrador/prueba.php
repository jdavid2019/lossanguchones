<?php

    session_start();
      if(!isset($_SESSION['rol'])){
        header('location: ../index.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: ../index.php');
        }
        }
    ?>
<?php
//isset determina si esta variable esta definida
    if(isset($_SESSION['nombres'])){
     $nombres=$_SESSION['nombres'];
    }
?>


<?php
 include_once '../controlador/VerpedidoAdminController.php';
?>
<html>
  <head>
        <meta name="description" content="Los Sanguchones de Kike , tu mejor opción de pedidos" />
        <meta charset="UTF-8">
        <title>Ver pedidos</title>
        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../css/sismain.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../css/menu3.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/jquery-ui.css">
        <link rel="stylesheet" href="../../css/fontawesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
       <link rel="icon" href="../../Imagenes/icoprincipal.png" type="image/x-icon">
       <!--lo que compete al formulario--> 
       <link rel="stylesheet" type="text/css" href="../css/verpedidos.css">
   </head>
<?php 
include "../complementos/navadmin.php";
 ?>
<?php
include '../complementos/menu3.php';
 ?>

<div class="div-main">
    
<h1 class="all">PEDIDOS SOLICITADOS - PENDIENTES & REALIZADOS</h1>

<img src="../../Imagenes/callhamburguer.png" class="imcambiar" width="300" height="300">
<?php
 while ($fila=mysqli_fetch_array($verp)) {
  
$iddetpedido=$fila['iddettpedido'];
?>

<button class="collapsible">Pedido número <?php echo $fila['iddettpedido']?>&nbsp;&nbsp; - &nbsp;&nbsp;Fecha y hora de realización: <?php echo $fila['fecha']?> </button>

<div class="content">
  <label class="all2"> Datos generales del cliente y pedido realizado </label><br><br>
  <p class="descrip">
   <label class="green">➣ Nombres y Apellidos del cliente </label> : <?php echo ucfirst($fila['nombres']).'&nbsp;'.ucfirst($fila['apellidos'])?> <br>
   <label class="green">➣ Correo del cliente </label> : <?php echo $fila['correoe'] ?><br>
   <label class="green">➣ Teléfono del cliente </label> : <?php echo $fila['telefcontactoped'] ?><br>
   <label class="green">➣ Dirección del pedido </label> : <?php echo $fila['direccionped'] ?><br>
    <label class="green">➣ Distrito de entrega </label> : <?php echo $fila['distrito'] ?><br>
    <label class="green">➣ Estado del pedido </label> : <?php  if($fila['id_status']=='1'){
      echo 'Pendiente';
      echo'<br>';
      echo '<label class="green">➣ Cambiar estado</label><div class="seleccion">';
      echo '<form action="../controlador/CambiarstatusController.php?iddettpedido='.$iddetpedido.'" method="POST">';
      echo'<select class="select-css" name="id_status">';
       include '../controlador/MostrarStatuspedController.php';
      echo'</select>';
      echo '<input type="submit"  class="pedidos" value="Cambiar estado del pedido">';
      echo '</div>';
      echo '</form>';
    }else{
     echo 'Realizado';
    } ?><br>
    <br>
    <label class="all3">Pedido/s que realizó </label>
   <?php
   include '../controlador/VerpedidoProController.php';
   while ($f = mysqli_fetch_array($datosproductos)) {
    ?>
     <?php
    $tipo=$f['tipo_id'];
    if($tipo =='1'){
    echo '<div class="left">';  
    echo   '<div  class="bloqueimg">';
    echo '<img class="imagcs" src="../../Imagenes/clasicas/'.$f['imagenp'].'"><br>';
    echo  '</div>';
    }else if($tipo=='2'){
      echo '<div class="left">'; 
      echo   '<div class="bloqueimg">';
    echo '<img class="imagcs" src="../../Imagenes/bebidas/'.$f['imagenp'].'"><br>'; 
    echo  '</div>'; 
    }else if($tipo=='3'){
      echo '<div class="left">'; 
       echo   '<div class="bloqueimg">';
    echo '<img class="imagcs" src="../../Imagenes/papas/'.$f['imagenp'].'"><br>'; 
    echo  '</div>';    
    }else if($tipo=='4'){
      echo '<div class="left">'; 
       echo   '<div class="bloqueimg">';
    echo '<img class="imagcs" src="../../Imagenes/combosyp/'.$f['imagenp'].'"><br>';
    echo  '</div>';  
    }else if($tipo=='5'){
      echo '<div class="left">'; 
    echo   '<div class="bloqueimg">';
    echo '<img class="imagcs" src="../../Imagenes/salchipapas/'.$f['imagenp'].'"><br>';
    echo  '</div>';  
    }else if($tipo=='6'){
      echo '<div class="left">'; 
    echo   '<div class="bloqueimg">';
    echo '<img class="imagcs"  src="../../Imagenes/especiales/'.$f['imagenp'].'"><br>'; 
    echo  '</div>'; 
    }elseif ($tipo=='7') {
      echo '<div class="left">'; 
    echo   '<div class="bloqueimg">';
    echo '<img class="imagcs" src="../../Imagenes/ensaladas/'.$f['imagenp'].'"><br>';
    echo  '</div>';   
    }
    ?>
  </div>
  <div class="right">
     <div class="detm">
          <label class="primpez"><a class="cnm">• Nombre : </a> <?php echo utf8_encode($f['nombrep']);?></a></label><br>
          <label class="primpe2">   <a class="cnm">• Precio :  </a>  S/. <?php echo $f['preciop'];?></a></label><br> 
          <label class="primpe2">  <a class="cnm">• Cantidad : </a><?php echo $f['cantidadped'];?></a></label><br> 
          <label class="primpe2">  <a class="cnm">• Subtotal :  </a> S/. <?php echo $f['subtotal'];?></a></label><br> 
    </div>
       <hr style="border:10px;width:490px;border-width: 3px;border-color: #F85D03; border-style: solid;">
    </div>
  <?php } ?>
     <container class="ache">
      <label class="primpe4">   <a class="cnm2">➣ Delivery del envío :  </a>  S/. 0<?php echo number_format(6.4,2,'.','');?></label> &nbsp;
      <label class="primpe5">   <a class="cnm2">➣ Total del pedido :  </a>  S/. <?php echo $fila['total']; ?></label>
      </container><br>
        <label class="all4">Detalles del pago </label>
        <?php 
         include '../controlador/VerDatosPagoController.php';
         while ($fg = mysqli_fetch_array($datospago)) {
         ?>
<label class="green3">➣ Método de pago</label> :<b class="metod"> <?php echo ucwords ($fg['metodo_pago']) ?></b><br>
    <label class="green3">➣ Estado del pago </label> :<b class="metod"> 
     <?php  if ($fg['estado']=='cancelado'){
      echo '<i class="far fa-thumbs-up"></i>&nbsp;';
      echo ucwords ($fg['estado']);'<br></b><br>';
     } else{

          echo '<i class="fas fa-exclamation-triangle"></i>&nbsp;';
          echo ucwords ($fg['estado']);'<br></b><br>';
           echo '<label class="green4"><b class="asterisco">(*)</b> En este caso el cliente se comprometió a pagar ni bien se le entregue el pedido que solicitó.</label>';
        }
      ?>

       <?php } ?>
  </p>
</div>
<?php } ?>
<?php 
    if(isset($_SESSION['alerta1'])){
              include_once '../complementos/alertas/estadopedidoactualizado.php'; 
            }elseif (isset($_SESSION['alerta2'])) {
              echo "No se puede actualizar";
            }

 ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript" src="../../js/jquery-1.10.2.min.js"> </script>
<script type="text/javascript" src="../js/collapsible.js" ></script>
</body>
</html>   