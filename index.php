<?php 
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Numeros Primos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/no-image.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light" id="nombre_usuario"><a href=""></a></h1>
        <input type="hidden" id="codigo_usuario" value="">
        <div class="social-links mt-3 text-center">
          <a class="twitter"><i class="bx bxl-twitter"></i></a>
          <a class="facebook"><i class="bx bxl-facebook"></i></a>
          <a class="instagram"><i class="bx bxl-instagram"></i></a>
          <a class="google-plus"><i class="bx bxl-skype"></i></a>
          <a class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#calculadora" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
          <li><a href="#login" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Login</span></a></li>
          <li><a href="#logout" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Salir</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

 
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="calculadora" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Calculadora N&uacute;meros Primos</h2>
                <p>Calcula los números primos que sean menor o igual a él. Luego suma dichos primos y muestra el resultado.</p>
            </div>
            <div class="row" data-aos="fade-in">
                <div class="col-lg-7 mt-5 mt-lg-0  align-items-stretch">
                    <form action="" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Ingresa un N&uacute;mero</label>
                            <input type="text" name="numero" class="form-control" id="numero" required>
                        </div>
                        <div class="col-md-3">
                            <label for="">Sumatoria</label>
                            <input type="text" name="resultado" class="form-control" id="resultado" required>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-info" onclick="calcular();">Calcular</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Numeros Primos:</label>
                        <textarea class="form-control" name="primos" id="primos" rows="10" required></textarea>
                    </div>
                    </form>
                </div>
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                    <div class="form-group">
                        <label for="name">Intentos del Usuario</label>
                        <!-- <textarea class="form-control" name="intentos" id="intentos" rows="10" required></textarea> -->
                        <div id = "contenedor_listado" class="list-group">
                            
                        </div>
                    </div>
                    </div>
                </div>
            </div>
      </div>
    </section><!-- End Contact Section -->

    <!-- ======= login Section ======= -->
    <section id="login" class="contact ">
      <div class="container-fluid card">
        <div class="card-header">
          Ingreso
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <label for="">Ingresa tu Nombre</label>
              <input type="text" name="nombre" class="form-control" id="nombre" required>
            </div>
            <div class="form-group col-md-1">
              <label for=""></label>
              <button class="btn btn-info" onclick="login();">Login</button>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>NumPrimos</span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/calculo.js"></script>

</body>

</html>