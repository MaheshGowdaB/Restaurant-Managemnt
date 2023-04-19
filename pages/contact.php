<?php include "header.php";
include('db.php');
if(isset($_POST['sub'])){
  $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
  $sl = "insert into contact(name,email,message) values('$name', '$email','$message')";
  if(mysqli_query($conn,$sl)){
    echo "<script>alert('Message Sent');</script>";
  }
  else{
    echo "<script>alert('Please fill fields carefully');</script>";
  }
}
?>
    <main>
     
       <!-- CONTACT -->
       <h1 class="text-center">CONTACT US</h1>
       <div class="container-fluid"style="margin-left:300px;">
        
         
          <div class="row">
            <div class="col-md-7">
              <form action="" method="post">
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputName">NAME:</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Abc"name="name">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputEmail">EMAIL:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="name@gmail.com" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTextarea">MESSAGE:</label>
                  <textarea class="form-control" id="inputTextarea" name="message" rows="7" placeholder="Additional details"></textarea>
                </div>
                <center><button type="submit" name="sub" class="btn btn-primary"style="margin:10px;">SUBMIT</button></center>
              </form>
            </div>

          </div> 
      </div>
  
      <?php include "footer.php";?>