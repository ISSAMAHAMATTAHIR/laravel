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
  @if( session('success'))
<div class="alert alert-success mt-1" >
    {{ session('success') }}
</div>
@endif
<div class="box">
    <form action="creer" method="POST" class="bg-primary">
        {{ @csrf_field() }}
        <h2> CRÉER UN COMPTE </h2>
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
        <div class="inputbox">
            <input type="password" class="inp" name="password_confirmation">
              @if($errors->has('password_confirmation'))
                 <p class="help is danger"> {{ $errors->first('passsowrd_confirmation') }}</p>
              @endif
            <span>PASSWORD_CONFIRMATION</span>
        <i></i>
    </div>
    <div class="bout">
        <input type="submit" value="S'inscrire">
         </div>
    </form>
</div>

  
</body>
</html>