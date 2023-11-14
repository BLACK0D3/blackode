<?php
  $link = mysqli_connect("localhost", "root", "", "registro");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Blackode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #8f9ba3;">
    <video src="dust.mp4" autoplay="true" muted="true" loop="true" poster="negro.jpg"></video>




    <!--contenido-->
    <main id="fadeout">
        <span class="INT">BIENVENIDO A</span>
        <div class="intro">

            <div class="let" id="b"></div>
            <div class="let" id="l"></div>
            <div class="let" id="a"></div>
            <div class="let" id="c"></div>
            <div class="let" id="k"></div>
            <div class="let" id="o"></div>
            <div class="let" id="d"></div>
            <div class="let" id="e"></div>

        </div>
    </main>


    <nav class="navbar navbar-expand-lg navbar-secondary fixed-top" style="background-color: #8f9ba3;">
        <div class="container">
            <a href="#" class="navbar-brand">.black<span class="text-light">ode</span></a>


            <button class="navbar-toggler" type="button" data-toggle="collapse " data-target="#navbar-start"
                aria-controls="navbar-start" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

                
            </button>



            <div class="collapse navbar-collapse" id="navbar-start">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">

                    <Li class="nav-item">
                        <a class="nav-link" href="#home">Inicio</a>
                    </Li>
                    <Li class="nav-item">
                        <a class="nav-link" href="#about us">Sobre nosotros</a>
                    </Li>
                    <Li class="nav-item">
                        <a class="nav-link" href="#service">Planes</a>
                    </Li>
                    <Li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                    </Li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselE1" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="slide 1"></button>
            <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="1" aria-label="slide 2"></button>
            <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="2" class="active"
                aria-label="slide 3"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="img/codigo 1.jpg" class="d-block w-100" alt="">

                <div class="carousel-caption">

                    <h5>Optimo desarrollo web</h5>
                    <p>
                        Levamos el desarrollo web a otro nivel gracias a nuestros programadores
                    </p>

                </div>

            </div>


            <div class="carousel-item">
                <img src="img/codigo 2.jpg" class="d-block w-100" alt="">

                <div class="carousel-caption">

                    <h5>Tecnologia avanzada</h5>
                    <p>
                        Contamos con excelentes equipos para el desarrollo de paginas web
                    </p>

                </div>

            </div>

            <div class="carousel-item">
                <img src="img/codigo 3.jpg" class="d-block w-100" alt="">

                <div class="carousel-caption">

                    <h5>Te brindamos lo mejor</h5>
                    <p>
                        Destacamos por brindar y priorizar una excelente atencion a nuestros clientes
                    </p>

                </div>

            </div>


        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselE1" data-bs-slide="prev" id="home">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">previous </span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselE1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">next</span>
        </button>

    </div>

    <section class="services">

        <div class="container">

            <div class="row">
                <div class="col-12 col-md-12 col-lg-4 mb-3">

                    <div class="card text-light text-center bg-car1 pb-2">

                        <div class="card-body">

                            <h3 class="card-title"> MEJOR SERVICIO</h3>
                            <p>Brindamos una excelente atencion al cliente, haciendoles sentir satisfechos
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-12 col-md-12 col-lg-4 mb-3">

                    <div class="card text-light text-center bg-car2 pb-2">

                        <div class="card-body">

                            <h3 class="card-title"> AGILIDAD</h3>
                            <p>Entregaremos a tiempo tu pagina web
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-12 col-md-12 col-lg-4 mb-3">

                    <div class="card text-light text-center bg-car3 pb-2">

                        <div class="card-body">

                            <h3 class="card-title"> PERSONALIZAMOS</h3>
                            <p> Hacemos tu idea realidad
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section class="section-icon">

        <div class="container">

            <div class="row">

                <div class="col-12 col-md-12 col-lg-4 box-icons">

                    <div class="d-flex align-items-center">
                        <i class="bi bi-bootstrap-fill"></i>

                        <div class="ms-4">
                            <h3 class="text-light">Utilizamos Bootstrap y Responsive</h3>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
