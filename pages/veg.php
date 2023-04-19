<?php include "header.php";?>
    <main>

      <!-- FOOD: JUMBOTRON -->
      <div class="jumbotron food-jumbotron text-black" style="background-color:rgb(248, 248, 248)">
        <div class="food-jumbotron-caption container">
          <h1 id="title-1" class="special-title-2">Food Menu</h1>
        </div>
      </div>
      <!-- FOOD: DESCRIPTIONS -->
      <div class="food-descriptions container"> 
        <!-- BREAKFASTS -->
        <hr class="food-horizontal-rule">
          <div class="row align-items-center menu-item">
            <div class="col-md-3 food-image">
              <img 
            src="images/breakfast/breakfast.jpg" length="250" width="250"
            alt="BREAKFASTS"
            class="rounded-circle lazyload">
            </div>
            <div class="card-body">
            <center>  <h2 class="card-title font-weight-bold">BREAKFASTS</h2>
              <p class="card-text">
              </p>
              <a href="mains-breakfasts.php" class="btn btn-outline-dark" role="button">View</a></center>
            </div>
          </div>

           <!-- VEG RICE -->
        <hr class="food-horizontal-rule">
        <div class="row align-items-center menu-item">
          <div class="col-md-3 food-image">
            <img 
          src="images/vegrice/vegrice.jpg" length="250" width="250"
          alt="VEG RICE"
          class="rounded-circle lazyload">
          </div>
          <div class="card-body">
          <center>  <h2 class="card-title font-weight-bold">VEG RICE</h2>
            <p class="card-text">
            </p>
            <a href="vegrice.php" class="btn btn-outline-dark" role="button">View</a></center>
          </div>
        </div>
         <!-- VEG CURRIES -->
         <hr class="food-horizontal-rule">
         <div class="row align-items-center menu-item">
           <div class="col-md-3 food-image">
             <img 
           src="images/vegcurries.jpg" length="250" width="250"
           alt="VEG CURRIES"
           class="rounded-circle lazyload">
           </div>
           <div class="card-body">
           <center>  <h2 class="card-title font-weight-bold">VEG CURRIES</h2>
             <p class="card-text">
             </p>
             <a href="vegcurries.php" class="btn btn-outline-dark" role="button">View</a></center>
           </div>
         </div>
           <!-- Roti -->
           <hr class="food-horizontal-rule">
           <div class="row align-items-center menu-item">
             <div class="col-md-3 food-image">
               <img 
             src="images/roti.jpg" length="250" width="250"
             alt="VEG CURRIES"
             class="rounded-circle lazyload">
             </div>
             <div class="card-body">
             <center>  <h2 class="card-title font-weight-bold">ROTI</h2>
               <p class="card-text">
               </p>
               <a href="roti.php" class="btn btn-outline-dark" role="button">View</a></center>
             </div>
           </div>
 

        <!-- BURGERS -->
        <hr class="food-horizontal-rule">
          <div class="row align-items-center menu-item">
            <div class="col-md-3 food-image">
              <img 
            src="images/burger/burger.jpg" length="250" width="250"
            alt="Burger"
            class="rounded-circle lazyload">
            </div>
            <div class="card-body">
            <center>  <h2 class="card-title font-weight-bold">BURGERS</h2>
              <p class="card-text">
              </p>
              <a href="burgers.php" class="btn btn-outline-dark" role="button">View</a></center>
            </div>
          </div>
          <center><a href="food.php" style="margin: 6px 6px; font-weight:bolder;" type="submit" class="btn btn-primary">back</a> </center> 
      </div>
    </body>
    <?php include "footer.php";?>