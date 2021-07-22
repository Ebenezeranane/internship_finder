<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/service.css">

    <title>Service</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link " href="/service">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/about">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/contact/create">Contact Us</a>
                </li>

                <li class="nav-item">
                  @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif
    
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>
    
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
    
                          <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
                </li>
              </ul>
            </div>
          </nav>
    </header>
<body>

  <section class="blog-area section-gap" id="blog">
    <div class="container gap100">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading" style="font-weight: bold; font-size: 70px;"> Apply Here!</span>
          <hr>
          <h2 style="color: coral; font-size: 30px; font-weight: lighter;">Opportunities all around Ghana</h2>
          
        </div>
      </div>
     
      <div class="row" style="padding-left: 90px;">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="img/voda.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Vodafone Ghana Internship Program 2021</h5>
                  <p class="card-text">Welcome to a period of self-actualisation, which we hope will result in the fine-tuning of your skills, 
                      clarifying your career goals, expanding your network of experienced professionals and 
                      making you the best version of yourself. </p>
                  <p><label style="font-size: small; font-weight: lighter;">Location:</label> <label style="font-size: large;">Accra</label></p>
                  <a href="/apply/create" class="btn btn-primary">Apply Now</a>
                </div>
              </div>                
          </div>

          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="img/knust.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Korle-Bu Teaching Hospital</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="/apply/create" class="btn btn-primary">Apply Now</a>
                </div>
              </div>                
          </div>

          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="img/knust.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">KNUST Administration</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="/apply/create" class="btn btn-primary">Apply Now</a>
                </div>
              </div>                
          </div>
      </div>
    
  </section>


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
</body>
</html>