<?php
session_start();
require_once '../bean/BeanProducto.php';
require_once '../modelo/daoProducto.php';

if(isset($_POST['nombrep'])){
$alerta='';	
$nombrep=$_POST['nombrep'];
$objProductoBean = new BeanProducto();
$objProductoBean->setNombrep($nombrep);
$objProductoDAO=new daoProducto();
$verifica=$objProductoDAO->VerificarExistenciaProducto($objProductoBean);
$contador = mysqli_num_rows($verifica);
 if($contador == 1){
 	   $_SESSION['alerta']=$alerta;
       header('location: ../vadministrador/registrarproducto.php');
     }else{
           $allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagenp="";
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
						//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen
					$imagenp= $_FILES["file"]["name"];
					if(file_exists("../../Imagenes/".$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		$nombrep=$_POST['nombrep'];
					$descripcionp=$_POST['descripcionp'];
					$preciop=$_POST['preciop'];
					$tipo_id=$_POST['tipo_id'];
                    if($tipo_id==1){
					move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../../Imagenes/clasicas/" .$_FILES["file"]["name"]);
                    }elseif ($tipo_id==2) {
                    move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../../Imagenes/bebidas/" .$_FILES["file"]["name"]);	# code...
                    }elseif($tipo_id==3){
					move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../../Imagenes/papas/" .$_FILES["file"]["name"]);
                    }elseif($tipo_id==4){
					move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../../Imagenes/combosyp/" .$_FILES["file"]["name"]);
                    }elseif($tipo_id==5){
					move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../../Imagenes/salchipapas/" .$_FILES["file"]["name"]);
                    }elseif($tipo_id==6){
					move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../../Imagenes/especiales/" .$_FILES["file"]["name"]);
                    }elseif($tipo_id==7){
					move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../../Imagenes/ensaladas/" .$_FILES["file"]["name"]);
                    }			
					$objProductoBeanr= new BeanProducto();
       				$objProductoBeanr->setNombrep($nombrep);
       				$objProductoBeanr->setDescripcionp($descripcionp);
       				$objProductoBeanr->setImagenp($imagenp);
       				$objProductoBeanr->setPreciop($preciop);
       				$objProductoBeanr->setTipo_id($tipo_id);
       				$objProductoDAOr = new daoProducto();
       				$registra=$objProductoDAOr->RegistrarProducto($objProductoBeanr);
       				$alerta1='';
					if(!$registra){
          			echo 'Error en la sentencia';
       				}else{
          			 $_SESSION['alerta1']=$alerta1;
          				header('location: ../vadministrador/registrarproducto.php');
       				}
       				}
       			}
		  			}else{
		  			 $_SESSION['alerta2']=$alerta;
		  				header('location: ../vadministrador/registrarproducto.php');
		  			}

					} 
					}
  ?>  	