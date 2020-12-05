<?php
require_once '../bean/BeanProducto.php';
require_once '../modelo/daoProducto.php';
$currentidp="";
$currentidp= $_GET['id'] ;
$objProductoBean = new BeanProducto();
$objProductoBean->setId($currentidp);
$objProductoDAO=new daoProducto();
$mostrar=$objProductoDAO->MostrarDetalleProducto($objProductoBean);

while ($f=mysqli_fetch_array($mostrar)) {
?>
    <?php
    $tipo=$f['tipo'];
    if($tipo ==utf8_decode('Hamburguesas clásicas')){
    echo   '<div  class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/clasicas/'.$f['imagenp'].'"><br>';
    echo  '</div>';
    }else if($tipo=='Bebidas'){
      echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/bebidas/'.$f['imagenp'].'"><br>'; 
    echo  '</div>'; 
    }else if($tipo=='Papas fritas'){
       echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/papas/'.$f['imagenp'].'"><br>'; 
    echo  '</div>';    
    }else if($tipo=='Combos y promos'){
       echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/combosyp/'.$f['imagenp'].'"><br>';
    echo  '</div>';  
    }else if($tipo=='Salchipapas'){
    echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/salchipapas/'.$f['imagenp'].'"><br>';
    echo  '</div>';  
    }else if($tipo=='Hamburguesas especiales'){
    echo   '<div class="bloqueimg">';
    echo '<img class="imagc"  src="../../Imagenes/especiales/'.$f['imagenp'].'"><br>'; 
    echo  '</div>'; 
    }elseif ($tipo=='Ensaladas') {
    echo   '<div class="bloqueimg">';
    echo '<img class="imagc" src="../../Imagenes/ensaladas/'.$f['imagenp'].'"><br>';
    echo  '</div>';   
    }
    ?>
<div class="bloquedetalle">
<div class="apunte">
    <a class="titulos">Nombre:</a>
    <a class="greens"><?php echo utf8_encode($f['nombrep']);?></a>
    </div>
<div class="apunte">
    <a class="titulos">Precio:</a>
    <a class="greens">S/. <?php echo $f['preciop'];?></a>
    </div>
    <div class="apunte">
    <a class="titulos">Decripción:</a>
    <a class="greens"><?php echo utf8_encode($f['descripcionp']);?></a>
    </div>    
    <div class="apunte">
    <a class="titulos">Estado:</a>
    <?php 
    $estado= $f['estado'];
    if($estado == 'Disponible'){
    echo '<a class="green">'.$estado.'</a> <br>';
    echo'</div>';
    echo' <div class="detallesp">
    <a class="acarrito" href="./carritodecompras.php?id='.$f['id'].'"><i class="fas fa-shopping-cart"></i> Añadir al carrito de compras</a>
    </div>';
    }else if ($estado == 'No Disponible'){
    echo '<a class="red" >'.$estado.'</a>'; 
    echo'</div>';
    echo' <div class="detalles2">
   <a  class="nop"><i class="fas fa-times"></i> No puede añadir al carrito de compras</a> </div>';   
 }
 ?>
 <div class="vcarrito">
    <a class="acarrito" href="./cliente.php"><i class="fas fa-undo-alt"></i> Volver al catalogo</a>
</div>
</div>

</div>
<?php
        }
    ?>
