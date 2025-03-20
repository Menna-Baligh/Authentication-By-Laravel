<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Home Page</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href={{ asset("images/2.png") }} type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset("css/bootstrap.min.css") }}>
    <link rel="stylesheet" href={{ asset("css/animate.css") }}>
    <link rel="stylesheet" href={{asset("css/LineIcons.css")}}>
    <link rel="stylesheet" href={{ asset("css/owl.carousel.css") }}>
    <link rel="stylesheet" href={{ asset("css/owl.theme.css") }}>
    <link rel="stylesheet" href={{ asset("css/magnific-popup.css") }}>
    <link rel="stylesheet" href={{ asset("css/nivo-lightbox.css") }}>
    <link rel="stylesheet" href={{ asset("css/main.css") }}>    
    <link rel="stylesheet" href={{ asset("css/responsive.css") }}>

  </head>
  
  <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area">    
      <div class="overlay">
        <span></span>
        <span></span>
      </div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="#" class="navbar-brand"><img src={{ asset("images/logo.png") }} alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                  
                  <li class="nav-item">
                    <form action={{ route('Logout') }} method="post">
                      @csrf
                      <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                  </li>  
              </ul>
          </div>
        </div>
      </nav>  
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">{{ "Welcome ".$userName }}</h2>
              
              <div class="header-button">
                <a href="#" rel="nofollow" target="_blank" class="btn btn-border page-scroll">Learn More</a>
              </div>
            </div>
          </div>
          
        </div> 
      </div>             
    </header>
    <!-- Header Section End --> 




    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src={{ asset("js/jquery-min.js") }}></script>
    <script src={{ asset("js/popper.min.js") }}></script>
    <script src={{ asset("js/bootstrap.min.js") }}></script>
    <script src={{ asset("js/owl.carousel.js") }}></script>      
    <script src={{ asset("js/jquery.nav.js") }}></script>    
    <script src={{ asset("js/scrolling-nav.js") }}></script>    
    <script src={{ asset("js/jquery.easing.min.js") }}></script>     
    <script src={{ asset("js/nivo-lightbox.js") }}></script>     
    <script src={{ asset("js/jquery.magnific-popup.min.js") }}></script>     
    <script src={{ asset("js/form-validator.min.js") }}></script>
    <script src={{ asset("js/contact-form-script.js") }}></script>   
    <script src={{ asset("js/main.js") }}></script>
    
  </body>
</html>