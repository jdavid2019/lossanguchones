<?php
function getPlantilla($pedidos){
date_default_timezone_set('America/Lima');
$fecha=date("Y-m-d"); 
$hora=date("H:i:s");  
 $enumeracion = 1;
foreach($pedidos as $pedido){  
 $plantilla='<body>
    <header class="clearfix">
      <div id="logo" style="margin-top:5px;">
        <img src="plantillapdf/Imagen/logo.png" width="138px" height="128px" >
      </div>
      <div id="company">
        <h2 class="name">Los Sanguchones de Kike</h2>
        <div>Av.Colombia # 509, Pueblo Libre</div>
        <div>Av. Aviación cuadra # 42, Surquillo</div>
        <div>(01)-6470356 ó 94106-7472</div>
        <div><a href="lossanguchonesdekike@gmail.com">lossanguchonesdekike@gmail.com</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">Comprobante para:</div>
          <h2 class="name">'.$pedido['apellidos'].' , '.$pedido['nombres'].' </h2>
          <div class="address">'.$pedido['direccionped'].', '.$pedido['distrito'].'</div>
          <div class="email"><a href="mailto:'.$pedido['correoe'].'">'.$pedido['correoe'].'</a></div>
        </div>
        <div id="invoice">
          <h1>COMPROBANTE DE PEDIDO # '.$pedido['iddetpedido'].'</h1>
          
          <div class="date">Fecha y hora del pedido: '.$pedido['fecha'].'</div> 
          <div class="date">Hora de emisión del pedido: '.$hora.'</div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">Nombre del Producto</th>
            <th class="unit">Precio</th>
            <th class="qty">Cantidad</th>
            <th class="total">Total del Producto</th>
          </tr>
        </thead>
        <tbody>';
      }
        foreach($pedidos as $pedido){
           $tipo=$pedido['tipo_id'];
           if($tipo == 1){
              $tip= "Hamburguesa clásica";
           }else if($tipo ==2){
              $tip= "Bebida";
           }else if($tipo ==3){
            $tip= "Papas Fritas";
           }else if($tipo ==4){
            $tip= "Combo y promo";
           }else if($tipo ==5){
            $tip= "Salchipapa";
           }else if($tipo ==6){
            $tip= "Hamburguesa especial";
           }else if($tipo ==7){
            $tip= "Ensalada";
           }
        $plantilla .='<tr>
            <td class="no">'.$enumeracion++.'</td>
            <td class="desc"><h3>'.utf8_encode($pedido["nombrep"]).'</h3>'.$tip.'</td>
            <td class="unit">S/.'.number_format($pedido["preciop"],2,'.','').'</td>
            <td class="qty">'.$pedido["cantidadped"].'</td>
            <td class="total">S/.'.number_format(($pedido["preciop"]*$pedido["cantidadped"]),2,'.','').'</td>
          </tr>';
            }
    foreach($pedidos as $pedido){
        $plantilla .= '</tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">Subtotal</td>
            <td>S/.'.number_format(($pedido["total"]-6.40),2,'.','').'</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">Envio delivery</td>
            <td>S/.6.40</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">Total pedido</td>
            <td>S/.'.$pedido["total"].'</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">¡Gracias por confiar en los sanguchones de Kike!</div>
      <div id="notices">
        <div>Nota:</div>
        <div class="notice">Su pedido llegará en 45 min , si surge un inconveniente lo llamaremos.</div>
      </div>
    </main>
  </body>';
    return $plantilla;
    }
}
?>