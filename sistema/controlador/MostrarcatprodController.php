<?php
require_once '../bean/BeanTiproducto.php';
require_once '../modelo/daoTiproducto.php';
?>

<section id="clasicas">
    <h1 class="all">NUESTRAS HAMBURGUESAS CLÁSICAS</h1>
<section>
 <?php
   $clasicas="";
   $clasicas='Hamburguesas clásicas';
   $objTiproductoBean = new BeanTiproducto();
   $objTiproductoBean->setTipo($clasicas);
   $objTiproductoDAO=new daoTiproducto();
   $mostrart=$objTiproductoDAO->MostrarProductoxTipo($objTiproductoBean);
    while ($f=mysqli_fetch_array($mostrart)) {
    ?>
      <div class="producto">
      <center>
        <img src="../../Imagenes/clasicas/<?php echo $f['imagenp'];?>"><br>
        <span class="nombreproducto"><?php echo utf8_encode($f['nombrep']);?></span><br><br>
        <a href="./detallesproduccliente.php?id=<?php  echo $f['id'];?>#detallado" class="verdetalles">Ver más  detalles</a>
      </center>
    </div>
  <?php
  
    }
  ?>
</section>
</section>
<section id="especiales">
   <h1 class="all">NUESTRAS HAMBURGUESAS ESPECIALES</h1>
   <section>
 <?php
   $especiales="";
   $especiales='Hamburguesas especiales';
   $objTiproductoBean = new BeanTiproducto();
   $objTiproductoBean->setTipo($especiales);
   $objTiproductoDAO=new daoTiproducto();
   $mostrart=$objTiproductoDAO->MostrarProductoxTipo($objTiproductoBean);
    while ($f=mysqli_fetch_array($mostrart)) {
    ?>
      <div class="producto">
      <center>
        <img src="../../Imagenes/especiales/<?php echo $f['imagenp'];?>"><br>
        <span class="nombreproducto"><?php echo utf8_encode($f['nombrep']);?></span><br><br>
        <a href="./detallesproduccliente.php?id=<?php  echo $f['id'];?>#detallado" class="verdetalles">Ver más  detalles</a>
      </center>
    </div>
  <?php
  
    }
  ?>
</section>
</section>
<section id="combosypromos">
   <h1 class="all">NUESTROS COMBOS Y PROMOS</h1>
   <section>
 <?php
   $combos="";
   $combos='Combos y promos';
   $objTiproductoBean = new BeanTiproducto();
   $objTiproductoBean->setTipo($combos);
   $objTiproductoDAO=new daoTiproducto();
   $mostrart=$objTiproductoDAO->MostrarProductoxTipo($objTiproductoBean);
    while ($f=mysqli_fetch_array($mostrart)) {
    ?>
      <div class="producto">
      <center>
        <img src="../../Imagenes/combosyp/<?php echo $f['imagenp'];?>"><br>
        <span class="nombreproducto"><?php echo utf8_encode($f['nombrep']);?></span><br><br>
        <a href="./detallesproduccliente.php?id=<?php  echo $f['id'];?>#detallado" class="verdetalles">Ver más  detalles</a>
      </center>
    </div>
  <?php
  
    }
  ?>
</section>
</section>
<section id="salchipapas">
 <h1 class="all">NUESTRAS SALCHIPAPAS</h1>
   <section>
 <?php
   $salchipapas="";
   $salchipapas='Salchipapas';
   $objTiproductoBean = new BeanTiproducto();
   $objTiproductoBean->setTipo($salchipapas);
   $objTiproductoDAO=new daoTiproducto();
   $mostrart=$objTiproductoDAO->MostrarProductoxTipo($objTiproductoBean);
    while ($f=mysqli_fetch_array($mostrart)) {
    ?>
      <div class="producto">
      <center>
        <img src="../../Imagenes/salchipapas/<?php echo $f['imagenp'];?>"><br>
        <span class="nombreproducto"><?php echo utf8_encode($f['nombrep']);?></span><br><br>
        <a href="./detallesproduccliente.php?id=<?php  echo $f['id'];?>#detallado" class="verdetalles">Ver más  detalles</a>
      </center>
    </div>
  <?php
  
    }
  ?>
</section>
</section>

<section id="papas">
  <h1 class="all">NUESTRAS PAPAS FRITAS</h1>
<section >
 <?php
   $papas="";
   $papas='Papas fritas';
   $objTiproductoBean = new BeanTiproducto();
   $objTiproductoBean->setTipo($papas);
   $objTiproductoDAO=new daoTiproducto();
   $mostrart=$objTiproductoDAO->MostrarProductoxTipo($objTiproductoBean);
    while ($f=mysqli_fetch_array($mostrart)) {
    ?>
      <div class="producto">
      <center>
        <img src="../../Imagenes/papas/<?php echo $f['imagenp'];?>"><br>
        <span class="nombreproducto"><?php echo utf8_encode($f['nombrep']);?></span><br><br>
        <a href="./detallesproduccliente.php?id=<?php  echo $f['id'];?>#detallado" class="verdetalles">Ver más  detalles</a>
      </center>
    </div>
  <?php
  
    }
  ?>
</section>
</section>

<section id="ensaladas">
  <h1 class="all">NUESTRAS ENSALADAS</h1>
  <section class="ensaladas">
 <?php
   $ensaladas='Ensaladas';
   $objTiproductoBean = new BeanTiproducto();
   $objTiproductoBean->setTipo($ensaladas);
   $objTiproductoDAO=new daoTiproducto();
   $mostrart=$objTiproductoDAO->MostrarProductoxTipo($objTiproductoBean);
    while ($f=mysqli_fetch_array($mostrart)) {
    ?>
      <div class="producto">
      <center>
        <img src="../../Imagenes/ensaladas/<?php echo $f['imagenp'];?>"><br>
        <span class="nombreproducto"><?php echo utf8_encode($f['nombrep']);?></span><br><br>
        <a href="./detallesproduccliente.php?id=<?php  echo $f['id'];?>#detallado" class="verdetalles">Ver más  detalles</a>
      </center>
    </div>
  <?php
  
    }
  ?>
</section>
</section>


 <section id="bebidas">
 <h1 class="all">NUESTRAS BEBIDAS</h1> 
<section>
 <?php
   $bebidas='Bebidas';
   $objTiproductoBean = new BeanTiproducto();
   $objTiproductoBean->setTipo($bebidas);
   $objTiproductoDAO=new daoTiproducto();
   $mostrart=$objTiproductoDAO->MostrarProductoxTipo($objTiproductoBean);
    while ($f=mysqli_fetch_array($mostrart)) {
    ?>
      <div class="producto">
      <center>
        <img src="../../Imagenes/bebidas/<?php echo $f['imagenp'];?>"><br>
        <span class="nombreproducto"><?php echo utf8_encode($f['nombrep']);?></span><br><br>
        <a href="./detallesproduccliente.php?id=<?php  echo $f['id'];?>#detallado" class="verdetalles">Ver más  detalles</a>
      </center>
    </div>
  <?php
  
    }
  ?>
</section>
</section>

