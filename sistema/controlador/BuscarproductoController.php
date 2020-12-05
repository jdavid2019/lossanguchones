<?php
require_once '../bean/BeanProducto.php';
require_once '../modelo/daoProducto.php';

$search="";
$search= $_GET['search'];
$objProductoBean = new BeanProducto();
$objProductoBean->setNombrep($search);
$objProductoBean->setTipo($search);
$objProductoDAO=new daoProducto();
$busqueda=$objProductoDAO->BuscarProducto($objProductoBean);

$resultado_productos=mysqli_num_rows($busqueda);

echo '<h1 class="all2">Búsqueda de la palabra <b color:"red">' .$search.'</b> : '.$resultado_productos.' resultado/s encontrado/s.</h1>' ; 

if(mysqli_num_rows($busqueda) >0){
      
   
    while ($f=mysqli_fetch_array($busqueda)) {
    ?>
   <?php 
    if($resultado_productos !=1){
 ?>
      <div class="producto">
      <center>
        <?php
           $tipo=$f['tipo'];
          if($tipo ==utf8_decode('Hamburguesas clásicas')){
          echo '<img src="../../Imagenes/clasicas/'.$f['imagenp'].'"><br>';
          }else if($tipo=='Bebidas'){
          echo '<img src="../../Imagenes/bebidas/'.$f['imagenp'].'"><br>';  
          }else if($tipo=='Papas fritas'){
          echo '<img src="../../Imagenes/papas/'.$f['imagenp'].'"><br>';     
          }else if($tipo=='Combos y promos'){
          echo '<img src="../../Imagenes/combosyp/'.$f['imagenp'].'"><br>';  
          }else if($tipo=='Salchipapas'){
          echo '<img src="../../Imagenes/salchipapas/'.$f['imagenp'].'"><br>';  
          }else if($tipo=='Hamburguesas especiales'){
          echo '<img src="../../Imagenes/especiales/'.$f['imagenp'].'"><br>';  
          }elseif ($tipo=='Ensaladas') {
           echo '<img src="../../Imagenes/ensaladas/'.$f['imagenp'].'"><br>';   
          }
        ?>
        <span class="nombreproducto"><?php echo utf8_encode($f['nombrep']);?></span><br><br>
        <a href="./detallesproduccliente.php?id=<?php  echo $f['id'];?>#detallado" class="verdetalles">Ver más detalles</a>
      </center>
    </div>
    <?php
     }else{
     ?>
     <center>
      <div class="producto">
      <center>
        <?php
           $tipo=$f['tipo'];
          if($tipo ==utf8_decode('Hamburguesas clásicas')){
          echo '<img src="../../Imagenes/clasicas/'.$f['imagenp'].'"><br>';
          }else if($tipo=='Bebidas'){
          echo '<img src="../../Imagenes/bebidas/'.$f['imagenp'].'"><br>';  
          }else if($tipo=='Papas fritas'){
          echo '<img src="../../Imagenes/papas/'.$f['imagenp'].'"><br>';     
          }else if($tipo=='Combos y promos'){
          echo '<img src="../../Imagenes/combosyp/'.$f['imagenp'].'"><br>';  
          }else if($tipo=='Salchipapas'){
          echo '<img src="../../Imagenes/salchipapas/'.$f['imagenp'].'"><br>';  
          }else if($tipo=='Hamburguesas especiales'){
          echo '<img src="../../Imagenes/especiales/'.$f['imagenp'].'"><br>';  
          }elseif ($tipo=='Ensaladas') {
           echo '<img src="../../Imagenes/ensaladas/'.$f['imagenp'].'"><br>';   
          }
        ?>
        
        <span class="nombreproducto"><?php echo utf8_encode($f['nombrep']);?></span><br><br>
        <a href="./detallesproduccliente.php?id=<?php  echo $f['id'];?>#detallado" class="verdetalles">Ver más detalles</a>
      </center>
    </div>
    </center>
    <?php
     }
    ?>
  <?php
  
    } } else{
      echo '<section class="fondos"><br><a class="noencontrado"><img src="../../Imagenes/noencontrado.png"   width="150px;" height="150px;" ></a>';
      echo '<br><a class="intenta">Intenta buscando otro producto</a></section>';
    }
 
?>