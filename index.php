<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars Express</title>
<link rel="stylesheet" href="./css/all.min.css">
    <!-- google fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap">

    <!-- stylo para index header body y footer -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index-body.css">
    <link rel="stylesheet" href="css/footer.css">

    <!-- barra social -->
    <link rel="stylesheet" href="css/bar-social.css">
    <link rel="stylesheet" href="css/font-social.css">

    <!-- boton scroll-top -->
    <link rel="stylesheet" href="styles/font-btn-scroll-top.css">

    <!-- stylo boostrap version 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- para usar iconos ingresar a www.boxicon.com -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
</head>


<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Cars Express</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <!-- inicio -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Inicio<span class="sr-only"></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#Noticias">Noticias</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#Servicios">Servicios</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#Productos">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/concesionario_de_carros/php/catalago/Honda.php">catalago</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/concesionario_de_carros/login/login.php">Login</i></a>
                </li>
                <a href="./php/cerrarS.php">cerrar Sesion</a>
            </ul>
            
        </div>
    </nav>

</header>


<section>
    <div class="social-bar">
      <a href="https://www.facebook.com/profile.php?id=100075313524819" class="icon icon-facebook" target="_blank"></a>
      <a href="https://twitter.com/" class="icon icon-twitter" target="_blank"></a>
      <a href="https://www.youtube.com/" class="icon icon-youtube" target="_blank"></a>
      <a href="https://www.instagram.com/carsexpress2/" class="icon icon-instagram" target="_blank"></a>
    </div>
</section>

