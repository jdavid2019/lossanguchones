document.getElementById('telefono').addEventListener('input', function() {
  campo = event.target;
  telefono = document.getElementById('telefOK');
  nombreRegex =/(9)[0-9]{8}/ ;
  /*/^\d{9}$/*/
  if (nombreRegex.test(campo.value)) {
    telefono.innerText = "¡ Número válido !";
    telefono.style.color = "#000000";
    telefono.style.fontFamily='Fjalla One';
    campo.style.color="#100604";
  } else {
    telefono.innerText = "Número inválido";
    telefono.style.color = "#FB290D";
    telefono.style.fontFamily='Fjalla One';
    campo.style.color="#FB290D";
    return false;
  }
  });


function validarformordenpedido(){
var seleccionVariable=document.getElementById('iddistrito');
var direccion=document.getElementById('direccion').value;
var telefono=document.getElementById('telefono').value;
if(seleccionVariable.value==0){
  Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe seleccionar un distrito para continuar.</b>',
  //  icon: 'warning',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
  //   backdrop: false,
   // grow: 'column',
    timer: '500000',
   // background:'#f2dede',
    timerProgressBar : true,
    toast : true,
    position : 'center-end',
    showConfirmButton : true,
    confirmButtonColor:'#F85D03',
    confirmButtonArialLabel: 'Confirmar',
   // stopKeydownPropagation: true,
    imageUrl: '../../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
    });
    return false;
}else if(direccion == ""){
    Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe completar con una dirección de envío para continuar.</b>',
  //  icon: 'warning',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
  //   backdrop: false,
   // grow: 'column',
    timer: '500000',
   // background:'#f2dede',
    timerProgressBar : true,
    toast : true,
    position : 'center-end',
    showConfirmButton : true,
    confirmButtonColor:'#F85D03',
    confirmButtonArialLabel: 'Confirmar',
   // stopKeydownPropagation: true,
    imageUrl: '../../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
    });
    return false;
}else if(telefono ==""){
   Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe completar con un teléfono para continuar.</b>',
  //  icon: 'warning',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
  //   backdrop: false,
   // grow: 'column',
    timer: '500000',
   // background:'#f2dede',
    timerProgressBar : true,
    toast : true,
    position : 'center-end',
    showConfirmButton : true,
    confirmButtonColor:'#F85D03',
    confirmButtonArialLabel: 'Confirmar',
   // stopKeydownPropagation: true,
    imageUrl: '../../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
    });
    return false;
}
}