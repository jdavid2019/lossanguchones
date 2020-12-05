<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>combo dinamico</title>
</head>
<script type="text/javascript" src="../js/jquery-1.10.2.min.js"> </script>
<link rel="stylesheet" href="../sistema/css/selectimagenprod.css">
<body>
<form action="prueba22.php" method="POST" onsubmit="return validarformactualizarproducto();" enctype="multipart/form-data">
<select id="listProducto" name="listProducto">
<option value="0">Elija una opcion</option>	
<?php
include '../sistema/util/Conexion.php';
$sql="SELECT * FROM PRODUCTO";
$rs=Conexion::obtenerInstancia();
$resultado=mysqli_query($rs,$sql);
while ( $fila=$resultado->fetch_array()) {
echo "<option value='".$fila['id']."'>".utf8_encode($fila['nombrep'])."</option>";
}
?>
</select>
<br>
<div class="photo" >
  <label for="foto" class="fphoto">Foto del producto</label>
        <div class="prevPhoto">
        <span class="delPhoto notBlock">X</span>
        <label for="foto" class="cuadro"></label>
        </div>
        <div class="upimg">
        <input type="file" name="file" id="foto">
        </div>
        <div id="form_alert"></div>
</div>
<div id="listResultado">
</div>
<br>
<input type="submit"  class="botregis" value="Actualizar Producto">
<?php 
            if(isset($_SESSION['alerta'])){
              include 'sinseleccion.php';
            }
            ?>
</form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript" src="../sistema/js/selecproducto.js" ></script>
<script type="text/javascript" src="../sistema/js/validarformactualizarproducto.js" ></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
    $('#listProducto').val(0);
      recargarLista();
	$('#listProducto').change(function(){
   recargarLista();
});
});
</script>

<script type="text/javascript">
function recargarLista(){
	$.ajax({
       type:"POST",
       url:"datos.php",
       data:"producto="+$('#listProducto').val(),
       success:function(r){
       	$('#listResultado').html(r);
       } 
	});
}	



</script>