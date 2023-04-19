<?php 
include('db.php');
$food_name = $_GET['foodname'];

$sql = "delete from food where Foodname='$food_name'";
if(mysqli_query($conn,$sql)){
    header('Location:view-menu.php');
    die();
}
?>