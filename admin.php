 
 <?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Adithya Restaurant</title>
        <!-- Web app manifest -->
        <link rel='manifest' href='manifest.json'>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="./css/bootstrap.css">
        <!-- Default stylesheet -->
        <link rel="stylesheet" href="css/main.css">
      </head>
      <body id="top">
        <header>
          <!-- NAVBAR -->
          <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand animated pulse" href="#">
              <img src="media/brand/logo-dark.svg" width="30" height="30" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                  </a>
                  <div class="dropdown-menu text-center text-lg-left" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="pages/add-menu.php">Add</a>
                    <a class="dropdown-item" href="pages/view-menu.php">View-Food</a>
                    <a class="dropdown-item" href="pages/view-reservations.php">View reservations</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/about.php">About</a>
                </li>
                <li class="nav-item">
              <a class="nav-link" href="login.php"><?php if(isset($_SESSION['user'])) echo $_SESSION['user']; ?></a>
            </li>
              </ul>
             
            </div>
          </nav>
        </header>
        <main>
            <!-- COVER -->
      <div id="cover" class="cover carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#cover" data-slide-to="0" class="active"></li>
          <li data-target="#cover" data-slide-to="1"></li>
          <li data-target="#cover" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="dark-overlay carousel-item active">
            <img
              sizes="(max-width: 2560px) 100vw, 2560px"
              src="pages/images/location/loc3.jpg"
              alt="First slide">
            <div class="carousel-caption">
              <h1 class="brand-title display-2 ">Adithya</h1>
              <h4 class="brand-description">RESTAURANT</h4>
              
            </div>
          </div>
          <div class="dark-overlay carousel-item">
            <img
              sizes="(max-width: 2560px) 100vw, 2560px"
             
              src="pages/images/location/loc1.jpg"
              alt="Second slide">
            <div class="carousel-caption">
              <h1 class="brand-title display-2 ">Adithya</h1>
              <h4 class="brand-description">RESTAURANT</h4>
              
            </div>
          </div>
          <div class="dark-overlay carousel-item">
            <img
              sizes="(max-width: 2560px) 100vw, 2560px"
              
              src="pages/images/location/loc6.jpg"
              alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="brand-title display-2">Adithya</h1>
                <h4 class="brand-description">RESTAURANT</h4>
             
              </div>
            </div>
          </div>
           
            <div class="container">
              <div class="carousel-caption">
                <h1 class="brand-title display-2">Adithya</h1>
                <h4 class="brand-description">RESTAURANT</h4>
                
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#cover" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#cover" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
      <br> <br> <br> <br> <br> <br> <br> <br>
           <!-- Footer -->
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h5>OPENING HOURS</h5>
            <p class="mb-0">Open daily from 8am</p> 
            <p class="mb-0">Bar: Daily from 8am - 12pm</p> 
            <p class="mb-0">Breakfast: Daily from 8am - 11am</p> 
            <p class="mb-0">Lunch: Daily from 12pm - 3pm</p>
            <p>Dinner: Daily from 6pm - 12pm</p>
          </div>
          <div class="col-md-3">
            <h5>LOCATION</h5>
            <address>
              Adithya Restaurant<br>
              H NO 2 75 2A<br>
              Nidle village And Post<br>
              Dharamasthala Road,<br>
              Belthangady Taluk,<br>
              Dharmasthala,<br>
              Karnataka 574216<br>
              <abbr title="Phone">P:</abbr> 094832 36236<br>
              <abbr title="Email">E:</abbr> info@grecko.com
            </address>
          </div>
          <div class="col-md-3">
            <h5>Legal</h5>
            <div class="mb-3">
                <p>Terms & Conditions</p>
                <p>Refund & Cancellation
                  Privacy Policy
                  </p>
                <p></p>
                <p>Cookie Policy</p>
            </div>
          </div>
          <div class="col-md-3">
            <h5>Contact</h5>
            <p>Help & Support</p>
            <p>Partner with us</p>
            <form id="newsletter-form">
             
          </div>
        </div>
      </div>
    </footer>
    <a id="back-to-top" class="back-to-top smooth-scroll" href="#top">
      <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
    </a>
    <!-- lazySizes -->
    <script src="js/lazysizes.min.js" async=""></script>
    <!-- jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
    </script>
    <!-- Bootstrap -->
    <script 
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
      crossorigin="anonymous">
    </script>
    <script src="js/site.js"></script>
    <script src="js/homepage-animations.js"></script>
  </body>
</html>