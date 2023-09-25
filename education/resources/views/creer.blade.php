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
        <section>
            <div class="sec-container bg-primary">
                <div class="form-wrappers bg-primary">
                    <div class="card bg-primary">
                        <div class="card-body" id="formContainer">
                          <form action="creer" method="POST" class="bg-primary">
                            {{ @csrf_field() }}
                            <h2> COMPTE </h2>
                            <div class="inputbox">
                                <p> <span>E-MAIL</span><br><input type="text" class="inp" name="email" placeholder=" E-MAIL"></p>
                                  @if($errors->has('email'))
                                    <p class="help is danger"> {{ $errors->first('email') }}</p>
                                  @endif
                            </div>
                                <div class="inputbox">
                                    <p> <span>PASSWORD</span><br><input type="password" class="inp" name="password" placeholder="  PASSWORD"></p>
                                      @if($errors->has('password'))
                                         <p class="help is danger"> {{ $errors->first('passsowrd') }}</p>
                                      @endif
                            </div>
                            <div class="inputbox">
                                <p><span>PASSWORD_CONFIRMATION</span><br><input type="password" class="inp" name="password_confirmation" placeholder=" PASSWORD_CONFIRMATION"></p>
                                  @if($errors->has('password_confirmation'))
                                     <p class="help is danger"> {{ $errors->first('passsowrd_confirmation') }}</p>
                                  @endif
                        </div>
                        <div class="bout">
                            <input type="submit" value="S'inscrire">
                             </div>
                        </form>
                         </div>
                </div>
            </div>
        </section>

    </div>
   
</body>
</html>