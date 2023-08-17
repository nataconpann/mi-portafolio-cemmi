<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CEMMI C.A</title>
        <link rel="icon" type="image/png" href="../Imagenes/Logos/logo de encabezado y imagenes.png" >
        <link rel="stylesheet" href="../Codigo/css/productos.css">
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
        <?php
            include("database.php");
            $query = "SELECT id, nombre, imagen, descripcion, caracteristicas, stock FROM productos INNER JOIN categoria 
            ON fk_categoria = id_categoria WHERE id_categoria = 1";
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()){
            ?>
        
            <div class="container2">
                <div class="producto2">
                    <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" alt="">
                </div>
                <div class="nombre2">
                    <p>
                        <?php echo $row['nombre']; ?>
                    </p>
        
                    <a href="javascript:abrir(<?php echo $row['id']; ?>)" id="p<?php echo $row['id']; ?>"><button name="btn1">Detalles</button></a>
        
                    <div class="produc1" id="vent-<?php echo $row['id']; ?>">
                        <div id="cerrar">
                            <a href="javascript:cerrar(<?php echo $row['id']; ?>)">
                                <i class="fa-solid fa-x"></i>
                            </a>
                        </div>
                        <div class="pes-desc1">
                            <div class="nombrep">
                                <h1><?php echo $row['nombre']; ?></h1>
                                <br><br>
                            </div>
                            <p>
                                <h3><b>Descripcion: </b></h3>
                                <br>
                                <p><?php echo $row['descripcion']; ?></p>
                                <br><br>
                                <h3><b>Caracteristicas: </b></h3>
                                <br>
                                <p><?php echo $row['caracteristicas']; ?></p>
                                <br><br>
                                <b>En Stock: </b> <?php echo $row['stock']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
            </section>


            <section id="subt2">
            <h3>Motores eléctricos</h3>
            </section>

        <section id="prod2">
        <?php
            include("database.php");
            $query = "SELECT id, nombre, imagen, descripcion, caracteristicas, stock FROM productos INNER JOIN categoria 
            ON fk_categoria = id_categoria WHERE id_categoria = 2";
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()){
            ?>
        
            <div class="container2">
                <div class="producto2">
                    <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" alt="">
                </div>
                <div class="nombre2">
                    <p>
                        <?php echo $row['nombre']; ?>
                    </p>
        
                    <a href="javascript:abrir(<?php echo $row['id']; ?>)" id="p<?php echo $row['id']; ?>"><button name="btn1">Detalles</button></a>
        
                    <div class="produc1" id="vent-<?php echo $row['id']; ?>">
                        <div id="cerrar">
                            <a href="javascript:cerrar(<?php echo $row['id']; ?>)">
                                <i class="fa-solid fa-x"></i>
                            </a>
                        </div>
                        <div class="pes-desc1">
                            <div class="nombrep">
                                <h1><?php echo $row['nombre']; ?></h1>
                                <br><br>
                            </div>
                            <p>
                                <h3><b>Descripcion: </b></h3>
                                <br>
                                <p><?php echo $row['descripcion']; ?></p>
                                <br><br>
                                <h3><b>Caracteristicas: </b></h3>
                                <br>
                                <p><?php echo $row['caracteristicas']; ?></p>
                                <br><br>
                                <b>En Stock: </b> <?php echo $row['stock']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </section>

        <section id="subt3">
            <h3>Equipos de Transmisión Mecánica</h3>
        </section>

        <section id="prod3">
        <?php
            include("database.php");
            $query = "SELECT id, nombre, imagen, descripcion, caracteristicas, stock FROM productos INNER JOIN categoria 
            ON fk_categoria = id_categoria WHERE id_categoria = 3";
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()){
            ?>
        
            <div class="container3">
                <div class="producto3">
                    <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" alt="">
                </div>
                <div class="nombre3">
                    <p>
                        <?php echo $row['nombre']; ?>
                    </p>
        
                    <a href="javascript:abrir(<?php echo $row['id']; ?>)" id="p<?php echo $row['id']; ?>"><button name="btn1">Detalles</button></a>
        
                    <div class="produc1" id="vent-<?php echo $row['id']; ?>">
                        <div id="cerrar">
                            <a href="javascript:cerrar(<?php echo $row['id']; ?>)">
                                <i class="fa-solid fa-x"></i>
                            </a>
                        </div>
                        <div class="pes-desc1">
                            <div class="nombrep">
                                <h1><?php echo $row['nombre']; ?></h1>
                                <br><br>
                            </div>
                            <p>
                                <h3><b>Descripcion: </b></h3>
                                <br>
                                <p><?php echo $row['descripcion']; ?></p>
                                <br><br>
                                <h3><b>Caracteristicas: </b></h3>
                                <br>
                                <p><?php echo $row['caracteristicas']; ?></p>
                                <br><br>
                                <b>En Stock: </b> <?php echo $row['stock']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </section>

        <section id="subt4">
            <h3>Chumaceras</h3>
        </section>

        <section id="prod4">
        <?php
            include("database.php");
            $query = "SELECT id, nombre, imagen, descripcion, caracteristicas, stock FROM productos INNER JOIN categoria 
            ON fk_categoria = id_categoria WHERE id_categoria = 4";
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()){
            ?>
        
            <div class="container4">
                <div class="producto4">
                    <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" alt="">
                </div>
                <div class="nombre4">
                    <p>
                        <?php echo $row['nombre']; ?>
                    </p>
        
                    <a href="javascript:abrir(<?php echo $row['id']; ?>)" id="p<?php echo $row['id']; ?>"><button name="btn1">Detalles</button></a>
        
                    <div class="produc1" id="vent-<?php echo $row['id']; ?>">
                        <div id="cerrar">
                            <a href="javascript:cerrar(<?php echo $row['id']; ?>)">
                                <i class="fa-solid fa-x"></i>
                            </a>
                        </div>
                        <div class="pes-desc1">
                            <div class="nombrep">
                                <h1><?php echo $row['nombre']; ?></h1>
                                <br><br>
                            </div>
                            <p>
                                <h3><b>Descripcion: </b></h3>
                                <br>
                                <p><?php echo $row['descripcion']; ?></p>
                                <br><br>
                                <h3><b>Caracteristicas: </b></h3>
                                <br>
                                <p><?php echo $row['caracteristicas']; ?></p>
                                <br><br>
                                <b>En Stock: </b> <?php echo $row['stock']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
         </section>  

        <section id="subt5">
            <h3>Motores eléctricos</h3>
        </section>

        <section id="prod5">
        <?php
            include("database.php");
            $query = "SELECT id, nombre, imagen, descripcion, caracteristicas, stock FROM productos INNER JOIN categoria 
            ON fk_categoria = id_categoria WHERE id_categoria = 5";
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()){
            ?>
        
            <div class="container5">
                <div class="producto5">
                    <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" alt="">
                </div>
                <div class="nombre5">
                    <p>
                        <?php echo $row['nombre']; ?>
                    </p>
        
                    <a href="javascript:abrir(<?php echo $row['id']; ?>)" id="p<?php echo $row['id']; ?>"><button name="btn1">Detalles</button></a>
        
                    <div class="produc1" id="vent-<?php echo $row['id']; ?>">
                        <div id="cerrar">
                            <a href="javascript:cerrar(<?php echo $row['id']; ?>)">
                                <i class="fa-solid fa-x"></i>
                            </a>
                        </div>
                        <div class="pes-desc1">
                            <div class="nombrep">
                                <h1><?php echo $row['nombre']; ?></h1>
                                <br><br>
                            </div>
                            <p>
                                <h3><b>Descripcion: </b></h3>
                                <br>
                                <p><?php echo $row['descripcion']; ?></p>
                                <br><br>
                                <h3><b>Caracteristicas: </b></h3>
                                <br>
                                <p><?php echo $row['caracteristicas']; ?></p>
                                <br><br>
                                <b>En Stock: </b> <?php echo $row['stock']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </section>

<div class="go-top-container">
    <div class="go-top-button">
        <i class="fa-solid fa-arrow-up"></i>
    </div>
</div>


<script src="../Codigo/js/menu.js"></script>
<script src="../Codigo/js/gotop.js"></script>
<!-- <script src="../Codigo/js/abrir.js"></script> -->


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

<script>
    function abrir(id) {
        document.getElementById("vent-" + id).style.display = "block";
    }

    function cerrar(id) {
        document.getElementById("vent-" + id).style.display = "none";
    }
</script>