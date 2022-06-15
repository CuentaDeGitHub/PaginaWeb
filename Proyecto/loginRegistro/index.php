<?php
session_start();
IF($_SESSION['usuario'] == null){
  header("location:LoginRegistro.php");
}
$msg = "Bienvenido " . $_SESSION['usuario']; 
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pagina Principal</title>

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>


  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">SV<span>.</span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Acerca de</a></li>
          <li><a class="nav-link scrollto" href="#features">Caracteristicas</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipo</a></li>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <form action = Logout.php>
      <button class="button-31" role="button">Desconectar</button>
      </form>
    </div>
  </header>

  <!-- ======= Empieza Banner Hero ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1> <?php echo($msg) ?> <span>.</span></h1>
          <h2>Manipulador de la base de datos</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-user-line"></i>
            <h3><a href="#services">Soldados</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-building-2-line"></i>
            <h3><a href="#services">Compañias</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-hotel-line"></i>
            <h3><a href="#services">Cuarteles</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-building-4-line"></i>
            <h3><a href="#services">Cuerpos</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-aliens-line"></i>
            <h3><a href="#services">Servicios</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- Finaliza Banner Hero -->

  <main id="main">

    <!-- ======= Empieza Seccion Acerca de ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Acerca de este proyecto</h3>
            <p class="fst-italic">
              Este es el proyecto para la materia de desarrollo de aplicaciones web, el cual tiene como finalidad lo siguiente:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Aprender y Comprender HTML.</li>
              <li><i class="ri-check-double-line"></i> Aprender y Comprender PHP.</li>
              <li><i class="ri-check-double-line"></i> Usar lo aprendido para conectar una pagina web que contenga PHP con una base de datos creada previamente.</li>
            </ul>
            <p>
              Pero lo que importa es que la pagina web se vea bonita apoco no?
            </p>
          </div>
        </div>

      </div>
    </section><!-- Finaliza Seccion Acerca de  -->


    <!-- ======= Empiza Seccion Caracteristicas ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/features.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-receipt"></i>
              <h4>Login</h4>
              <p>Utilizando un formulario se confirma que los datos ingresados coinciden con los de usuario en la base de datos, dando acceso a la pagina web</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Registro</h4>
              <p>Alternativamente, al utilizar otro formulario se crea un registro de un nuevo usuario con los datos ingresados, con la finalidad de utilizarlo para ingresar a la pagina.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Diseño de la pagina</h4>
              <p>La pagina web utiliza multiples archivos CSS y JS para lograr el estilo visual presente y las transiciones y funciones actuales</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Funcionalidad de la pagina</h4>
              <p>Utilizando PHP se logra una conexion con una base de datos mySQL, permitiendo asi su manipulacion desde manera remota</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- Finaliza Seccion Caracteristicas -->

    <!-- ======= Empieza Seccion Servicios ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tablas</h2>
          <p>Modifica las tablas</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user"></i></div>
              <div>
              <form action=Tablas.php method="post" >
              <input type = "hidden" name = "tabla" value = "soldado" />
              <input type="submit" class="buttonLink" value="Soldados">
              </form>
              </div>
              <p>Introduzca informacion sobre los soldados Ej: Nombre, direccion, telefono, etc</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-building"></i></div>
              <div>
              <form action=Tablas.php method="post" >
              <input type = "hidden" name = "tabla" value = "compañia" />
              <input type="submit" class="buttonLink" value="Compañia">
              </form>
              </div>
              <p>Introduzca informacion sobre las Compañias del area Ej: Descripcion y nombre</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-buildings"></i></div>
              <div>
              <form action=Tablas.php method="post" >
              <input type = "hidden" name = "tabla" value = "cuartel" />
              <input type="submit" class="buttonLink" value="Cuarteles">
              </form>
              </div>
              <p>Introduzca informacion sobre los cuarteles generales existentes en el area</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-wallet"></i></div>
              <div>
              <form action=Tablas.php method="post" >
              <input type = "hidden" name = "tabla" value = "cuerpo" />
              <input type="submit" class="buttonLink" value="Cuerpos">
              </form>
              </div>
              <p>Introduzca informacion sobre los cuerpos de soldados que existen actualmente</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-game"></i></div>
              <div>
              <form action=Tablas.php method="post" >
              <input type = "hidden" name = "tabla" value = "servicio" />
              <input type="submit" class="buttonLink" value="Servicios">
              </form>
              </div>
              <p>Introduzca los distintos servicios o actividades que se pueden realizar</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user"></i></div>
              <div>
              <form action=Tablas.php method="post" >
              <input type = "hidden" name = "tabla" value = "usuario" />
              <input type="submit" class="buttonLink" value="Usuarios">
              </form>
              </div>
              <p>Introduzca o manipule informacion y/o registros de usuario existentes</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Finaliza Seccion Servicios -->

    <!-- ======= Empieza Seccion Testimonios ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Tyler Steinkamp</h3>
                <h4>Ceo &amp; Fundador</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Termina Objeto de Testimonio -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpeg" class="testimonial-img" alt="">
                <h3>Kemonito</h3>
                <h4>Diseñador</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Termina Objeto de Testimonio -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Albertano Santacruz</h3>
                <h4>El Albertano</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Termina Objeto de Testimonio -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Big Smoke</h3>
                <h4>Villano de videojuegos</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Termina Objeto de Testimonio -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.png" class="testimonial-img" alt="">
                <h3>King Dedede</h3>
                <h4>Villano de videojuegos pero bueno</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Termina Objeto de Testimonio -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- Termina Seccion de Testimonio -->

    <!-- ======= Empieza Seccion de Equipo ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Equipo</h2>
          <p>Integrantes del equipo</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Plushie de Bowser JR</h4>
                <span>Jefazo Plushie</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Harrier Du Bois</h4>
                <span>Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-3.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Kim Kitsuragi</h4>
                <span>Contador</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Coordinacion Mano/Ojo</h4>
                <span>Sentido</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Termina Seccion de Equipo -->

    <!-- ======= Empieza Seccion de contacto ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>Contactanos</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.0705257226537!2d-101.41937468530729!3d26.901256767060026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868bcdf69f01f065%3A0xd8f80018ec59fd74!2sPresidencia%20Municipal%20de%20Monclova!5e0!3m2!1ses-419!2smx!4v1654094303369!5m2!1ses-419!2smx" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Direccion:</h4>
                <p>Zaragoza Sur 332, Zona Centro, 25700 Monclova, Coah.</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>Presidencia@Monclova.gob.mx</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Llamanos (No lo hagas):</h4>
                <p>+52 866 6492 800</p>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section><!-- Termina Seccion Contacto -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>SV<span>.</span></h3>
              <p>
                533 Ildefonso Fuentes <br>
                Monclova 25730, MX<br><br>
                <strong>Telefono:</strong> +52 866 253 5490<br>
                <strong>Email:</strong> WanderingBard@Outlook.es<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links (No hacen nada)</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Acerca de nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terminos de Servicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politica de privacidad</a></li>
            </ul>
          </div>

          <div class="col-lg-5   col-md-6 footer-links">
            <h4>Nuestras Actividades</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Creacion de Logins</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Creacion de Registros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño de pagina web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Creacion de bases de datos</a></li>
            </ul>
          </div>

         

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SV</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">

      </div>
    </div>
  </footer><!-- Termina Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Archivos JS -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  </script>

  <script src="assets/js/main.js"></script>

</body>

</html>