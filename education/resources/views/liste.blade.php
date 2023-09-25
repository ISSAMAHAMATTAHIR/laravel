<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1 class="text-primary" style="border:2px solid rgb(93, 93, 252);text-align:center;">Liste des candidats </h1>
	<div class="col-12 d-flex justify-content-end mb-2"> 
	</div>
		<table class="table table-bordered table-striped table-hover">
		  <thead class="bg-primary text-white">
			<tr>
              <th>E-MAIL</th>
			  <th>NOM</th>
			  <th>PRENOM</th>
              <th>AGE</th>
              <th>GENRE</th>
			  <th>FILIERE</th>
			  <th>MOYENNE LICENCE</th>
			  <th width="210px">Opérations</th>
			</tr>
		  </thead>
		  <tbody>
			@foreach($compte as $comptes)
			<tr class="success">
			  <td>{{ $comptes->email }}</td>
			  <td>{{ $comptes->nom }}</td>
			  <td>{{ $comptes->prenom }}</td>
              <td>{{ $comptes->date }}</td>
              <td>{{ $comptes->genre }}</td>
			  <td>{{ $comptes->filiere }}</td>
			  <td>{{ $comptes->moyenne }}</td>
			
            
			 <td>
				 <a class="btn btn-outline-primary sm" href="#">Modifier</a>
				 <a class="btn btn-outline-danger sm" href="#" onclick="return confirm('Etes-vous sûr de vouloir supprimer ce candidat ?')">Supprimer</a>
			 </td>
			</tr>
			@endforeach
		  </tbody>
		</table>
</body>
</html>