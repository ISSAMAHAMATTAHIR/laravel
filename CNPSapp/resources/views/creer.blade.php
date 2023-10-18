<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>education</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="/" class="nav-link scrollto"><i class="fa-solid fa-house fa-bounce"></i><span>Accueil</span></a></li>
        <li><a href="retour" class="nav-link scrollto"><i class="fa-solid fa-arrow-left fa-bounce"></i><span>Retour</span></a></li>
      </ul>
    </nav>

  </header>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex justify-content-center py-0.5">
                    <a href="../accueil" class="logo d-flex align-items-center w-auto">
                      <img src="image/cnps.png" alt="">
                    </a>
                  </div>

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-3">Creer un Compte</h5>
                    <p></p>
                  </div>

                  <form action="creer" class="row g-2 needs-validation" method="POST">
				            	{{ @csrf_field() }}
                      <div class="col-12">
                        <label for="yourName" class="form-label">Votre Nom</label>
                        <input type="text" name="nom" class="form-control" id="yourName" required>
                      </div>
                      @if($errors->has('nom'))
                      <p class="help is danger"> {{ $errors->first('nom') }}</p>
                      @endif

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Votre Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                    </div>
                    @if($errors->has('email'))
                    <p class="help is danger"> {{ $errors->first('email') }}</p>
                    @endif

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                    </div>
                    @if($errors->has('password'))
                    <p class="help is danger"> {{ $errors->first('password') }}</p>
                    @endif

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password Confirmation</label>
                      <input type="password" name="password_confirmation" class="form-control" id="yourPassword" required>
                    </div>
                    @if($errors->has('password_confirmation'))
                    <p class="help is danger"> {{ $errors->first('password_confirmation') }}</p>
                    @endif

                    <div class="col-12">
                      <button class="btn btn-warning w-100" type="submit">Creer votre compte</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-2"> Si vous avez un compte  <a href="connexion">Login</a></p>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>