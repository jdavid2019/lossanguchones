$('#verterminos').click(function() {
   Swal.fire({
  title: '<a class="tyc">Términos y condiciones<br> "Los Sanguchones de Kike"</a>',
   width: 600,
  html: '<p class="indicador">1. Los pedidos solo podrán ser correspondidos a las personas pque viven solo en Surquillo y Pueblo Libre.</p><p class="indicador">2. Los Horarios de atención son de Lunes a Sábado de 12:00pm a 8:30pm, cualquier cambio de horario se avisará con algún determinado tiempo por este medio web. </p><p class="indicador">3. Los pagos del pedido que se realice puede efectuarse con PayPal o contraentrega.</p><p class="indicador">4. Para continuar con la orden del pedido debe de estar de acuerdo con los términos y condiciones leídos.</p>',
  imageUrl: '../../Imagenes/icoprincipal.png',
  imageWidth: 130,
  imageHeight: 150,
  allowOutsideClick: false,
  confirmButtonColor: '#F85D03',
  confirmButtonText: '<a class="entendido2">Entendido</a>'
});
 });