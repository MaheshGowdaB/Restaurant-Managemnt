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
         <!-- NONVEG SNACKS -->
         <hr class="food-horizontal-rule">
         <div class="row align-items-center menu-item">
           <div class="col-md-3 food-image">
             <img 
           src="images/nonvegsnacks.jpg" length="250" width="250"
           alt="NONVEG SNACKS"
           class="rounded-circle lazyload">
           </div>
           <div class="card-body">
           <center>  <h2 class="card-title font-weight-bold">NONVEG SNACKS</h2>
             <p class="card-text">
             </p>
             <a href="nonvegsnacks.php" class="btn btn-outline-dark" role="button">View</a></center>
           </div>
         </div>
             <!-- BIRYANIS -->
        <hr class="food-horizontal-rule">
        <div class="row align-items-center menu-item">
          <div class="col-md-3 food-image">
            <img 
          src="images/biryanis.jpg" length="250" width="250"
          alt="BREAKFASTS"
          class="rounded-circle lazyload">
          </div>
          <div class="card-body">
          <center>  <h2 class="card-title font-weight-bold">BIRYANIS</h2>
            <p class="card-text">
            </p>
            <a href="biryanis.php" class="btn btn-outline-dark" role="button">View</a></center>
          </div>
        </div>
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
              <a href="veg.php" class="btn btn-outline-dark" role="button">View</a></center>
            </div>
          </div>
          <center><a href="food.php" style="margin: 6px 6px; font-weight:bolder;" type="submit" class="btn btn-primary">back</a> </center> 
      </div>
    </body>
    <?php include "footer.php";?>