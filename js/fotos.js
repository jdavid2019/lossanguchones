$('.white').click(function() {
     Swal.fire({
  title: '<a class="decision">¿Desea realizar un pedido?</a>',
  html: '<p class="decision1">Para realizar un pedido en específico necesitará iniciar sesión o registrarse previamente en la plataforma web.<br><br><a class="decision2">¿Desea registrarse o iniciar sesión para continuar?</a></p>',
  imageUrl: 'Imagenes/icoprincipal.png',
  imageWidth: 130,
  imageHeight: 150,
  allowOutsideClick: false,
  showCancelButton: true,
  confirmButtonColor: '#F85D03',
  cancelButtonColor: '#d33',
  cancelButtonText: 'No, solo deseo ver',
  confirmButtonText: '<a class="aceptar" href="sistema/index.php">Si, deseo hacerlo</a>'
});
 });