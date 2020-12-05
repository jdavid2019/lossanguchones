<?php
session_start();
$de='lossanguchoneskike@gmail.com';
$asunto='Gracias por comprar en Los Sanguchones';
$para='joseph2019d@gmail.com';
$header='MIME-Version 1.0'."\r\n";
$header.="Content-type: text/html; charset=iso-8859-1\r\n";
$header.="X-Mailer:PHP/".phpversion();

$mensaje='Esto es una prueba';

$mensaje='<html>
<head>
	<title></title>
</head>
<body>
<h1 style="color: red;">Gracias por tu compra</h1>
<h2>Total de la compra:</h2>
<h3>Detalles de la compra</h3>
<table>
	<thead>
		<tr>
			<td>Nombre del producto</td>
			<td>Precio</td>
			<td>Cantidad</td>
			<td>Subtotal</td>
		</tr>
	</thead>
	<tbody>';
	 $subtotal=0;
        $total=0;
        $del=6.4;
        $roo=0;
        $datos=$_SESSION['carrito'];
        for($i=0;$i<count($datos);$i++){
            $total=(($datos[$i]['Cantidad']*$datos[$i]['Precio']))+$total;
            $roo=$total+6.4;
          $mensaje.='<tr><td>'.$datos[$i]['Nombre'].'</td>';
          $mensaje.='<td>'.$datos[$i]['Precio'].'</td>';
          $mensaje.='<td>'.$datos[$i]['Cantidad'].'</td>';
          $mensaje.='<td>'.$datos[$i]['Precio']*$datos[$i]['Cantidad'].'</td></tr>';
        }
$mensaje.='</tbody></table>';
$mensaje.='<h4 style="color: black">$ '.$roo.'</h4>';
$mensaje.='<a href="" style="background-color: brown;color: white;padding: 10px;text-decoration: none;">
	Ver estatus del pedido
</a>';
$mensaje.='</body></html>';


if(mail($de,$asunto,$mensaje,$header)){
	echo "mensaje enviado";
}else{
	echo "error no se pudo enviar";
}

 

















