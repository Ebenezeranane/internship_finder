<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <title>Home</title>
</head>
<body data-barba="wrapper">

    <!--Header-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/service">Service</a>
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

  <!--Background-->
<div class="row bg">
  <div class="container">
      <div class="text">
          <h4>Welcome to</h4>
          <h1>INTERNSHIP FINDER</h1>
          <p  >Internship Finder is a web application that seeks to give its users the chance and 
            ease of finding it less difficult to intern with reputable and top-notch firms for 
            internship opportunities inside the country. 
          </p>
          <p class="reliable" data-aos="fade-left"   data-aos-duration="3000">Reliable. <label style="color: coral; font-weight: bold;">Secured.</label> Trusted!</p>
          <a href="blog.html" class="btn btn-primary" data-aos="fade-right" data-aos-duration="3000">Read More</a>
          
      </div>
  </div>
</div>

<section class="section-1">

  <!--Our Missions-->
  <div class="container1 text-center">
    <div class="div row">
      <div class="div col-md-6">
        <div class="pray">
          <img src="img/missions.jpg" data-aos="zoom-in" data-aos-duration="2000">
        </div>
      </div>
      <div data-aos="fade-up" data-aos-duration="2500" class="div col-md-5">
        <div class="div panel text-left">
          <h1 style="color: coral ;">Our Mission.</h1>
          <p class="pt-4">
            Internship Finder web app is aimed at providing a friendly platform where 
            companies would advertise internship opportunities of their reputable 
            organizations to students who would be interested in undertaking an 
            internship opportunity from such companies. 
          </p>
          <p class="pt-4" >
            To help increase the number of students who actively engage in internship 
            during vacation, to help them get acquainted to the real world and have 
            the required work experience needed for future endeavors.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

    <!--Reader's Comment-->
    <section class="section-4">
      <div class=" col-md- 6 text-center">
        <h1 class="text-dark">What Our Interns Say About Us</h1>
        <p class="text-secondary" style="color: coral;">How Internship Finder Helped Them Realize Their Dream .</p>
      </div>
      <div class="team row" >
        <!--Card 1-->
        <div class="col-md-4 col-12 text-center" data-aos="fade-up" data-aos-duration="2500">
          <div class="card mr-2 d-inline-block shadow-lg">
            <div class="card-img-top">
              <img src="img/carousel2.jpg" class="img-fluid">
            </div>
            <div class="card-body">
              <h3 class="card-title">Nana Yaw Owusu</h3>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Accusantium in similique illo sequi rerum quod dolore a, 
              alias repellendus soluta repellat esse cum aperiam. Ut nemo consequuntur neque esse ipsum.</p>
              <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
              <p class="text-black-50">CEO at Coca-Cola</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <!--Carousel Started-->
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-aos="fade-down" data-aos-duration="2500">
            <div class="carousel-inner">
              <div class="carousel-item active text-center">
                  <!--Card 2-->
                  <div class="card mr-2 d-inline-block shadow-lg">
                    <div class="card-img-top">
                      <img src="img/carousel1.jpg" class="img-fluid">
                    </div>
                    <div class="card-body">
                      <h3 class="card-title">Michael Ohene Adjei</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Accusantium in similique illo sequi rerum quod dolore a, 
                      alias repellendus soluta repellat esse cum aperiam. Ut nemo consequuntur neque esse ipsum.</p>
                      <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                      <p class="text-black-50">CEO at Coca-Cola</p>
                    </div>
                  </div>
              </div>
              <div class="carousel-item text-center">
                <!--Card 3-->
                <div class="card mr-2 d-inline-block shadow-lg" data-aos="fade-up" data-aos-duration="2500">
                  <div class="card-img-top">
                    <img src="img/carousel3.jpg" class="img-fluid">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Asare Kwakye Justice</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                      Accusantium in similique illo sequi rerum quod dolore a, 
                    alias repellendus soluta repellat esse cum aperiam. Ut nemo consequuntur neque esse ipsum.</p>
                    <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                    <p class="text-black-50">CEO at Coca-Cola</p>
                  </div>
                </div>
            </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12 text-center">
            <!--Card 4-->
            <div class="card mr-2 d-inline-block shadow-lg" data-aos="fade-up" data-aos-duration="2500">
              <div class="card-img-top">
                <img src="img/carousel2.jpg" class="img-fluid">
              </div>
              <div class="card-body">
                <h3 class="card-title">Michael Amoakwaa</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Accusantium in similique illo sequi rerum quod dolore a, 
                alias repellendus soluta repellat esse cum aperiam. Ut nemo consequuntur neque esse ipsum.</p>
                <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                <p class="text-black-50">CEO at Coca-Cola</p>
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
  
<!-- JS links -->
<!-- Barba Core -->
<script src="https://unpkg.com/@barba/core"></script>

<!-- AOS scroll anim -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<!-- GSAP for animation -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
<script src="app.js"></script>
</body>
</html>