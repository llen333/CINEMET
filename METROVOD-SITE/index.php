<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./style.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">


    <!-- Bootstrap bootstrap-touch-slider Slider Main Style Sheet -->
    <link href="bootstrap-touch-slider.css" rel="stylesheet" media="all">

    
                            <title>METROVOD</title>
  </head>

  <body>
    <header id="header">
      <nav>
        <ul>
          <li><a href="#header">ACCUEIL</a></li>
          <li><a href="#one">LES FILMS</a></li>
          <li><a href="#two">LES NEWS</a></li>
          <li><a href="#three">NOUS CONTACTER</a></li>
        </ul>
      </nav>
    </header>
    
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>
    
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">
    
                <!-- Third Slide -->
               <div class="item active">
    
                    <!-- Slide Background -->
                    <img src="images/BLOODSH1.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
    
                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_left">
                                <h1 data-animation="animated zoomInRight">Bidouille land</h1>
                                <p data-animation="animated fadeInLeft">Un Film plein de faux code, copié et c'est moi qui l'ai fait.</p>
                                <a href="bande_annonce.php#bande_annonce"   class="btn btn-default" data-animation="animated fadeInLeft">Voir</a>
                                <a href="bande_annonce.php#bande_annonce"   class="btn btn-primary" data-animation="animated fadeInRight">Infos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->
    
                <!-- Second Slide -->
                <div class="item">
    
                    <!-- Slide Background -->
                    <img src="images/slide1a.jpeg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated flipInX">Le Boostratotor</h1>
                        <p data-animation="animated lightSpeedIn">Tout sur Boostrap en 14 Secondes chrono.</p>
                        <a href="bande_annonce.php#bande_annonce"   class="btn btn-default" data-animation="animated fadeInLeft">Voir</a>
                        <a href="bande_annonce.php#bande_annonce"   class="btn btn-primary" data-animation="animated fadeInRight">Infos</a>
                    </div>
                </div>
                <!-- End of Slide -->
    
                <!-- Third Slide -->
                <div class="item">
    
                    <!-- Slide Background -->
                    <img src="images/avatarhd (1).jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right">
                        <h1 data-animation="animated zoomInLeft">Avatard 22 </h1>
                        <p data-animation="animated fadeInRight">Après 10 ans de confinement, enfin il sort... Et Nous aussi !</p>
                        <a href="bande_annonce.php#bande_annonce"   class="btn btn-default" data-animation="animated fadeInLeft">Voir</a>
                        <a href="bande_annonce.php#bande_annonce"   class="btn btn-primary" data-animation="animated fadeInRight">Infos</a>
                    </div>
                </div>
    
                      <!-- End of Slide -->
    
                 <!-- End of Wrapper For Slides -->
    
            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
    
            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    
        </div> <!-- End  bootstrap-touch-slider Slider -->
</div>
    
    
    
    <section id="one">
        <div class="container1">
            <div class="test_text">Test Text</div>
            <div class="test_text2">Test Text 2</div>
            <div class="test_text3">Test Text 3</div>
            <div class="test_text4">Test Text 4</div>
        </div>

        <div class= "container2">
            <div class="test_text5">Test Text 5</div>
            <div class="test_text6">Test Text 6</div>
            <div class="test_text7">Test Text 7</div>
            <div class="test_text8">Test Text 8</div>
        </div>
    </section>

    <section id="two"><h1>NEWS</h1></section>
    <section id="three"><h1>NOUS CONTACTER</h1></section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
    

    <!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
    <script src="bootstrap-touch-slider.js"></script>
    
    <script type="text/javascript">
        $('#bootstrap-touch-slider').bsTouchSlider();
    </script>
    
    

    <script src="./app.js"></script>
  </body>
</html>