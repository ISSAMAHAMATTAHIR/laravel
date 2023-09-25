<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/connecter.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="box">
        <form action="" method="POST">
            {{ @csrf_field() }}
            <h2>LOG IN </h2>
            <div class="inputbox">
                <input type="text" class="inp" name="email">
                  @if($errors->has('email'))
                    <p class="help is danger"> {{ $errors->first('email') }}</p>
                  @endif
                <span>E-MAIL</span>
                <i></i>
            </div>
                <div class="inputbox">
                    <input type="password" class="inp" name="password">
                      @if($errors->has('password'))
                         <p class="help is danger"> {{ $errors->first('passsowrd') }}</p>
                      @endif
                    <span>PASSWORD</span>
                <i></i>
            </div>
                <div class="bout">
                <input type="submit" value="Connecter">
                 </div>
                 <div class="links">
                    <a href="oublier">password </a>
                    <a href="creer">creer un compte</a>
                </div>
            </div>
        </form>
    </div>    
</body>
</html>