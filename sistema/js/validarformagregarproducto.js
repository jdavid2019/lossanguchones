function validarformagregarproducto(){
var nombrep=document.getElementById('nombrep').value;
var descripcionp=document.getElementById('descripcionp').value;
var foto=document.getElementById('foto').value;
var seleccionVariable=document.getElementById('tipo_id');
var preciop=document.getElementById('preciop').value;
if(nombrep == ""){
    Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe completar el nombre del producto para continuar.</b>',
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
}else if(descripcionp == ""){
    Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe completar una descripción para continuar.</b>',
  //  icon: 'warning',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
  //   backdrop: false,
   // grow: 'column',
    timer: '500000',
   // background:'#f2dede',
    timerProgressBar : true,
    toast : true,
    position : 'top-end',
    showConfirmButton : true,
    confirmButtonColor:'#F85D03',
    confirmButtonArialLabel: 'Confirmar',
   // stopKeydownPropagation: true,
    imageUrl: '../../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
    });
    return false;
}else if(foto == ""){
 Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Colocar una foto para continuar.</b>',
  //  icon: 'warning',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
  //   backdrop: false,
   // grow: 'column',
    timer: '500000',
   // background:'#f2dede',
    timerProgressBar : true,
    toast : true,
    position : 'top-end',
    showConfirmButton : true,
    confirmButtonColor:'#F85D03',
    confirmButtonArialLabel: 'Confirmar',
   // stopKeydownPropagation: true,
    imageUrl: '../../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
    });
    return false;
}else if(seleccionVariable.value==0){
  Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe seleccionar un tipo de  producto.</b>',
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
}else if(preciop == ""){
Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe ingresar el precio de  producto.</b>',
  //  icon: 'warning',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
  //   backdrop: false,
   // grow: 'column',
    timer: '500000',
   // background:'#f2dede',
    timerProgressBar : true,
    toast : true,
    position : 'top-end',
    showConfirmButton : true,
    confirmButtonColor:'#F85D03',
    confirmButtonArialLabel: 'Confirmar',
   // stopKeydownPropagation: true,
    imageUrl: '../../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
    });
    return false;

}else if(preciop == 0){
Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">El precio no debe ser igual a 0.</b>',
  //  icon: 'warning',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
  //   backdrop: false,
   // grow: 'column',
    timer: '500000',
   // background:'#f2dede',
    timerProgressBar : true,
    toast : true,
    position : 'top-end',
    showConfirmButton : true,
    confirmButtonColor:'#F85D03',
    confirmButtonArialLabel: 'Confirmar',
   // stopKeydownPropagation: true,
    imageUrl: '../../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
    });
    return false; 
}else if(preciop < 0){
Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">El precio no debe ser negativo.</b>',
  //  icon: 'warning',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
  //   backdrop: false,
   // grow: 'column',
    timer: '500000',
   // background:'#f2dede',
    timerProgressBar : true,
    toast : true,
    position : 'top-end',
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