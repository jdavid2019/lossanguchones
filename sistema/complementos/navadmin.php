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
                  <img src="../../Imagenes/logoresponsive.png"  class="imagenlogo" width="65px;" height="62px;" > <a class="navbar-brand" href="#">LOS SANGUCHONES DE KIKE</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                             <li class="ui"><a class="color_animation" href="registro.php"><i class="fas fa-user-shield"></i>&nbsp;PERFIL ADMINISTRADOR : <?php echo strtoupper($nombres); ?></a></li>
                           
                            <li class="ui"><a class="color_animation" href="../complementos/sesion/cerrarsesion.php"><i class="fas fa-sign-out-alt"></i>&nbsp;CERRAR SESION</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
 </nav>