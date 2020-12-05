<?php 
$distri="";

if($iddistritoped== '1'){
  $distri="Surquillo";
}elseif ($iddistritoped =='2') {
  $distri="Pueblo Libre";
}

$delivery=6.40;
$tabla='<table>
	  <thead>
      <tr>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Subtotal</th>
      </tr> </thead>';
      for($i=0;$i<count($datos);$i++){
      $tabla=$tabla.'<tody><tr>
        <td>'.$datos[$i]['Nombre'].'</td>
        <td> S/. '.$datos[$i]['Precio'].'</td>
        <td>'.$datos[$i]['Cantidad'].'</td>
        <td>s/. '.number_format($datos[$i]['Cantidad']*$datos[$i]['Precio'],2,'.','').'</td>
        </tr></tbody>
      ';
  }
 	$tabla=$tabla.'</table>';
    $fecha=date("d-m-Y");
    $hora=date("H:i:s");
    $asunto="Tu orden virtual en los Sanguchones de Kike";
    $desde="";
    $email="$correoelec";
    $comentario='
    <center >
    <div style="
        border:1px solid #d6d2d2;
        border-radius:5px;
        padding:30px;
        width:900px;
        heigth:300px;
      ">
      <center>
        <img  style="border-radius:12px;" src="https://newses.cgtn.com/v/BfIcA-CEA-FEA/EaGAccA/EaGAccA.jpg" width="850px" heigth="600px">
        <div>
        <h1 "font-family:Arial Black;"><strong style="color:black;"> Muchas gracias solicitar tu pedido en el carrito online de nuestra plataforma " Los Sanguchones de Kike " </strong></h1> 
        </div>
      </center>
      <p>Hola '.ucwords($userr).' '.ucwords($apellidos).', muchas gracias por solicitar tu orden, aquí te enviamos los detalles de tu pedido que se enviarán a la siguiente dirección que nos proporcionaste: <strong> '.$direccionped.'</strong> ubicado en el distrito de <strong> '.$distri.'.</strong></p>
      <p style="color: black;">Lista de tu orden<br>
        '.$tabla.'
        <br>
     <strong style="color:black;">El pago único del precio de delivery es de : S/. '.number_format($delivery,2,'.','').' <br> </strong>
      <strong style="color:black;">  El total del pago de tu orden es: S/. '.number_format($roo,2,'.','').'
      </strong>
      <br>
      

      </p>
      <p>
      (*) El pago  de tu orden se efectuará cuando estemos en la dirección que proporcionaste pero si en caso pagaste con tu cuenta PayPal ignora el siguiente mensaje , Muchas gracias. 
      </p>
      </div>
 </center>
    ';
      //echo $comentario;
    $headers="MIME-Version: 1.0\r\n";
    $headers.="Content-type: text/html; charset=utf8\r\n";
    $headers.="From: Remitente\r\n";
    mail($email,$asunto,$comentario,$headers);
 ?>

 <!--<p>
       <a href="http://localhost/2020basic/carrito2hd/carrito2/sistema/vcliente/verpedido.php?iddettpedido='.$iddettpedido.'"  style="background-color: #F85D03;font-family:Arial Black; border-radius: 12px; color: white;padding: 10px;text-decoration: none;">Ver el estado del pedido solicitado</a>
       </p> -->