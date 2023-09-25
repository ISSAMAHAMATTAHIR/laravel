<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>virtuelle du tchad</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center bg-primary">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center ">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:info@uvt.td">info@uvt.td</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>(+235) 68 ou 98 272787</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://www.twitter.com/UvTchad" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/uvtchad" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UC0l4BxCnGuI2qV5etHYlavw/featured"><i class="bi bi-youtube"></i></a>
        <a href="https://www.linkdin.com/company/uvtchad" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="acceuil"><img src="image/uvt.jpg"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="accueil">Home</a></li>
          <li><a href="https://www.uvt.td/">À propos </a></li>
          <li><a href="connecter">Postuler</a></li>
          <li><a href="liste">Listes de candidat</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          @yield('contenu')

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(slide/slide-1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">BIENVENUE <span class="text-primary">Université Virtuelle du Tchad</span></h2>
                <p class="animate__animated animate__fadeInUp ">L'Université Virtuelle du tchad a pour mission d'assurer
                  un enseignement virtuel et de proposer à travers ses
                  plateformes technologiques des réssources scientifique
                  et pédagogique</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
              <i class="bi bi-card-checklist" style="color: #4a5aff;"></i>
              <h3><a href="">EDUCATION</a></h3>
              <p>Les sciences de l’éducation concernent l’étude de différents aspects de l’éducation, et font appel à diverses disciplines : histoire de l'éducation, sociologie de l'éducation, didactique des disciplines, psychologie des apprentissages, pédagogie, ou encore philosophie.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-3 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart" style="color: #4a5aff;"></i>
              <h3><a href="">INFORMATIQUE</a></h3>
              <p>L'informatique est un domaine d'activité scientifique, technique, et industriel concernant le traitement automatique de l'information numérique par l'exécution de programmes informatiques hébergés par des dispositifs électriques-électroniques : des systèmes embarqués, des ordinateurs, des robots, des automates, etc.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-3 mt-lg-0">
            <div class="icon-box">
              <i class="bi-regular bi-wallet" style="color: #4a5aff;"></i>
              <h3><a href="">ECONOMIE</a></h3>
              <p>est une discipline qui étudie l'économie en tant qu'activité humaine, qui consiste en la production, la distribution, l'échange et la consommation de biens et de services.</p>
            </div>
          </div>
        </div>

      </div>

</body>

</html>