<body>


   
    <section class="Section1-carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="src/imagenes/img_carousel/bentley-mulliner-bacalar_3840x2501_xtrafondos.com.jpg" alt="First slide">
            </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="src/imagenes/img_carousel/mercedes-benz-gle-450-amg-rojo-en-montanas_3840x2160_xtrafondos.com.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="src/imagenes/img_carousel/porsche-rp-rojo_3600x2026_xtrafondos.com.jpg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="src/imagenes/img_carousel/aston-martin-zagato-rojo_3840x2160_xtrafondos.com.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>

    
    <section class="Section3-noticias" id="Noticias">

        <div class="contenedor_noticia">
            <div class="titulos-presentacion-noticia">
                <p class="titulos1-presentacion">Noticias</p>
                <p class="titulos2-presentacion">Mundo Cars Express</p>

                <div class="row">
                    <div class="col-md contenedor-img_noticia">
                        <img src="src/imagenes/img_noticias/HD-wallpaper-nissan-gt-r-nismo-nissan-gtr-nissan-cars-behance.jpg" alt="" class="img_noticia">
                    </div>
    
                    <div class="col-md contenedor_noticia_body">
                        <p class="fecha-noticia">03 Diciembre 2021</p>
                        <p class="titulo-noticia">EL NISSAN GT-R NISMO HA NACIDO PARA GANAR</p>
                        <p class="body-noticia">El diseño alargado y a su vez afilado del parachoques trasero ayuda a mantener el coeficiente de arrastre en 0,26cd. Además, la protección trasera en fibra de carbono personalizada de NISMO, a la vez que ha sido diseñada aerodinámicamente para conseguir que la carga se propague uniformemente hacia la parte trasera a cualquier velocidad, también ayuda a bajar el centro de gravedad.</p>
                        
                    </div>

                </div>
                
                <div class="row">
                    <div class="col-md contenedor-img_noticia">
                        <img src="src/imagenes/img_noticias/HD-wallpaper-isuzu-d-max-x-rider-double-cab-offroad-2020-cars-suvs-red-pickup-2020-isuzu-d-max-isuzu.jpg" alt="" class="img_noticia">
                    </div>
    
                    <div class="col-md contenedor_noticia_body">
                        <p class="fecha-noticia">03 Diciembre 2021</p>
                        <p class="titulo-noticia">ISUZU D-MAX</p>
                        <p class="body-noticia">El Isuzu D-Max está desarrollado sobre un chasis de largueros al que se atornilla de forma independiente su carrocería. Sobre este esquema, las ruedas delanteras se apoyan en muelles y ballestas semielípticas de tres hojas (más una hoja maestra), las ruedas traseras se apoyan sobre dos ballestas con dos hojas flotantes en el eje rígido.</p>
                        
                    </div>

                </div>

                <button class="btn-noticia" onclick="location.href='Noticias/'">Ver todas las noticias...</button>

               
            </div>
        </div>

    </section>

    
    <section class="Section4-Tarjetas-Servicios" id="Productos">
        <p class="Titulo-servicio">Ofertas de productos</p>
        <div class="row">

            <div class="col-md">
                <div class="card">
                    <br><img src="src/iconos/Servicio/png-transparent-microfiber-microvezeldoek-cleaning-towel-dishcloth-cleaning-cloth-blue-textile-cloth.png" alt="" class="img-card">
                    <br><h5 class="sub-titulo-servicio">Pañuelo de microfibra</h5>
                    <div class="card-body">
                       <br> <p>limpian en profundidad sin rayar y son capaces de absorber entre 7 y 8 veces su peso en agua (el doble que el algodón) otorgandole una gran capacidad de limpieza sin usar agentes quimicos limpiadores.</p>
                    </div>
                </div>
            </div>

            <div class="col-md">
                <div class="card">
                    <img src="src/iconos/Servicio/kisspng-spindle-oil-hydraulic-fluid-compressor-oil-filter-engine-oil-5b0dd0eee73981.4032641415276321109471.png" alt="" class="img-card">
                    <h5 class="sub-titulo-servicio">Aceite</h5>
                    <div class="card-body">
                        <p>Para lubricar los motores de combustión interna. Su propósito principal es lubricar las partes móviles, reduciendo considerablemente la fricción entre los metales, alargando así la vida del mismo.</p>
                    </div>
                </div>
                
            </div>

            <div class="col-md">
                <div class="card">
                    <img src="src/iconos/Servicio/kisspng-audi-a6-mercedes-benz-viano-car-tyre-5ad16a95bdf7a3.5622423915236737497781.png" alt="" class="img-card">
                    <h5 class="sub-titulo-servicio">Neumático</h5>
                    <div class="card-body">
                        <p>Neumáticos de alta calidad para todo tipo de coche con las mejores caracteristicas como frenado, rigides de carcaza, agarre, larga duración, nivel sonoro, eficiencia y relación calidad precio en todo tipo de neumáticos</p>
                    </div>
                </div>
            </div>

        </div>

    </section>

    
    <section class="Section5-Tarjetas-Sevicios" id="Servicios">

        <h1 class="titulo-servicios">Servicios</h1>
    
        <div class="container-servicios">
        
            <div class="card-servicio">
                <img src="src/imagenes/img_servicios/cambio-aceite-coche_xoptimizadax-kuJF--1200x630@abc.jpg">
                <h4>Liquido de frenos</h4>
                <p>El mejor liquido de freno en todo el pais para el cuidado de tu carro, con el 
                    mejor precio del mercado
                </p>
                
            </div>
            
            <div class="card-servicio">
                <img src="src/imagenes/img_servicios/Alineacion_big-1.jpg">
                <h4>Servicio de alineación y balanceo</h4>
                <p>La alineación de su vehículo puede verse afectada por un golpe en las llantas del carro,
                    un bache grande. Pero no se preocupe que tenemos
                    el mejor personal autorizado.
                </p>
                
            </div>
            
            <div class="card-servicio">
                <img src="src/imagenes/img_servicios/file.png">
                <h4>Cambiar el Lubricante para Engranajes</h4>
                <p>Para una óptima vida útil del diferencial, asegúrese de cambiar el lubricante del
                engranaje periódicamente, especialmente si lo remolca o arrastra.</p>
            
            </div>

            <div class="card-servicio">
                <img src="src/imagenes/img_servicios/bujias-motor-gasolina_750x341c.jpg">
                <h4>Reemplazo de las Bujías</h4>
                <p>En los motores de gas dependemos de las bujías para la carga que enciende el aire.
                Para un mejor rendimiento comprobamos y sustituimos las bujías </p>
            
            </div>

            <div class="card-servicio">
                <img src="src/imagenes/img_servicios/todo-sobre-la-limpieza-de-inyectores.jpg">
                <h4>Limpiar los Inyectores de Combustible</h4>
                <p>Tratar el combustible con un aditivo de alta calidad como AMSOIL P.i., 
                que es para limpiar depósitos, mantener los inyectores funcionando correctamente y evitar costos.</p>
            
            </div>

            <div class="card-servicio">
                <img src="src/imagenes/img_servicios/direccion-asistida.jpg">
                <h4>Servicio de Dirección Asistida</h4>
                <p>Un sistema de dirección asistida totalmente electrónico elimina la necesidad de bombas físicas,
                mangueras y correas para impulsar la asistencia eléctrica</p>
            
            </div>

        
    </div>

    </section>

    
    <section class="Contacto" id="Contactanos">

        <div class="content">
        
            <div class="contact-wrapper animated bounceInUp">
                <div class="contact-form">
                    <label class="titulo-contacto">Contactanos</label>
                    <form action="">
                        <p>
                            <label>Nombre</label>
                            <input type="text" name="fullname">
                        </p>
                        <p>
                            <label>Email </label>
                            <input type="email" name="email">
                        </p>
                        <p>
                            <label>Telefono</label>
                            <input type="tel" name="phone">
                        </p>
                        <p>
                            <label>Asunto</label>
                            <input type="text" name="affair">
                        </p>
                        <p class="block">
                           <label>Dejanos tu Mensaje</label> 
                            <textarea name="message" rows="3"></textarea>
                        </p>
                        <p class="block">
                            <button>
                                Enviar
                            </button>
                        </p>
                    </form>
                </div>
                <div class="contact-info">
                    <ul>
                        <li class="li-contact-info"><i class='bx bx-mobile-vibration'></i>+504 98607927</li>
                        <li class="li-contact-info"><i class='bx bx-mail-send'></i> cars_express@gmail.com</li> 
                        <li class="li-contact-info"><i class='bx bxs-location-plus'></i> San Pedro Sula </li>
                    </ul>
    
                  
                
         <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123018.88231522673!2d-88.05553019092328!3d15.519889671892058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f66430b113d5af1%3A0x323ecf76c17e8f6b!2sSan%20Pedro%20Sula!5e0!3m2!1ses-419!2shn!4v1618279968251!5m2!1ses-419!2shn" 
                    width="390" height="280" float="center" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
                </div>
    
                </div>
            </div>
    
        </div>

    </section>

