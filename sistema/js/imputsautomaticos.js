$(document).ready(function(){
    $('#listProducto').val(0);
      recargarLista();
	$('#listProducto').change(function(){
   recargarLista();
});
});

function recargarLista(){
	$.ajax({
       type:"POST",
       url:"../controlador/datosController.php",
       data:"producto="+$('#listProducto').val(),
       success:function(r){
       	$('#listResultado').html(r);
       } 
	});
}	
   