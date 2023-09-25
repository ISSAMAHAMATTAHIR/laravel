<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/compte.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <section>
            <div class="sec-container bg-primary">
                <div class="form-wrappers bg-primary">
                    <div class="card bg-primary">
                        <div class="card-body" id="formContainer">
                            <P><form action="connecter" method="POST"></P>
                                {{ @csrf_field() }}
                                <h2>LOG IN </h2>
                                <div class="inputbox">
                                    <p><span>E-MAIL</span><br><i class="fa-regular fa-envelope"></i> <input type="text" class="inp" name="email"></p>
                                      @if($errors->has('email'))
                                        <p> {{ $errors->first('email') }}</p>
                                      @endif
                                </div>
                                    <div class="inputbox">
                                    <P><span>PASSWORD</span><br><i class="fa-solid fa-lock"></i> <input type="password" class="inp" name="password"></P>
                                          @if($errors->has('password'))
                                            <p> {{ $errors->first('passsowrd') }}</p>
                                          @endif
                                        
                                </div>
                                    <div class="bout">
                                    <input type="submit" value="Connecter"><input type="reset" value="Retour"><i class="fa-solid fa-reply-all"></i>
                                    <p><a href="oublier">password </a>
                                    <a href="creer">creer un compte</a></p>
                                     </div>
                                </div>
                </form>
                    
</body>
</html>



        