<br>
            <div class="col-12 col-md-12 col-lg-4 box-icons">

                <div class="d-flex align-items-center">
                    <i class="bi bi-box2-heart-fill"></i>

                    <div class="ms-4">
                    <h3 class="text-light">siguenos en instagram</h3>
                        <a href="http://https://www.instagram.com/_blackode_/" target="_blank" rel="noopener noreferrer"><p class="text-light">@_blackode_</a>
                        </p>
                    </div>
                </div>

            </div>

        </div>



        </div>

        </div>

        </div>

        </div>




        </div>

        </div>

        </div>
        </div>
        </div>

    </section>








    <div class="container-fluid" style="background: linear-gradient(90deg, #00c8ff00 0%, #92fe9d00 100%);">
        <div class="container p-5" id="service">
            <div class="row">
                <h2 class="box-icons text-center ">
                    Metodos de pago
                </h2>
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card h-100 shadow-lg">
                        <div class="card-body">
                            <div class="text-center p-3">
                                <h5 class="card-title" id="plata">Plata</h5>
                                <small>Paginas Sencillas</small>
                                <br><br>
                                <span class="h2">50.000 COP</span>/mes
                                <br><br>
                            </div>
                            <p class="card-text">Una esctructura basica y simple de su pagina web.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                </svg> Imagenes</li>
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                </svg> Videos</li>
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                </svg> Texto</li>
                        </ul>
                        <div class="card-body text-center" >
                            <a href="index.php#contacto" rel="noopener noreferrer"
                                class="btn btn-outline-primary btn-lg" style="border-radius:30px"></a>
                        </div>
                        </div>
                </div>
                
                
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card h-100 shadow-lg">
                        <div class="card-body">
                            <div class="text-center p-3">
                                <h5 class="card-title" id="oro">Oro</h5>
                                <small>Pagina Javascript</small>
                                <br><br>
                                <span class="h2">80.000 COP</span>/mes
                                <br><br>
                            </div>
                            <p class="card-text">Para paginas responsive, un plan para mejores visuales y comodidad a 
                                la hora de interactuar con la pagina.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                </svg> Animacion</li>
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                </svg> Css Estructurado</li>
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                </svg> Bootstrap</li>
                        </ul>
                        <div class="card-body text-center">
                        <a href="index.php#contacto" rel="noopener noreferrer"
                                class="btn btn-outline-primary btn-lg" style="border-radius:30px"></a>
                        </div>
                    </div>
                </div>




                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card h-100 shadow-lg">
                        <div class="card-body">
                            <div class="text-center p-3">
                                <h5 class="card-title" id="diam">Diamante</h5>
                                <small>Paginas PHP</small>
                                <br><br>
                                <span class="h2">120.000 COP</span>/mes
                                <br><br>
                            </div>
                            <p class="card-text">paginas completas, para compañias y grandes empresas que 
                                demandan una interaccion comoda, sencilla y util con sus clientes</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                </svg> Base de datos</li>
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                </svg> Compra</li>
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                </svg> Interfaz de usuario</li>
                        </ul>
                        <div class="card-body text-center">
                        <a href="index.php#contacto" rel="noopener noreferrer"
                                class="btn btn-outline-primary btn-lg" style="border-radius:30px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row" id="about us">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="box-icons text-center ">
                            NUESTRO EQUIPO
                        </h2>

                        <div class="team-box">

                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="sf-team">
                                        <div class="thumb">
                                            <a href="#"><img src="" alt=""></a>
                                        </div>
                                        <div class="text-col">
                                            <h3>Joshua Sanabria</h3>
                                            <p>Programador <br>
                                                3005653892 <br>
                                                Venezolano <br>
                                            </p>
                                            <ul class="team-social">
                                                <li><a href="#"><i class="bi bi-facebook"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="sf-team">
                                        <div class="thumb">
                                            <a href="#"><img src="" alt=""></a>
                                        </div>
                                        <div class="text-col">
                                            <h3>Juan Pablo</h3>
                                            <p>Programador <br>
                                                3218480752 <br>
                                                Colombiano <br>
                                            </p>
                                            <ul class="team-social">
                                            
                                                <li><a href="#"> <i class="bi bi-facebook"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-md-4 col-sm-6" id="">
                                    <div class="sf-team">
                                        <div class="thumb">
                                            <a href="#"><img src="" alt=""></a>
                                        </div>
                                        <div class="text-col">
                                            <h3>Sebastian Marin</h3>
                                            <p>Programador <br>
                                                3005653892 <br>
                                                Colombiano <br>
                                            </p>
                                            <ul class="team-social">
                                                <li><a href="#"><i class="bi bi-facebook" style="color:blue"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>  
























<br>
                                <section class="banner">

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <h2 class="text-light">Atencion al <i>Cliente</i></h2>
                                                <p class="text-light">En Blackode creemos en la buena atencion del 
                                                cliente, es por esto que al contactar a nuestra empresa, contamos con<br>
                                                    las modalidades de atencion virtual, consultas via correo y citas presenciales</p>
                                                <div>
                                                    <img src="img/llamada.png" alt="">
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </section>



                                <section class="contact" id="contacto">

                                    <div class="container mb-3 mb-lg-5">

                                        <div class="row">
                                            <div class="col-md-12" id="contact">
                                                <div class="section-header text-center pb-2 pb-lg-5">
                                                    <h2 class="text-light">contacto</h2>
                                                    <p class="text-light"> ¡Envianos tu idea y nosotros la haremos
                                                        realidad!

                                                    </p>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <div class="col-12 col-md-12 col-lg-6 pt-4 pb-4">




                                                <form action="#" method="post" name="contacto"
                                                    class="bg-black p-4 m-auto shadow-sm">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <input class="form-control" placeholder="Nombre"
                                                                    name="nombre" type="text" required>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <input class="form-control" placeholder="Apellido"
                                                                    name="apellido" type="text" required>

                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <input class="form-control" placeholder="Telefono"
                                                                        name="telefono" type="number" required>

                                                                </div>

                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <input class="form-control" placeholder="Email"
                                                                        name="correo" type="email" required>

                                                                </div>

                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <textarea class="form-control"
                                                                        placeholder="consulta" name="consulta" rows="3"
                                                                        maxlength="100"></textarea>

                                                                </div>

                                                            </div>

                                                            <button class="btn btn-primary btn-lg btn-block mt-3 "
                                                                type="submit" name="registro">Enviar</button>





                                                        </div>
                                                </form>

                                            </div>

                                        </div>


                                    </div>

                                </section>

                                <footer class="bg-dark p-2 text-center">
                                    <div class="container">
                                        <p class="text-white">Todos los derechos reservados </p>

                                    </div>


                                </footer>



                                <script
                                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
                                    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
                                    crossorigin="anonymous"></script>
                                <script src="S.js"></script>
</body>

</html>

<?php
     if(isset($_POST['registro'])){
      
        $nom = $_POST['nombre'];
        $ape = $_POST['apellido'];
        $tel = $_POST['telefono'];
        $correo = $_POST['correo'];
        $con = $_POST['consulta'];
        
        $insertar = "INSERT INTO cliente Values ('','$nom','$ape','$tel','$correo','$con')";
        
        $link = mysqli_query($link,$insertar);
      }
      
      ?>
