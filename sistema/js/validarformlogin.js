function validarformlogin(){
	var correoe,password;
	correoe=document.getElementById("correoe").value;
	password=document.getElementById("password").value;
  if(correoe == "" && password == ""){
Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe completar campos.</b>',
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
    imageUrl: '../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
    });
    return false;
  }else if(correoe == ""){
	Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe completar el campo correo para continuar.</b>',
  //  icon: 'warning',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
  //   backdrop: false,
   // grow: 'column',
    timer: '500000',
    //background:'#f2dede',
    timerProgressBar : true,
    toast : true,
    position : 'center-end',
    showConfirmButton : true,
    confirmButtonColor:'#F85D03',
    confirmButtonArialLabel: 'Confirmar',
   // stopKeydownPropagation: true,
    imageUrl: '../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
    });
    return false;
	}else if(password == ""){
	Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe completar el campo contraseña para continuar.</b>',
  //  icon: 'warning',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
   //  backdrop: false,
    // grow: 'column',
    timer: '500000',
    //background:'#f2dede',
    timerProgressBar : true,
    toast : true,
     position : 'center-end',
     showConfirmButton : true,
    confirmButtonColor:'#F85D03',
   // stopKeydownPropagation: true,
    confirmButtonArialLabel: 'Confirmar',
    imageUrl: '../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
    });
    return false;
	}
}