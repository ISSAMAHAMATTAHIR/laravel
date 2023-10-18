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
        <li><a href="/" class="nav-link scrollto"><i class="fa-solid fa-user fa-bounce"></i><span>Acceuil</span></a></li>
        <li><a href="ajouter" class="nav-link scrollto"><i class="fa-solid fa-user-plus fa-bounce"></i><span>Ajouter un employé</span></a></li>
        <li><a href="deconnexion" class="nav-link scrollto"><i class="fa-solid fa-right-to-bracket fa-bounce"></i><span>deconexion</span></a></li>
      </ul>
    </nav>

  </header>

  <table class="table">
    <thead  class="p-3 mb-2 bg-warning text-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">sexe</th>
        <th scope="col">date</th>
        <th scope="col">lieu</th>
        <th scope="col">age</th>
        <th scope="col">photo</th>
        <th scope="col">options</th>
        <th scope="col">detail</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employe as $employes)
      <tr class="success">
        <td>{{ $employes->id }}</td>
        <td>{{ $employes->nom }}</td>
        <td>{{ $employes->prenom }}</td>
        <td>{{ $employes->sexe }}</td>
        <td>{{ $employes->date }}</td>
        <td>{{ $employes->lieu }}</td>
        <td>{{ $employes->age }}</td>
        <td><img src="{{ asset('employes->photo') }}" class="rounded-circle"></td>
        
        </td>
        <td>
          <a class="btn btn-outline-primary sm" href="update_employe/{{$employes->id}}"><i class="fa-solid fa-pen-to-square fa-bounce"></i></a>
          <a class="btn btn-outline-danger sm" href="delete_employe/{{$employes->id}}" onclick="return confirm('Etes-vous sûr de vouloir supprimer ce candidat ?')"><i class="fa-solid fa-trash fa-bounce"></i></a>
        </td>
        <td><a class="btn btn-outline-primary sm" href="#">detail</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>


  
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/typed.js/typed.umd.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>