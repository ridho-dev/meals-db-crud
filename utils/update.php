<?php 
include '../connection.php';
$id = $_POST['id'];
$meal = $_POST['meal'];
$category = $_POST['category'];
$country = $_POST['country'];
 
mysqli_query($conn, "UPDATE meals_data SET name='$meal', category='$category', country='$country'  WHERE id='$id'");
 
header("location:../home.php");
?>