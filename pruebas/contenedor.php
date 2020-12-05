

<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
#contenedor{
   overflow: hidden;
   width: 450px;
   border: 1px solid #bbb;
   background: #ddd;
   padding: 10px;
}
#flotanteizquierda{
   float: left;
   background: #fc3;
   width: 200px;
   padding: 10px;
}
#flotantederecha{
   float: right;
   background: #3cf;
   width: 200px;
   padding: 10px;
}
</style>	
</head>
<body>
<div id="contenedor">
   <div id="flotanteizquierda">
      Esta capa tiene un float, para alinearse a la izquierda. El problema es que el contenedor de la misma no se entera que esta capa crece mucho hacia abajo y parece como si terminase en seguida.
   </div>
   <div id="flotantederecha">
      Aquí también tenemos float, para alinearse a la derecha. Pero el contenedor donde está colocada no se entera que la capa crece hacia abajo.
   </div>
</div>
</body>
</html>