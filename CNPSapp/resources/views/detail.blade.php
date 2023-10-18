<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <title>detail </title>
</head>
<body>
    <div class="row">
        <div class="col-sm-2"></div>
        
      
    <div class="shadow p-4 mb-5 bg-body rounded col-md-8">
        <center>
    
            <h3>Details d'un employé</h3>
            <div class="col-12 d-flex float-left mb-2"><img src="{{ $employes->photo }}" width="250px"  ></div>
        </br>
        <table class="table table-bordered table-striped table-hover">
            <tbody>            
              <tr class="success"> 
                  <td><strong>ID: </strong>{{ $employes->id}}</td>
              </tr>
    
                <tr class="success"> 
                  <td><strong>Nom :</strong> {{ $employes->nom }}</td>
              </tr>

              <tr class="success"> 
                <td><strong>Prenom:</strong> {{ $employe->prenom }}</td>
              </tr>
    
                <tr class="success"> 
                  <td><strong>Sexe:</strong> {{ $employe->genre }}</td>
              </tr>
    
    
          <tr class="success"> 
            <td><strong>Status:</strong> {{ $employe->status }}</td>
          </tr>
          <tr class="success"> 
            <td><strong>Telephone:</strong> {{employe.adresse.telephone}}</td>
          </tr>
          <tr class="success"> 
            <td><strong>Email:</strong> {{employe.adresse.email}}</td>
          </tr>
    
          <tr class="success"> 
            <td><strong>Quartier:</strong> {{employe.adresse.quartier}}</td>
          </tr>
    
          <tr class="success"> 
            <td><strong>Ville:</strong> {{employe.adresse.ville}}</td>
          </tr>
    
            </tbody>
        </table>
    
            <div class="col-12 d-flex justify-content-end mb-2">
                <a class="btn btn-info sm mx-2" href="#"> Retour </a>
            </div>
    
        </center>
    </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>