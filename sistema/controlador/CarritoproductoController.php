<?php
require_once '../bean/BeanProducto.php';
require_once '../modelo/daoProducto.php';
if(isset($_SESSION['carrito'])){
    if(isset($_GET['id'])){
        $arreglo=$_SESSION['carrito'];
        $encontro=false;
        $numero=0;
		for($i=0;$i<count($arreglo);$i++){
            if($arreglo[$i]['Id']==$_GET['id']){
               $encontro=true;
               $numero=$i;
            }
          }
          	if($encontro==true){
               $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
               $_SESSION['carrito']=$arreglo;
          }else{
            //si agrega un produc nuevo es decir si no hay arreglo
            $nombre="";
            $precio=0;
            $imagen="";
            $tipo="";
            $currentidp="";
            $currentidp= $_GET['id'] ;
            $objProductoBean = new BeanProducto();
            $objProductoBean->setId($currentidp);
            $objProductoDAO=new daoProducto();
            $buscar=$objProductoDAO->BuscarProductoporIdcarrito($objProductoBean);
            while ($f=mysqli_fetch_array($buscar)) {
              $nombre=$f['nombrep'];
              $precio=$f['preciop'];
              $imagen=$f['imagenp'];
              $tipo=$f['tipo'];
            }
            $datosNuevos=array('Id'=>$_GET['id'],
                    'Nombre'=>$nombre,
                    'Precio'=>$precio,
                    'Imagen'=>$imagen,
                    'Tipo'=>$tipo,
                    'Cantidad'=>1);

            array_push($arreglo, $datosNuevos);
            $_SESSION['carrito']=$arreglo;

          }
    }
  }else{
    if(isset($_GET['id'])){
      $nombre="";
      $precio=0;
      $imagen="";
      $tipo="";
      $currentidp="";
      $currentidp= $_GET['id'] ;
            $objProductoBean = new BeanProducto();
            $objProductoBean->setId($currentidp);
            $objProductoDAO=new daoProducto();
            $buscar=$objProductoDAO->BuscarProductoporIdcarrito($objProductoBean);
      while ($f=mysqli_fetch_array($buscar)) {
        $nombre=$f['nombrep'];
        $precio=$f['preciop'];
        $imagen=$f['imagenp'];
        $tipo=$f['tipo'];
      }
      $arreglo[]=array('Id'=>$_GET['id'],
              'Nombre'=>$nombre,
              'Precio'=>$precio,
              'Imagen'=>$imagen,
              'Tipo'=>$tipo,
              'Cantidad'=>1);
      $_SESSION['carrito']=$arreglo;
    }
  }

 ?>


