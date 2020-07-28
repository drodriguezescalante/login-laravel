<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-signin-client_id" content="452996448359-ennjmvmjdnsggba6hh8595lc0kabk9er.apps.googleusercontent.com">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="{{asset('css/ico-moon.css')}}" rel="stylesheet" type="text/css">
    <!-- Position.css -->
    <link href="{{asset('css/position.css')}}" rel="stylesheet" type="text/css">
    <title>Login</title>

    <style>
        .container-fluid {
            background-color:white;
        }
        .btn{
            padding:8px;
            border-radius:15px;
        }
        .icon-laravel{
            font-size:500%;
        }
        .icon-google2{
            font-size:120%;
            margin:20px;
        }
        .icon-facebook2{
            font-size:120%;
            margin:20px;
        }
        form{
            padding:10px;
        }
        
    </style>
  </head>
  <body>
    <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-5 p-5" style="background-color:#2c314e;height:100vh;">
                    <div class="mt-5">
                        <div class="row justify-content-center align-items-center mt-5">   
                            <i class="icon-laravel"></i>
                        </div>
                        <div class="row justify-content-center align-items-center mt-3">   
                            <label class="text-white" for="icon-laravel">Sign in using a social media.</label>
                        </div>  
                        <div class="row justify-content-center align-items-center mt-5">
                            <a href="{{ url('/auth/redirect/google') }}" class="btn btn-secondary btn-block btn-signin">
                                <i class="icon-google2"></i>
                                <label for="icon-google2">Sign in with Google</label>
                            </a>
                        </div>
                        <div class="row justify-content-center align-items-center mt-5">
                            <a href="#" class="btn btn-secondary btn-block btn-signin">
                                <i class="icon-facebook2"></i>
                                <label for="icon-facebook2">Sign in with Facebook</label>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col p-5">
                    <div class="center">
                        <h3>Login to your account</h3>
                        <label>Don´t have an account? <a href="{{ route('register') }}">Sign up free!</a></label>
                    </div>
                    <form>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
            </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>