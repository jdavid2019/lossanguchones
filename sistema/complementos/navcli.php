 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                  <img src="../../Imagenes/logoresponsive.png"  class="imagenlogo" width="75px;" height="65px;" > <a class="navbar-brand" href="#">LOS SANGUCHONES DE KIKE</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li class="ui"><a class="color_animation" href="./carritodecompras.php">
                                <span class="count">
                                <?php
                                if(isset($_SESSION['carrito'])){
                                   echo count($_SESSION['carrito']);
                                }else{
                                    echo 0;
                                }
                                ?>
                                </span> 
                                <i class="fas fa-shopping-cart"></i>&nbsp;VER MI CARRITO</a> </li>
                            
                            <li class="ui"><a class="color_animation" href="registro.php"><i class="fas fa-street-view"></i>&nbsp;PERFIL : <?php echo strtoupper($userr); ?></a></li>
                           
                            <li class="ui"><a class="color_animation" href="../complementos/sesion/cerrarsesion.php"><i class="fas fa-sign-out-alt"></i>&nbsp;CERRAR SESION</a></li>
                        </ul>
                    </div>
            </div>
        </nav>