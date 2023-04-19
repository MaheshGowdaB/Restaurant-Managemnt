<?php include "header.php";?>
    <main>

      <!-- ALBUM DESCRIPTION -->
      <div class="album-description container-fluid text-white">
        <h1 id="title-1" class="special-title-1">ALBUM</h1>
        <h2 id="title-2" class="special-title-2">Explore Our Galleries</h2>
      </div>

      <!-- ALBUM CONTENT -->
      <div class="album-content">
        <div class="container">
          <div class="row">
            <div id="card-food" class="col-md-4">
              <div class="card box-shadow">
                <img class="card-img-top" src="images/food/food.jpg" >
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">FOOD</h5>
                  <a href="gallery-food.php" class="btn btn-outline-dark" role="button">View</a>
                </div>
              </div>
            </div>
            <div id="card-desserts" class="col-md-4">
              <div class="card box-shadow">
                <img class="card-img-top" src="images/desserts/desserts.jpg">
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">DESSERTS</h5>
                  <a href="gallery-desserts.php" class="btn btn-outline-dark" role="button">View</a>
                </div>
              </div>
            </div>
            <div id="card-drinks" class="col-md-4">
              <div class="card box-shadow">
                <img class="card-img-top" src="images/drinks/drinks.jpg">
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">DRINKS</h5>
                  <a href="gallery-drinks.php" class="btn btn-outline-dark" role="button">View</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div id="card-location" class="col-md-4">
              <div class="card box-shadow">
                <img class="card-img-top" src="images/location/loc10.jpg">
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">LOCATION</h5>
                  <a href="gallery-location.php" class="btn btn-outline-dark" role="button">View</a>
                </div>
              </div>
            </div>
            <div id="card-staff" class="col-md-4">
              <div class="card box-shadow">
                <img class="card-img-top" src="images/staff/cheff.jpg">
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">STAFF</h5>
                  <a href="gallery-staff.php" class="btn btn-outline-dark" role="button">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include "footer.php";?>