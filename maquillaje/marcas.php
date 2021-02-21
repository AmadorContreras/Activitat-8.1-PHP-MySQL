<?php 
	$conexion=mysqli_connect('localhost','root','','marcas');
 
 ?>
<!DOCTYPE html>

<html  lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/marcas.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <title>marcas</title>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="imgs/logo/logo-50px.png" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nyx">NYX</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nars">NARS</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contactanos</a>
                        </li>
                        <li class="nav-item .search-container">
                            <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                            <form>
                                <input type="search">
                            </form>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sesion"><i class="far fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                        </li>
                       
                        
                        
                    </ul>
                    <div id="log">
                        
                        
                    </div>
                    
                </div>
            </div>
            
            
        </nav>
        
        <header id="home">
            <div class="overlay">
                <div class="container">
                    <div>
                        <h1><span>Importancia</span><br>de las marcas</h1>
                        <p>
                            Maquillaje, brochas y pinceles de alta calidad profesional te ayudarán a conseguir una imagen impecable. Son una inversión, ya que con el cuidado correcto, su utilización puede prolongarse durante mucho tiempo. Así que ya sabes, si quieres un resultado profesional, tienes que utilizar “herramientas” profesionales.

                        </p>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="statistics  text-center font-weight-bold">
            <div class="container">
                <h2 class="text-capitalize">Más <span>conocidas</span></h2>
                <br>
                <div class="row">
                   
                    <div class="col-lg-3 col-md-6 col-12">
                        <h3>MAC</h3>
                        <p>
                        Considerada la mejor del mundo por la calidad de sus productos, originalidad y su amplia selección de cosméticos
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <h3>NARS</h3>
                        <p>
                            De las marcas de maquillaje  más conocidas y utilizadas del mundo
                        </p>
                        
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <h3>Clinique</h3>
                        <p>
                            Alabada por sus productos de cuidado de la piel, así como cosméticos de alta calidad
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <h3>Bobbi Brown</h3>
                        <p>
                            Es la firma de referencia para encontrar la mayor gama de tonalidades de bases de maquillaje
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="about-us" id="nyx">
            <div class="small-container">
                <h2 class="text-center">NYX <span> PROFESSIONAL MAKEUP</span></h2>
                <p class="text-center" style="padding-left: 100px;">
                A España llegó hace un par de años con su primera tienda en Gran Vía 
                </p>
                <div>
                    <div class="container" >
                        <div class="row">
                            <div class="col-lg-6 col-12 text-center">
                               <div class="item" style="width: 300px;">
                                    <img src="imgs/marcas/nyx.jpg" alt="">
                               </div>
                           </div>   
                            <div class="col-lg-6 col-12 text-right">
                                
                                <table class=" table table-striped">
                                    
                                    <tr class="table-dark">
                                        <td>ID</td>
                                        <td>Marca</td>
                                        <td>Producto</td>
                                        <td>Precio</td>
                                    </tr>
                                    <?php 
                                    $sql="SELECT * from nyx";
                                    $result=mysqli_query($conexion,$sql);
                                    while($mostrar=mysqli_fetch_array($result)){
                                    ?>

                                    <tr>
                                        <td><?php echo $mostrar['ID'] ?></td>
                                        <td><?php echo $mostrar['Marca'] ?></td>
                                        <td><?php echo $mostrar['Producto'] ?></td>
                                        <td><?php echo $mostrar['Precio'] ?></td>
                                    </tr>
                                    <?php 
                                    }
                                    ?>
                                    
                                    
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    
                        <div class="first"></div>
                        <div class="second"></div>
                </div>
            </div>
        </div>   

        <div class="about-us" id="nars">
            <div class="small-container">
                <h2 class="text-center">NARS  <span> COSMETICS</span></h2>
                <p class="text-center" style="padding-left: 100px;">
                Compañía francesa creada por el maquillador y fotógrafo François Nars en 1994
                </p>
                <div>
                    <div class="container" >
                        <div class="row">
                                <div class="col-lg-6 col-12 text-center">
                                    <div class="item" style="width: 300px;">
                                        <img src="imgs/marcas/nars_logo.png" alt="">
                                    </div>
                                </div>   
                            <div class="col-lg-6 col-12 text-right">
                                    
                                    <table class=" table table-striped">
                                        <tr class="table-dark">
                                            <td>ID</td>
                                            <td>Marca</td>
                                            <td>Producto</td>
                                            <td>Precio</td>
                                        </tr>
                                        <?php 
                                        $sql="SELECT * from nars";
                                        $result=mysqli_query($conexion,$sql);
                                        while($mostrar=mysqli_fetch_array($result)){
                                        ?>

                                        <tr>
                                            <td><?php echo $mostrar['ID'] ?></td>
                                            <td><?php echo $mostrar['Marca'] ?></td>
                                            <td><?php echo $mostrar['Producto'] ?></td>
                                            <td><?php echo $mostrar['Precio'] ?></td>
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                        
                                    </table>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="first">

                </div>
                <div class="second">

                </div>
            </div>
        </div>
        
        <div class="contact" id="contact">
            <div class="violet-overlay">
                <div class="container">
                    <h2 class="text-center">Contacactanos</h2>
                    <div class="contact-form">
                        <form>
                            <input type="text" placeholder="Nombre">
                            <input type="email" placeholder="Email">
                            <input type="text" placeholder="Teléfono">
                            <textarea placeholder="Mensaje"></textarea>
                            <input type="submit" value="Enviar" onmouseover="javascript:alert('Temporalmente fuera de servicio');return false" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <footer>
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">Contactanos</h4>
                            <p class="address">
                                123 Segunda Calle<br>
                                Avenida,<br>
                                Mallorca, Palma<br>
                                +987 654 3210
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">Links adicionales</h4>
                            <ul>
                                <li><a href="#">Brochas</a></li>
                                <li><a href="#">Ejemplos</a></li>
                                <li><a href="#">Marcas</a></li>
                                <li><a href="#">Noticias</a></li>
                                <li><a href="#">Contactanos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item date">
                            <h4 class="text-uppercase">Post recientes</h4>
                            <p><a href="#">01/03/2019</a></p>
                            <p><a href="#">08/05/2019</a></p>
                            <p><a href="#">01/03/2019</a></p>
                            <p><a href="#">08/05/2019</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase" id="sesion">Iniciar sesión</h4>
                            <form action="login.html">
                               
                                <input type="submit" value="Iniciar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                <p>Copyright 2021 Copy by <a href="#">Amador</a></p>
            </div>
        </footer>
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function () {
                
                'use strict';
                
                var winH = $(window).height();
                
                $('header').height(winH);  
                
                $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
                
                $('.navbar ul li a.search').on('click', function (e) {
                    e.preventDefault();
                });
                $('.navbar a.search').on('click', function () {
                    $('.navbar form').fadeToggle();
                });
                
                $('.navbar ul.navbar-nav li a').on('click', function (e) {
                    
                    var getAttr = $(this).attr('href');
                    
                    e.preventDefault();
                    $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                });
            })
        </script>
    </body>

</html>