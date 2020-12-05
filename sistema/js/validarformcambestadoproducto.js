function validarformcambestadoproducto(){

var selectproducto=document.getElementById('id');
var selectdispo=document.getElementById('id_disponibilidad');


if(selectproducto.value==0){
  Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe seleccionar un producto.</b>',
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
}else if(selectdispo.value==0){
	  Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe seleccionar la disponibilidad producto.</b>',
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


function validarformeliminproducto(){

var selectproducto=document.getElementById('id');

if(selectproducto.value==0){
  Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe seleccionar un producto.</b>',
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