Swal.fire({
    title : '<b style="color:#FF4500;">¡Producto eliminado!</b>',
    html:'<b style="color:black;">Usted ha eliminado el producto correctamente.</b>',
  //  icon: 'warning',
    confirmButtonText: '<a class="entendido" href="eliminar_producto.php">Entendido</a>',
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