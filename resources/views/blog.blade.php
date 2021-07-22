<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/blog.css">
  <title>Blog</title>
</head>
<body>

    <!--Header-->
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
            <li class="nav-item">
              <a class="nav-link " href="/service">Service</a>
            </li>
            <li class="nav-item active">
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

<section class="blog-area section-gap" id="blog">
    <div class="container gap100">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading"> Our Blog</span>
          <hr>
          <h2 style="color: coral;">Recent Blogs</h2>
          
        </div>
      </div>
      <!--Row One-->
      <div class="row">
        <div class="col-lg-4 col-md-8 single-blog">
          <div class="thumb">
            <img src="img/scholsec.jpg" style="width: 100%">
          </div>
          
          <p class="date" style="color:coral ">11th June,2021</p>
          <h4><a href="https://ghanascholarshipsecretariat.com">Scholarship opportunity by Government of Ghana</a></h4>
          <p>We are an organisation under the office of the president established in 1960 and mandated to handle 
              and award government schorlarships for human resource development and growth of the country.
              The scholarship is only available to Ghanaians. Applicants must come from the 10 regions of Ghana. 
              Applicants must be pursuing any course of choice at the accredited public university.
              The Scholarships Secretariat was established in 1960, as an extra ministerial body under the office of the president.</p>
          <a href="https://ghanascholarshipsecretariat.com"><p style="color: #5b047c;">by  Ghana Scholarship Secretariat</p></a>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span>15 likes</p>
            <p><span class="lnr lnr-bubble"></span>02 Comments</p>
          </div>
          
        </div>
  
         <div class="col-lg-4 col-md-8 single-blog">
          <div class="thumb">
            <img src="img/knust.jpg" style="width: 100%">
          </div>
          <p class="date" style="color:coral ">12th June,2021</p>
          <h4><a href="https://myhealthbasics.site/list-of-public-universities-in-ghana/">Top 12 Public Universities In Ghana - 2021/2022</a></h4>
          <p>Public universities in Ghana are universities that are predominantly funded by public means through a 
              national or subnational government, as opposed to private universities. Whether a national university is 
              considered public varies from one country to another, largely depending on the specific education 
              landscape. In some parts of the world , public universities usually enjoy higher 
              reputation domestically. Many of the prominent public universities are ranked among the best in the country.</p>
          <a href=" https://myhealthbasics.site/list-of-public-universities-in-ghana/"><p style="color: #5b047c;"> University Ranker Ghana</p></a>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span>15 likes</p>
            <p><span class="lnr lnr-bubble"></span>02 Comments</p>
          </div>
          
        </div>
  
         <div class="col-lg-4 col-md-8 single-blog">
          <div class="thumb">
            <img src="img/blog3.jpg" style="width: 100%">
          </div>
          <p class="date" style="color:coral ">13th April,2021</p>
          <h4><a href="https://ghanadmission.com/knust-admission-form/">KNUST Admission Form 2021/2022 - Best Online Portal</a></h4>
          <p>The Admission Management of the Kwame Nkrumah University of Science and Technology (KNUST) has 
            released the Admission Form for 2021/2022 Academic year online. Applications are invited from 
            qualified and interested candidates for Kwame Nkrumah University of Science and Technology 
            2021/2022 admission.The KNUST admission forms price for the 2021/2022 academic year is GHC 220.00 
            for Ghanaian students. Apply Online. Click to begin the online application.</p>
          <a href="https://apps.knust.edu.gh"><p style="color: #5b047c;">by  KNUST Admissions</p></a>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span>15 likes</p>
            <p><span class="lnr lnr-bubble"></span>02 Comments</p>
          </div>
          
        </div>
        
      </div>
      <!--Row Two-->
      <div class="row">
        <div class="col-lg-4 col-md-8 single-blog">
          <div class="thumb">
            <img src="img/cause-4.jpg" style="width: 100%">
          </div>
          <p class="date" style="color:#fcb00c ">11th March,2020</p>
          <h4><a href="">Give One Year Scholarships for Children in Ghana</a></h4>
          <p>Since the beginning of PAAJAF Foundation in 2007, our priority has been to provide opportunity to disadvantaged children in Ghana of a better future through education. We proudly see our students taking new steps towards fresh directions in life in each year. Currently we have 145 students enrolled from 2,5 to 9 years of age - who likely wouldn't have access to education and a safe environment to play, with little hope to improve their future.</p>
          <a href=""><p style="color: #5b047c;">by  Paajaf Foundation</p></a>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span>15 likes</p>
            <p><span class="lnr lnr-bubble"></span>02 Comments</p>
          </div>
          
        </div>
  
         <div class="col-lg-4 col-md-8 single-blog">
          <div class="thumb">
            <img src="img/cause-5.jpg" style="width: 100%">
          </div>
          <p class="date" style="color:#fcb00c ">12th March,2020</p>
          <h4><a href="">Bring innovative libraries to 100,000 Africans</a></h4>
          <p>Well-trained librarians can help improve low literacy rates, improve education for thousands, and promote community development. However, Africa's librarians lack support. This project will train 20 librarians in leadership, innovation, and information, communications, and technology (ICT) through the International Network of Emerging Library Innovators-Sub-Saharan Africa (INELI-SSAf) program. This program has the potential to impact 100,000 individuals and advance libraries in Africa.</p>
          <a href="The African Library and Information Associations and Institutions (AfLIA"><p style="color: #5b047c;">The African Library and Information Associations and Institutions (AfLIA</p>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span>15 likes</p>
            <p><span class="lnr lnr-bubble"></span>02 Comments</p>
          </div>
          
        </div>
  
         <div class="col-lg-4 col-md-8 single-blog">
          <div class="thumb">
            <img src="img/cause-6.jpg" style="width: 100%">
          </div>
          <p class="date" style="color:#fcb00c ">13th March,2020</p>
          <h4><a href="">End Malnutrition for 600 Children in Ghana</a></h4>
          <p>Self-Help provides daily meals Monday - Friday to school children in Ghana. Feeding Quality Protein Maize (QPM) porridge to malnourished children improves their diets by enabling them to consume protein that is critical to brain development.</p>
          <a href=""><p style="color: #5b047c;">by  Self-Help International</p>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span>15 likes</p>
            <p><span class="lnr lnr-bubble"></span>02 Comments</p>
          </div>
          
        </div>
        
      </div>
    </div>
    
  </section>



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