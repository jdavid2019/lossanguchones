<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="pedidoexitoso.php" method="post">
<label>Nombres</label><br>
<input type="text" name="nombre" value="<?php echo ucwords($userr); ?>" disabled><br>
<label>Apellidos</label><br>
<input type="text" name="apellidos" value="<?php echo ucwords($apellidos); ?>" disabled><br>
<label>Seleccione el distrito para realizar el envio</label><br>
<select type="text" name="iddistrito" id="iddistrito">
 <option value="">--Distritos disponibles--</option>
   <?php
     include '../controlador/MostrardistritoController.php';

   ?>	
  </select> <br>
<label>Escriba la dirección de envio</label><br>
 <input type="text" name="direccion"> <br>
 <label>Correo electrónico</label><br>
 <input type="text" name="correo" value="<?php echo $correoelec; ?>" disabled> <br>
 <label>Escriba un teléfono para contacto</label><br>
 <input type="text" name="telefono" > <br>

<table class="table site-block-order-table mb-5">
                    <thead>
                      <th  bgcolor="#F85D03" style="color:white;">Producto & Cantidad</th>
                      <th bgcolor="#F85D03" style="color:white;">Total</th>
                    </thead>
                    <tbody>
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
                        <td><b><?php echo $datos[$i]['Nombre'] ; ?><strong class="mx-2">x</strong><?php  echo $datos[$i]['Cantidad']; ?></b></td>
                    <!--   <td>S/.<?php echo $total ; ?></td>-->
                       <td><b>S/. <?php echo number_format($subtotal, 2, '.', ''); ?></b></td>

                      </tr>
                      
                      <?php 
  }
                       ?>
  <tr>
                        <td><b>Delivery ( Pago único )<b></td>
                       <td><b>S/. <?php echo $del; ?>0<b></td>
                      </tr>

                       <tr>
                        <td><b>Total de orden</b></td>
                     <!--  <td id="total">S/.<?php echo $roo ; ?>0</td>-->
                        <td id="total"><b>S/. <?php echo $roo ?>0</b></td>
                        <!--<td id="total">S/.<?php echo number_format($roo,2,'.','') ?></td>-->
                      </tr>
                    </tbody>
                  </table>

                  <center>  <input  type="submit"  class="pedidos" value="Realizar Pedido"></center>

              </form>
</body>
</html>