
<?php
include('db.php');

  $sl = "select * from reservation";
 
  $result = mysqli_query($conn,$sl);
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
                 <a class="nav-link dropdown-toggle" href="food.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Menu
                 </a>
                 <div class="dropdown-menu text-center text-lg-left" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="add-menu.php">Add</a>
                   <a class="dropdown-item" href="view-menu.php">View-food</a>
                   <a class="dropdown-item" href="view-reservation.php">View-reservations</a>
                 </div>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="about.php">About</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="contact.php">Contact</a>
               </li>
             </ul>
            
           </div>
         </nav>
         <style>
          table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
          }
          
          td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
          }
          
          tr:nth-child(even) {
            background-color: #dddddd;
          }
          </style>
  
  
       </header>
       <main>
        
      <!-- view menu-->
      <center><h2>Reservaions</h2></center>
        <table>
            <tr>
              <th> Name</th>
              <th>Email</th>
              <th>Date</th>
              <th>Party of</th>
              <th>Phone</th>
              <th>Message</th>
            </tr>
            <?php while($rs=mysqli_fetch_array($result)){ ?>
            <tr>
              <td><?php echo $rs['name'] ?></td>
              <td><?php echo $rs['email'] ?></td>
              <td><?php echo $rs['date'] ?> </td>
              <td><?php echo $rs['count'] ?></td>
              <td><?php echo $rs['phone'] ?></td>
              <td><?php echo $rs['message'] ?> </td>
        
            </tr>
            <?php } ?>
          </table>
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