</body>


<footer class="bg-white">

    <div class="container py-5">

        <div class="row py-3">

            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Empresa</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#Contactanos" class="enlace-footer">Contactanos</a></li>
                    <li class="mb-2"><a href="Empresa/Empresa.html" class="enlace-footer">Sobre nosotros</a></li>
                    <li class="mb-2"><a href="Empresa/Empresa.html" class="enlace-footer">Misión</a></li>
                    <li class="mb-2"><a href="Empresa/Empresa.html" class="enlace-footer">Visión</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="titulo text-uppercase font-weight-bold mb-4">Ayuda</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="enlace-footer">Payments</a></li>
                    <li class="mb-2"><a href="#" class="enlace-footer">Shipping</a></li>
                    <li class="mb-2"><a href="#" class="enlace-footer">Cancellation</a></li>
                    <li class="mb-2"><a href="#" class="enlace-footer">Returns</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Politicas</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="enlace-footer">Return Policy</a></li>
                    <li class="mb-2"><a href="#" class="enlace-footer">Terms Of Use</a></li>
                    <li class="mb-2"><a href="#" class="enlace-footer">Security</a></li>
                    <li class="mb-2"><a href="#" class="enlace-footer">Privacy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Usuario</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="enlace-footer">Cuenta</a></li>
                    <li class="mb-2"><a href="#" class="enlace-footer">Mis compras</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Siguenos en nuestras redes sociales</h6>
                <p class="text-muted mb-4">Te enseñaremos el mejor camino para tu viaje.</p>
                <p class="text-muted mb-4">Cars Express</p>

                <ul class="list-inline mt-4">
                    <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class='bx bxl-twitter' ></i></a></li>
                    <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100075313524819" target="_blank" title="facebook"><i class='bx bxl-facebook-circle'></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/carsexpress2/" target="_blank" title="instagram"><i class='bx bxl-instagram-alt'></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class='bx bxl-youtube' ></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class='bx bxl-google'></i></a></li>
                </ul>
            </div>
        </div>

    </div>

    <hr class="p-0 m-0 b-0">

    <div class="bg-light py-2">
        <div class="container text-center">
            <p class="text-muted mb-0 py-2">©2021 Grupo #5.</p>
        </div>
    </div>
    
</footer>

<span class="ir-arriba icon-arrow-up"><i class='bx bxs-chevron-up'></i></span>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- script scroll-top -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="script/Scroll_top/arriba.js"></script>
<script src="https://use.fontawesome.com/3e14583d6f.js"></script>
</html>