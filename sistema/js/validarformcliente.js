function validarformcliente(){
   var nombres,apellidos,correoe,dni,password;
   nombres=document.getElementById("nombres").value;
   apellidos=document.getElementById("apellidos").value;
   correoe=document.getElementById("correoe").value;
  // dni=document.getElementById("dni").value;
   password=document.getElementById("password").value;
   cpassword=document.getElementById("cpassword").value;
   if(nombres == ""){
    Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe ingresar sus nombres para continuar.</b>',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
	timer: '500000',
    timerProgressBar : true,
    toast : true,
    position : 'center-end',
    showConfirmButton : true,
    confirmButtonColor:'#F85D03',
    confirmButtonArialLabel: 'Confirmar',
    imageUrl: '../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
    });
    return false;
   }else if(apellidos == ""){
    Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe ingresar sus apellidos para continuar.</b>',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
    timer: '500000',
    timerProgressBar : true,
    toast : true,
    position : 'center-end',
    showConfirmButton : true,
    confirmButtonColor:'#F85D03',
    confirmButtonArialLabel: 'Confirmar',
    imageUrl: '../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
	});
	return false;
   }else if(correoe == ""){
    Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe ingresar un correo para continuar.</b>',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
    timer: '500000',
    timerProgressBar : true,
    toast : true,
    position : 'center-end',
    showConfirmButton : true,
    confirmButtonColor:'#F85D03',
    confirmButtonArialLabel: 'Confirmar',
    imageUrl: '../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
	});
    return false;
   }/*else if(dni == ""){
    Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe ingresar su dni para continuar.</b>',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
    timer: '500000',
    timerProgressBar : true,
    toast : true,
    position : 'center-end',
    showConfirmButton : true,
    confirmButtonColor:'#F85D03',
    confirmButtonArialLabel: 'Confirmar',
    imageUrl: '../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
	});
	return false;
   }*/else if(password == ""){
    Swal.fire({
    title : '<b style="color:black;">!Error!</b>',
    html:'<b class="rojo">Debe ingresar una contraseña para continuar.</b>',
    confirmButtonText: 'Entendido',
    padding: '-1rem',
    timer: '500000',
    timerProgressBar : true,
    toast : true,
    position : 'center-end',
    showConfirmButton : true,
    confirmButtonColor:'#F85D03',
    confirmButtonArialLabel: 'Confirmar',
    imageUrl: '../Imagenes/kikeredondo1.png',
    imageWidth : '38px'
	});
    return false;
	}else if(cpassword == ""){
        Swal.fire({
        title : '<b style="color:black;">!Error!</b>',
        html:'<b class="rojo">Debe confirmar su contraseña.</b>',
        confirmButtonText: 'Entendido',
        padding: '-1rem',
        timer: '500000',
        timerProgressBar : true,
        toast : true,
        position : 'center-end',
        showConfirmButton : true,
        confirmButtonColor:'#F85D03',
        confirmButtonArialLabel: 'Confirmar',
        imageUrl: '../Imagenes/kikeredondo1.png',
        imageWidth : '38px'
        });
        return false;
    } 
    else if(cpassword != password){
        Swal.fire({
        title : '<b style="color:black;">!Error!</b>',
        html:'<b class="rojo">Las contraseñas no coinciden , verifique.</b>',
        confirmButtonText: 'Entendido',
        padding: '-1rem',
        timer: '500000',
        timerProgressBar : true,
        toast : true,
        position : 'center-end',
        showConfirmButton : true,
        confirmButtonColor:'#F85D03',
        confirmButtonArialLabel: 'Confirmar',
        imageUrl: '../Imagenes/kikeredondo1.png',
        imageWidth : '38px'
        });
        return false;
    } 
}