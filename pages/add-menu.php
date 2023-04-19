<?php 
include('db.php');
if(isset($_POST['sub'])){
  $foodname = $_POST['foodname'];
 $category = $_POST['category'];
 $price = $_POST['price'];
  $sl = "insert into food(foodname,category,price) values('$foodname', '$category', $price)";
  if(mysqli_query($conn,$sl)){
    echo "<script>alert('Food added sucessfully');</script>";
    header('Location:view-menu.php');
    die();
    }
  else{
    echo "<script>alert('Please fill fields carefully');</script>";
  }
}
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
       <link rel="stylesheet" href="../css/bootstrap.css">
       <!-- Default stylesheet -->
       <link rel="stylesheet" href="../css/main.css">
     </head>
     <body id="top">
       <header>
         <!-- NAVBAR -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
           <a class="navbar-brand animated pulse" href="#">
             <img src="../media/brand/logo-dark.svg" width="30" height="30" alt="Logo">
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
                 <a class="nav-link dropdown-toggle" href="pages/food.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Menu
                 </a>
                 <div class="dropdown-menu text-center text-lg-left" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="pages/add-menu.php">Add</a>
                   <a class="dropdown-item" href="pages/view-menu.php">View</a>
                 </div>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="pages/about.php">About</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="pages/contact.php">Contact</a>
               </li>
             </ul>
            
           </div>
         </nav>
       </header>
       <main>
      <!-- RESERVATIONS FORM -->
      
        <form action="" method="post">
        <center>
            <h1 id="title-1">Add</h1> 
          <div class="form-row">
            <div class="form-group col-md-3">
              <div class="row" style="margin-top: 6px;">
                <div class="col-sm-3">
                  <label for="inputName">Category</label>
                </div>
                <div class="col-sm-9" >
                  <select class="form-select" aria-label="Default select example" name="category">
                    <option selected>Select Category</option>
                    <option value="food">Food</option>
                    <option value="dessert">Desserts</option>
                    <option value="drink">Drinks</option>
                  </select>
                </div>
                <div class="col-sm-3">
                  <label for="inputName">Name</label>
                </div>
                <div class="col-sm-9" >
                  <input type="text" class="form-control" id="inputName" placeholder="Abc" name="foodname" >
                </div>
              </div>
            </div>
           
         
           
            <div class="form-group col-md-3">
              <div class="row" style="margin-top: 6px;">
                <div class="col-sm-3">
              <label for="inputPhone">Price</label>
            </div>
            <div class="col-sm-9">
              <input type="number" class="form-control"placeholder="0" name="price">
             
            </div>
          </div>
        </div>
      
      </div>
      
          <button style="margin: 6px 6px; font-weight:bolder;" type="submit" name="sub" class="btn btn-primary">ADD</button>
        </center> 
        </form >
      </div>
      <br><br><br><br><br><br><br><br>

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