<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CONTACTO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url("assets")?>/img/favicon.png" rel="icon">
  <link href="<?=base_url("assets")?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts 
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
-->
  <!-- Vendor CSS Files -->
  <link href="<?=base_url("assets")?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url("assets")?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url("assets")?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url("assets")?>/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?=base_url("assets")?>/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?=base_url("assets")?>/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url("assets")?>/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url("assets")?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">




     
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">FORMULARIO</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">  SISTEMA DE CONTACTOS</h5>
                    <p class="text-center small">ingresar usuario y contraseña</p>
                  </div>

                  <form class="row g-3 needs-validation" method="post" action="<?=base_url("principal/verificarUsuario")?>" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">CORREO</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="usuario" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">porfavor ingrese su correo</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">CONTRASEÑA</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">porfavor ingrese contraseña</div>
                    </div>


                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit"  >INICIAR SECION</button>
                    </div>

                  </form>

                </div>
              </div>



            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->






    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->
    <!-- Vendor JS Files -->
    <script src="<?=base_url("assets")?>/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?=base_url("assets")?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url("assets")?>/vendor/chart.js/chart.umd.js"></script>
  <script src="<?=base_url("assets")?>/vendor/echarts/echarts.min.js"></script>
  <script src="<?=base_url("assets")?>/vendor/quill/quill.js"></script>
  <script src="<?=base_url("assets")?>/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?=base_url("assets")?>/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?=base_url("assets")?>/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url("assets")?>/js/main.js"></script>

</body>

</html>