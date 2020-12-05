var inicio=function () {
	$(".qty").keyup(function(){
	  var qty=$(this).val();
		var precio= $(this).data('precio');
		var id= $(this).data('id');
		incrementar(cantidad,precio,id);	
	});
	$(".btnIncrementar").click(function(){
   var precio = $(this).parent('div').find('.qty').data('precio');
   var id = $(this).parent('div').find('.qty').data('id');
   var cantidad = $(this).parent('div').find('.qty').val();
   incrementar(cantidad,precio,id);
	});
		function incrementar(cantidad,precio,id){
		var mult= parseFloat(cantidad)* parseFloat(precio);
		$(".cant"+id).text("Subtotal: S/. "+mult);
         $.ajax({
         	method: 'POST',
         	url:'../controlador/actuaproductoController.php',
         	data:{
         		Id:id,
         		Precio:precio,
			    Cantidad:cantidad
         	}
         }).done(function(respuesta){
         $("#total").text('S/. '+respuesta);
         
         });

}


	$(".eliminado").click(function(e){
		e.preventDefault();
		var id=$(this).attr('data-id');
		$(this).parentsUntil('producto').remove();
		$.post('../controlador/eliminarprodlistaController.php',{
			Id:id
		},function(a){
			
		   location.href="./carritodecompras.php";	
		});
});

	$("#formulario").submit(function(evento){
		//alert("se omitio el evento");
		$.get('./compras/compras.php',function(e){
			alert("");
		}).fail(function (){
			evento.preventDefault();	
		});
	});
	
}
$(document).on('ready',inicio);