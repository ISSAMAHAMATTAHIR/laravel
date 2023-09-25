<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/compte.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <section>
            <div class="sec-container bg-primary">
                <div class="form-wrappers bg-primary">
                    <div class="card bg-primary">
                        <p class="dep bg-white">DEPARTEMENT DE SCIENCE </p>
                        <div class="card-header bg-white">
                            
                            <div id="informatique" class="form-header active">INFORMATIQUE</div>
                            <div id="economie" class="form-header">ECONOMIE</div>
                            <div id="issa" class="form-header">EDUCATION</div>
                        </div>
                        <div class="card-body" id="formContainer">
                            <form action="compte" method="post" id="forInfo" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <p><label>E-mail</label><br><input type="text" name="email"  placeholder=" @E-MAIL"></p>
                                <p><label>NOM</label><br><input type="text" name="nom"  placeholder=" @NOM"></p>
                                <p><label>PRENOM</label><br><input type="text" name="prenom"  placeholder=" @PRENOM"></p>
                                <p><label>PARCOURS</label><br><input type="text" name="parcours"  placeholder=" @PARCOURS"></p>
                                <p><label>LIEU DE NAISSANCE</label><br><input type="text" name="lieu" placeholder="@LIEU DE NAISSANCE"></p>
                                <p><label>DATE DE NAISSANCE</label><br><input type="date" name="date" placeholder=" @DATE DE NAISSANCE"></p>
                                <p><label>GENRE</label><br> femme <input type="radio" name="genre" value="femme"> homme <input type="radio" name="genre" value="homme"></p>
                                <p><label> BACCALAREAT</label><br><input type="text" placeholder="MOYENNE GENERALE" name="bac"><br><input type="file" name="fichier"></p>
                                <p><label> LICENCE 1</label><br><input type="text" placeholder="MOYENNE GENERALE" name="l1"><br><input type="file" name="fichier1"></p>
                                <p><label> LICENCE 2</label><br><input type="text" placeholder="MOYENNE GENERALE" name="l2"><br><input type="file" name="fichier2"></p>
                                <p><label> LICENCE 3</label><br><input type="text" placeholder="MOYENNE GENERALE" name="l3"><br><input type="file" name="fichier3"></p>
                                <p>
                                    <p>FILIÉRE</p>
                                    <select name="filiere">
                                        <option name="filiere" value="securite informatique"> -------------------- </option>
                                        <option name="filiere" value="securite informatique"> SECURITÉ RESEAU</option>
                                        <option name="filiere" value="CYBERsecurite"> SECURITÉ LOGICIELLE</option>
                                    </select>
                                </p>
                                <button class="FormButton"> Envoyer</button>
                            </form>

                            <form action="compte" method="post" id="forEco" class="cacher" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <p><label>E-mail</label><br><input type="text" name="email"  placeholder=" @E-MAIL"></p>
                                <p><label>NOM</label><br><input type="text" name="nom"  placeholder=" @NOM"></p>
                                <p><label>PRENOM</label><br><input type="text" name="prenom"  placeholder=" @PRENOM"></p>
                                <p><label>PARCOURS</label><br><input type="text" name="parcours"  placeholder=" @PARCOURS"></p>
                                <p><label>LIEU DE NAISSANCE</label><br><input type="text" name="lieu" placeholder="@LIEU DE NAISSANCE"></p>
                                <p><label>DATE DE NAISSANCE</label><br><input type="date" name="date" placeholder=" @DATE DE NAISSANCE"></p>
                                <p><label>GENRE</label><br> femme <input type="radio" name="genre" value="femme"> homme <input type="radio" name="genre" value="homme"></p>
                                <p><label> BACCALAREAT</label><br><input type="text" placeholder="MOYENNE GENERALE" name="bac"><br><input type="file" name="fichier"></p>
                                <p><label> LICENCE 1</label><br><input type="text" placeholder="MOYENNE GENERALE" name="l1"><br><input type="file" name="fichier1"></p>
                                <p><label> LICENCE 2</label><br><input type="text" placeholder="MOYENNE GENERALE" name="l2"><br><input type="file" name="fichier2"></p>
                                <p><label> LICENCE 3</label><br><input type="text" placeholder="MOYENNE GENERALE" name="l3"><br><input type="file" name="fichier3"></p>
                                <p>
                                    <p>FILIÉRE</p>
                                    <select name="filiere">
                                        <option> ----------------------- </option>
                                        <option name="filiere" value="Analyse de Gestion de Projet"> ANALYSE DE GESTION DE PROJET</option>
                                        <option name="filiere" value="Edite control de projet"> EDITE CONTROLE DE PROJET</option>
                                        <option name='filiere'value="Gestion de Resource Humain"> GESTION DE RESSOURCE HUMAIN</option>
                                    </select>
                                </p>
                                <button class="FormButton"> Envoyer</button>
                            </form>

                            <form action="compte" method="post" id="forPeda" class="cacher" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <p><label>E-mail</label><br><input type="text" name="email"  placeholder=" @E-MAIL"></p>
                                <p><label>NOM</label><br><input type="text" name="nom"  placeholder=" @NOM"></p>
                                <p><label>PRENOM</label><br><input type="text" name="prenom"  placeholder=" @PRENOM"></p>
                                <p><label>PARCOURS</label><br><input type="text" name="parcours"  placeholder=" @PARCOURS"></p>
                                <p><label>LIEU DE NAISSANCE</label><br><input type="text" name="lieu" placeholder="@LIEU DE NAISSANCE"></p>
                                <p><label>DATE DE NAISSANCE</label><br><input type="date" name="date" placeholder=" @DATE DE NAISSANCE"></p>
                                <p><label>GENRE</label><br> femme <input type="radio" name="genre" value="femme"> homme <input type="radio" name="genre" value="homme"></p>
                                <p><label> BACCALAREAT</label><br><input type="text" placeholder="MOYENNE GENERALE" name="bac"><br><input type="file" name="fichier"></p>
                                <p><label> LICENCE 1</label><br><input type="text" placeholder="MOYENNE GENERALE" name="l1"><br><input type="file" name="fichier1"></p>
                                <p><label> LICENCE 2</label><br><input type="text" placeholder="MOYENNE GENERALE" name="l2"><br><input type="file" name="fichier2"></p>
                                <p><label> LICENCE 3</label><br><input type="text" placeholder="MOYENNE GENERALE" name="l3"><br><input type="file" name="fichier3"></p>
                                <p>
                                    <p>FILIÉRE</p>
                                    <select name="filiere">
                                        <option> -------------- </option>
                                        <option name="filiere" value="Pedagogie"> PEDAGOGIE </option>
                                    </select>
                                </p>
                                <button class="FormButton"> Envoyer</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <script src="js/js.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>