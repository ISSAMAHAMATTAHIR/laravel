<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/simple-datatables/style.css" rel="stylesheet">


  <link href="style.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex justify-content-center py-2">
                    <p class="logo d-flex align-items-center w-auto">
                      <img src="image/cnps.png" alt="">
                    </p>
                  </div>

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Modifier un employé</h5>
                    <p></p>
                  </div>

                  <form action="/update_employe" class="row g-3 needs-validation" method="POST" enctype="multipart/form-data">
                  
				            	{{ @csrf_field() }}
                    <input type="text" name="id"style="display:none;" value="{{ $employes->id }}">
                      <div class="col-12">
                        <label for="yourName" class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" id="yourName" required value="{{ $employes->nom }}">
                      </div>
                      @if($errors->has('nom'))
                      <p class="help is danger"> {{ $errors->first('nom') }}</p>
                      @endif

                    <div class="col-12">
                      <label for="yourPrenom" class="form-label">Prenom</label>
                      <input type="text" name="prenom" class="form-control" id="yourPrenom" required value="{{ $employes->prenom }}">
                    </div>
                    @if($errors->has('prenom'))
                    <p class="help is danger"> {{ $errors->first('prenom') }}</p>
                    @endif

                    <div class="col-12">
                      <label for="yourSexe" class="form-label">Sexe</label>
                      <input type="text" name="sexe" class="form-control" id="yourSexe" required value="{{ $employes->sexe }}">
                    </div>
                    @if($errors->has('sexe'))
                    <p class="help is danger"> {{ $errors->first('sexe') }}</p>
                    @endif

                    <div class="col-12">
                      <label for="yourDate" class="form-label"> Date </label>
                      <input type="date" name="date" class="form-control" id="yourDate" required value="{{ $employes->date }}">
                    </div>
                    @if($errors->has('date'))
                    <p class="help is danger"> {{ $errors->first('date') }}</p>
                    @endif

                  <div class="col-12">
                    <label for="yourLieu" class="form-label">Lieu de Naissance</label>
                    <input type="text" name="lieu" class="form-control" id="yourLieu" required value="{{ $employes->lieu }}">
                  </div>
                  @if($errors->has('lieu'))
                  <p class="help is danger"> {{ $errors->first('lieu') }}</p>
                  @endif

                  <div class="col-12">
                    <label for="yourAge" class="form-label">Age</label>
                    <input type="text" name="age" class="form-control" id="yourAge" required value="{{ $employes->age }}">
                  </div>
                  @if($errors->has('age'))
                  <p class="help is danger"> {{ $errors->first('age') }}</p>
                  @endif

                  <div class="col-12">
                    <label for="yourPro" class="form-label">Profession d'avant</label>
                    <input type="text" name="profession" class="form-control" id="yourPro" required value="{{ $employes->profession }}">
                  </div>
                  @if($errors->has('profession'))
                  <p class="help is danger"> {{ $errors->first('profession') }}</p>
                  @endif

                <div class="col-12">
                  <label for="yourPaye" class="form-label">Payement mansuelle avant retraite </label>
                  <input type="text" name="paye" class="form-control" id="yourPaye" required value="{{ $employes->paye }}">
                </div>
                @if($errors->has('paye'))
                <p class="help is danger"> {{ $errors->first('paye') }}</p>
                @endif

                <div class="col-12">
                  <label for="yourRetraite" class="form-label">Date de retraite</label>
                  <input type="text" name="retraite" class="form-control" id="yourRetraite" required value="{{ $employes->retraite }}">
                </div>
                @if($errors->has('retraite'))
                <p class="help is danger"> {{ $errors->first('retraite') }}</p>
                @endif

                    <div class="col-12">
                      <label for="yourAdresse" class="form-label">Adresse</label>
                      <input type="text" name="adresse" class="form-control" id="yourAdresse" required value="{{ $employes->adresse }}">
                    </div>
                    @if($errors->has('adresse'))
                    <p class="help is danger"> {{ $errors->first('adresse') }}</p>
                    @endif

                    <div class="col-12">
                      <label for="yourPhoto" class="form-label">Photo</label>
                      <input type="file" name="photo" class="form-control" id="yourPhoto" required value="{{ $employes->photo }}">
                    </div>
                    @if($errors->has('photo'))
                    <p class="help is danger"> {{ $errors->first('photo') }}</p>
                    @endif

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Modifier le compte</button>
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
  <script src="vendor/apexcharts/apexcharts.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/chart.umd.js"></script>
  <script src="vendor/echarts/echarts.min.js"></script>
  <script src="vendor/quill/quill.min.js"></script>
  <script src="vendor/simple-datatables/simple-datatables.js"></script>
  <script src="vendor/tinymce/tinymce.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>