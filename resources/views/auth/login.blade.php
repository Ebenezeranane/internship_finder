<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/login.css">
  <title>Login</title>
</head>
<body>
    <!--Header-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="home.blade.php"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link "><label style="font-weight: lighter;">Contact Us</label> | +233 249 805 964</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>

    <!--Background-->
    <div class="row bg">
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5" style="margin-top:250px;margin-left:65px">
                        <div class="card shadow-lg">
                            <div class="card-header text-center text-white " style="background-color: coral">{{ __('Login') }}</div>
        
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
        
                                    <div class="form-group row">
                                        <label for="email"
                                               class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                        <div class="col-md-8">
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                                   value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="password"
                                               class="col-md-4 col-form-label text-md-right mt-3 mb-3">{{ __('Password') }}</label>
        
                                        <div class="col-md-8 mt-3 mb-3">
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                                   required autocomplete="current-password">
        
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
        
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        
                                        <div class="col-md-8 offset-md-4 mt-5">
                                        
                                        <span><strong>Not Registered? </strong></span><a href="/register" class="btn btn-primary">Sign Up</a>
                                           
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
      </div>

     <!--Footer-->
     <footer>
        <div class="container-fluid p-0">
           <div class="row text-left">
             <div class="col-md 5 col-md-5">
               <h1 class="text-light">About Us</h1>
               <p class="text-muted">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia itaque, cum et doloremque atqu
               </p>
               <p class="pt-4 text-muted">
                 Copyright 2021 | <span>Final Project</span> 
               </p>
             </div>
             <div class="col-md-5">
               <h4 class="text-light">Newsletter</h4>
               <p class="text-muted">Stay Updated</p>
               <form class="from-inline">
                 <div class="col-pl">
                   <input type="text" class="form-control bg-dark text-white" placeholder="Email">
                   <div class="div input-group-prepend">
                     <div class="input group-text">
                       <i class="fas fa-arrow-right"></i>
                     </div>
                   </div>
                 </div>
               </form>
             </div>
             <div class="col-md 2 col-sm-12">
              <h4 class="text-light">Call Us</h4>
              <p class="text-muted">Let's Interact</p>
              <div class="column" style="color: coral;">+233 249 805 694</div>
             </div>
           </div>
        </div>
      </footer>
  
  
    <!-- Option 2: Separate Popper and Bootstrap JS -->
      
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>  
</body>
</html>



