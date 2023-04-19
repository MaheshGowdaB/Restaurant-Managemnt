<?php include "header.php";
include('db.php');
if(isset($_POST['sub'])){
  $name = $_POST['name'];
 $email = $_POST['email'];
 $date = $_POST['date'];
 $count = $_POST['count'];
 $phone = $_POST['phone'];
 $msg = $_POST['msg'];
  $sl = "insert into reservation(name,email,date,count,phone,message) values('$name', '$email', '$date', $count,'$phone','$msg')";
  if(mysqli_query($conn,$sl)){
    echo "<script>alert('Reservation successful');</script>";
  }
  else{
    echo "<script>alert('Please fill fields carefully');</script>";
  }
}
?>
    <main>

      <!-- RESERVATIONS DESCRIPTION -->
      <div class="reservations-description container">
        <h1 id="title-1" class="special-title-1">RESERVATIONS</h1>
        <h2 id="title-2" class="special-title-2">Book a Table</h2>
      </div>

      <!-- RESERVATIONS FORM -->
      
        <form action="" method="post">
        <center> 
          <div class="form-row">
            <div class="form-group col-md-6">
              <div class="row" style="margin-top: 6px;">
                <div class="col-sm-2">
                  <label for="inputName">NAME:</label>
                </div>
                <div class="col-sm-10" >
                  <input type="text" class="form-control" id="inputName" placeholder="Abc" name="name" >
                </div>
              </div>
            </div>
            <div class="form-group col-md-6">
              <div class="row" style="margin-top: 6px;">
                <div class="col-sm-2">
              <label for="inputEmail">EMAIL:</label>
            </div>
            <div class="col-sm-10">
              <input   type="email" class="form-control" id="inputEmail" placeholder="name@example.com" name="email">
            </div>
          </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <div class="row" style="margin-top: 6px;">
                <div class="col-sm-2">
              <label for="inputDate">DATE:</label>
            </div>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="inputDate" name="date">
            </div>
          </div>
          </div>
            <div class="form-group col-md-6">
              <div class="row" style="margin-top: 6px;">
                <div class="col-sm-2">
              <label for="inputNumber">PARTY OF:</label>
            </div>
            <div class="col-sm-10">
              <input type="number" min="1" class="form-control" id="inputNumber" placeholder="1" name="count">
            </div>
          </div>
        </div>
            <div class="form-group col-md-6">
              <div class="row" style="margin-top: 6px;">
                <div class="col-sm-2">
              <label for="inputPhone">PHONE:</label>
            </div>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="inputPhone" placeholder="99123456" name="phone">
            </div>
          </div>
        </div>
      </div>
          <div class="form-group col-md-6">
            <div class="row" style="margin-top: 6px;">
              <div class="col-sm-2">
            <label for="inputTextarea">MESSAGE:</label>
          </div>
          <div class="col-sm-10">
            <textarea class="form-control" id="inputTextarea" rows="7" placeholder="Additional details" name="msg"></textarea>
          </div>
        </div>
      </div>
      
          <button style="margin: 6px 6px; font-weight:bolder;" type="submit" class="btn btn-primary" name="sub">SUBMIT</button>
        </center> 
        </form>
      </div>

      <?php include "footer.php";?>