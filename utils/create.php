<?php 
include '../connection.php';
$id = $_POST['id'];
$meal = $_POST['meal'];
$category = $_POST['category'];
$country = $_POST['country'];
 
mysqli_query($conn, "INSERT INTO meals_data VALUES('$id','$meal','$category','$country')");
 
header("location:../home.php");
?>