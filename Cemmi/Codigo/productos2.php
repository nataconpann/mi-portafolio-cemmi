
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CEMMI C.A</title>
        <link rel="icon" type="image/png" href="../Imagenes/Logos/logo de encabezado y imagenes.png" >
        <link rel="stylesheet" href="../Codigos/productos.css">
        <link rel="stylesheet" href="../Codigo/css/menu.css">
        <link rel="stylesheet" href="../Codigo/css/gotop.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <header>
            <div class="navbar">
                <div class="logo"><a href="../index.html"><img src="../Imagenes/Logos/logo de encabezado y imagenes.png" alt="logomenu"></a></div>
                <ul class="links">
                    <li><a href="./productos.html">Productos</a></li>
                    <li><a href="./nosotros.html">Nosotros</a></li>
                    <li><a href="./contacto.html">Contactos</a></li>
                </ul>
                <a href="./contacto.html" class="action_btn">Ordenar</a>
                <div class="toogle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

            <div class="dropdown_menu ">
                <li><a href="./productos.html">Productos</a></li>
                <li><a href="./nosotros.html">Nosotros</a></li>
                <li><a href="./contacto.html">Contactos</a></li>
                <li><a href="./productos.html" class="action_btn">Ordenar</a></li>
            </div>
        </header>

        <main>
            <section class="banner1">
                <img src="../Imagenes/Imagenes_de_stock/pexels-skitterphoto-633850.jpg" alt="">
                <div class="titulo1">
                    <h1>
                        Soluciones industriales confiables
                        <br>
                        y de calidad
                    </h1>
                    <p>
                        Cemmi-C.A LLC ©2023
                    </p>
                </div>
            </section>
        </main>

        <section id="subt1">
            <h3>Equipos variados en stock</h3>
        </section>


        <section id="prod1">
            <div class="container1">
            <div class="producto1">
                <img src="../Imagenes/Productos/1/CM20190729-2dc8b-b2578.jpg" alt="">
            </div>
            <div class="nombre">
                <p>
                    Planta electrica Amplia Gama 
                    >800 Kva 
                    P900-1
                </p>

                <a href="javascript:abrir()" id="p1"><button name="btn1">Detalles</button></a>

                <?php
                    $inc = include('database.php');
                    $consulta1 = "SELECT nombre, descripcion, caracteristicas, stock FROM productos INNER JOIN categoria on fk_categoria = id_categoria where id_categoria = 1";
                    $resultado1 = mysqli_query($conexion, $consulta1);
                    if ($resultado1) {
                    while ($row1 = $resultado1->fetch_array()) {
                    $nombre1 = $row1['nombre'];
                    $descripcion1 = $row1['descripcion'];
                    $caracteristicas1 = $row1['caracteristicas'];
                    $stock1 = $row1['stock'];
                    ?>
                    <!-- Código HTML para mostrar los resultados de la consulta 1 -->
                    <div class="produc1" id="vent">
                    <div id="cerrar">
                    <a href="javascript:cerrar()">
                    <i class="fa-solid fa-x"></i>
                    </a>
                    </div>
                    <div class="pes-desc1">
                    <div class="nombrep">
                    <h1> <?php echo $nombre1; ?> </h1>
                    <br><br>
                    </div>
                    <p>
                    <h3><b>Descripcion: </b></h3>
                    <br>
                    <p> <?php echo $descripcion1; ?></p>
                    <br><br>
                    <h3><b>Caracteristicas: </b></h3>
                    <br>
                    <p>
                    <?php echo $caracteristicas1; ?>
                    </p>
                    <br><br>
                    <b>En Stock: </b> <?php echo $stock1; ?>
                    </p>
                    </div>
                    </div>
                    <?php
                    }
                    }
                ?>
            </div>
            </div>


            <div class="container2">
                <div class="producto2">
                    <img src="../Imagenes/Productos/2/71jUtOGicUL._AC_SX679_.jpg" alt="">
                </div>
                <div class="nombre2">
                    <p>
                        Filtros FARR
                    </p>
                    <a href="javascript:abrir()" id="p"><button name="btn2">Detalles</button></a>

                    <div class="produc1" id="vent">
                <div id="cerrar"> 
                    <a href="javascript:cerrar()">
                        <i class="fa-solid fa-x"></i>
                    </a>
                </div>
                <div class="pes-desc1">
                <div class="nombrep">
                    <h1> <?php echo $nombre2; ?> </h1>
                    <br><br>
                </div>
                    <p>
                        <h3><b>Descripcion: </b> </h3>
                        <br>
                        <p> <?php echo $descripcion2; ?></p> 
                        <br><br>
                        <h3><b>Caracteristicas: </b> </h3> 
                        <br>
                        <p>
                        <?php echo $caracteristicas2; ?> 
                        </p>
                        <br> <br>
                        <b>En Stock: </b> <?php echo $stock2; ?> 
                    </p>
                </div>
                </div>


                </div>
          </div>
        
          <div class="container3">
                <div class="producto3">
                    <img src="../Imagenes/Productos/3/FL3407.jpg" alt="">
                </div>
                <div class="nombre3">
                    <p>
                        Fusibles 15A
                    </p>
                    <a href="javascript:abrir()" id="p"><button name="btn3">Detalles</button></a>

                    <?php
                $inc3= include('database.php');
                if($inc3){
                $consulta3 = "SELECT nombre, descripcion, caracteristicas, stock FROM productos WHERE id= 3";
                $resultado3 = mysqli_query($conexion, $consulta3);
                if($resultado3){

                while($row3 = $resultado3->fetch_array()){
                $nombre3 = $row3['nombre'];
                $descripcion3 = $row3['descripcion'];
                $caracteristicas3 = $row3['caracteristicas'];
                $stock3 = $row3['stock'];
                ?>

                <div class="produc1" id="vent">
                <div id="cerrar"> 
                    <a href="javascript:cerrar()">
                        <i class="fa-solid fa-x"></i>
                    </a>
                </div>
                <div class="pes-desc3">
                <div class="nombrep">
                    <h1> <?php echo $nombre3; ?> </h1>
                    <br><br>
                </div>
                    <p>
                        <h3><b>Descripcion: </b> </h3>
                        <br>
                        <p> <?php echo $descripcion3; ?></p> 
                        <br><br>
                        <h3><b>Caracteristicas: </b> </h3> 
                        <br>
                        <p>
                        <?php echo $caracteristicas3; ?> 
                        </p>
                        <br> <br>
                        <b>En Stock: </b> <?php echo $stock3; ?> 
                    </p>
                </div>
                </div>

                <?php
                }
                }
                }
                ?>


                </div>
          </div>
        </section>


        <section id="subt2">
            <h3>Motores eléctricos</h3>
        </section>

        <section id="prod2">
            <div class="container4">
            <div class="producto4">
                <img src="../Imagenes/Productos/4/3_motor_sensor_lightbox.jpg" alt="">
            </div>
            <div class="nombre4">
                <p>
                    Motores Eléctricos ABB IEC
                </p>
                <a href="#" id="p4"><button>Detalles</button></a>
            </div>
        </div>
            <div class="container5">
                <div class="producto5">
                    <img src="../Imagenes/Productos/5/abb-gallery-9.jpg" alt="">
                </div>
                <div class="nombre5">
                    <p>
                        Motores Eléctricos ABB Baldor Reliance Nema
                    </p>
                    <a href="#" id="p5"><button>Detalles</button></a>
                </div>
          </div>
        </section>

        <section id="subt3">
            <h3>Equipos de Transmisión Mecánica</h3>
        </section>

        <section id="prod3">
            <div class="container6">
            <div class="producto6">
                <img src="../Imagenes/Productos/6/d7.jpg" alt="">
            </div>
            <div class="nombre6">
                <p>
                    Dodge CST - Transmisión mecánica de arranque controlado para Fajas Transportadoras
                </p>
                <a href="#" id="p6"><button>Detalles</button></a>
            </div>
        </div>
            <div class="container7">
                <div class="producto7">
                    <img src="../Imagenes/Productos/7/dodge-magnagear-xtr.png" alt="">
                </div>
                <div class="nombre7">
                    <p>
                        Reductor para alto torque MagnaGear®
                    </p>
                    <a href="#" id="p7"><button>Detalles</button></a>
                </div>
          </div>
            <div class="container8">
                <div class="producto8">
                    <img src="../Imagenes/Productos/8/clutch-and-brake-modules.jpg" alt="">
                </div>
                <div class="nombre8">
                    <p>
                        Clutch / Brake Modules
                    </p>
                    <a href="#" id="p8"><button>Detalles</button></a>
                </div>
          </div>
            <div class="container9">
                <div class="producto9">
                    <img src="../Imagenes/Productos/9/512i9AU3B-S._AC_SX425_.jpg" alt="">
                </div>
                <div class="nombre9">
                    <p>
                        Torque tamer
                    </p>
                    <a href="#" id="p9"><button>Detalles</button></a>
                </div>
          </div>
        </section>


        <section id="subt4">
            <h3>Chumaceras</h3>
        </section>

        <section id="prod4">
            <div class="container10">
            <div class="producto10">
                <img src="../Imagenes/Productos/10/Chumaceras-lisas.jpg" alt="">
            </div>
            <div class="nombre10">
                <p>
                    Chumaceras con rodamiento de bola
                </p>
                <a href="#" id="p10"><button>Detalles</button></a>
            </div>
        </div>
            <div class="container11">
                <div class="producto11">
                    <img src="../Imagenes/Productos/11/dodge-esfericos-unisphere-ii.png" alt="">
                </div>
                <div class="nombre11">
                    <p>
                        Chumaceras con rodamiento esferico
                    </p>
                    <a href="#" id="p11"><button>Detalles</button></a>
                </div>
          </div>
            <div class="container12">
                <div class="producto12">
                    <img src="../Imagenes/Productos/12/new_136.jpg" alt="">
                </div>
                <div class="nombre12">
                    <p>
                        Chumaceras con rodamiento conicos montados
                    </p>
                    <a href="#" id="p12"><button>Detalles</button></a>
                </div>
          </div>
            <div class="container13">
                <div class="producto13">
                    <img src="../Imagenes/Productos/13/image.jpg" alt="">
                </div>
                <div class="nombre13">
                    <p>
                        Chumaceras con rodamiento liso
                    </p>
                    <a href="#" id="p13"><button>Detalles</button></a>
                </div>
          </div>
        </section>

        <section id="subt5">
            <h3>Motores eléctricos</h3>
        </section>

        <section id="prod5">
            <div class="container14">
            <div class="producto14">
                <img src="../Imagenes/Productos/14/4018528-LSLV0055H100-2CONN.png" alt="">
            </div>
            <div class="nombre14">
                <p>
                    DRIVE H100, 220V, 7.5HP, 22A
                </p>
                <a href="#" id="p14"><button>Detalles</button></a>
            </div>
        </div>
            <div class="container15">
                <div class="producto15">
                    <img src="../Imagenes/Productos/15/salicru_frecuencia-bombeo.jpg" alt="">
                </div>
                <div class="nombre15">
                    <p>
                        Salicru H100, 220v, 22A
                    </p>
                    <a href="#" id="p15"><button>Detalles</button></a>
                </div>
          </div>

        </section>

        <div class="espacio"> </div>

        <div class="go-top-container">
            <div class="go-top-button">
                <i class="fa-solid fa-arrow-up"></i>
            </div>
        </div>


        <script src="../Codigo/js/menu.js"></script>
        <script src="../Codigo/js/gotop.js"></script>
        <script src="../Codigo/js/abrir.js"></script>


        <footer>
            <div class="logof">
                <img src="../Imagenes/Logos/Logo de pie de pagina editado.png" alt="">
            </div>
            <ul class="footerlink">
                <li><a href="./productos.html">Productos</a></li>
                <li><a href="./nosotros.html">Nosotros</a></li>
                <li><a href="./contacto.html">Contactos</a></li>
            </ul>
            <div class="ftlf">
                <p>Telefonos:
                    <br><br>
                    +58 424-289-0941
                    <br>
                    +58 212-143-3235
                </p>
            </div>
        </footer>

</body>