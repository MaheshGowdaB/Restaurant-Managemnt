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
          <!-- veg -->
          <hr class="food-horizontal-rule">
          <div class="row align-items-center menu-item">
            <div class="col-md-3 food-image">
              <img 
            src="images/veg.jpg" length="250" width="250"
            alt="VEG"
            class="rounded-circle lazyload">
            </div>
            <div class="card-body">
            <center>  <h2 class="card-title font-weight-bold">VEG</h2>
              <p class="card-text">
              </p>
              <a href="veg.php" class="btn btn-outline-dark" role="button">View</a></center>
            </div>
          </div>
        <!-- nonveg -->
        <hr class="food-horizontal-rule">
          <div class="row align-items-center menu-item">
            <div class="col-md-3 food-image">
              <img 
            src="images/nonveg.jpg" length="250" width="250"
            alt="nonveg"
            class="rounded-circle lazyload">
            </div>
            <div class="card-body">
            <center>  <h2 class="card-title font-weight-bold">NON VEG</h2>
              <p class="card-text">
              </p>
              <a href="nonveg.php" class="btn btn-outline-dark" role="button">View</a></center>
            </div>
          </div>
 
      </div>
    </body>
    <?php include "footer.php";?>