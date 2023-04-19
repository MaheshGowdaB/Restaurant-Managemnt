<?php
session_start();
include('db.php');
if(isset($_POST['login'])){
  $user = $_POST['uname'];
  $pass =  $_POST['psw'];

  $sl = "select * from admin where username='$user' and password='$pass'";
  // echo $sl;
  $result = mysqli_query($conn,$sl);
  if((mysqli_num_rows($result)>0)){
    echo "<script>alert('Login successful');</script>";
    echo "<script>window.location='../admin.php';</script>";
    $_SESSION['user'] = $user;
    setcookie('username',$user,time()+60*60*24,'/'); 
    setcookie('password',$pass,time()+60*60*24,'/');
  }else{
    echo "<script>alert('You have entered invalid login credentials');</script>";
  }
}
// if(isset($_POST['sub']))
// {
//     $sqllogin= "SELECT * FROM admin WHERE emal='$_POST[email]' AND password='$_POST[psw]'";
// 	$qsqllogin = mysqli_query($con,$sqllogin);
//     echo $sqllogin;
//     if(mysqli_num_rows($qsqllogin) == 1)
//     {
//         $rslogin = mysqli_fetch_array($qsqllogin);
//         echo "<script>window.location='./admin.php';</script>";
//     }
// 	else
//     {
//         echo "<script>alert('You have entered invalid login credentials');</script>";
//         // echo "<script>window.location='/shoe/User/signin.php';</script>";
//     }
// }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css" integrity="sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="../css/bootstrap.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;}


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid rgb(130, 128, 128);
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #087ac7;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal { /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

body{
    background-image: url('images/location/locc3.jpg');
    background-repeat: no-repeat;  
    background-size: cover;
    
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  <form class="modal-content animate"   action="" method="post" novalidate>
 
    <div class="container">
        <center><h2><b>Login</b></h2></center>
      <label for="uname"><b>Username</b></label>
      <input class="form-control" type="text" placeholder="Enter Username" name="uname" required value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">

      <label for="psw"><b>Password</b></label>
      <input style="width: 100%;" class="form-control" type="password" placeholder="Enter Password" name="psw" required value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>">
        
      <button name="login" class="btn btn-primary">Login</button>
          </div>
    </div>
  </form>

</body>
</html>
