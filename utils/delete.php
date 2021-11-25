<?php 
  session_start();
  include '../connection.php';
  if (!isset($_SESSION['username'])) {
      header("Location: index.php");
  } 

  $id     = $_GET['id'];
  $result = mysqli_query($conn, "DELETE FROM meals_data WHERE id = '$id'");
  if($result) {
    mysqli_close($conn); 
    header("location:../home.php"); 
  }
  else {
    echo "Error deleting record"; 
  }

?>