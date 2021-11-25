<?php
  include('connection.php');
  session_start();
  $login_failed = false;

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['psw'];
    $op       = $_GET['op'];
    
    if($op=="in"){
      $cek = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");

      if(mysqli_num_rows($cek)==1){
        $c = mysqli_fetch_array($cek);
        $_SESSION['username']   = $c['username'];
        $_SESSION['level']    = $c['level'];
        if($c['level']=="admin"){
          header("location:home.php");
        }
        else if($c['level']=="user"){
          header("location:home.php");
        }
        }
        else{
          $login_failed = true;
      }

    }

  }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
</head>

<body class="d-flex justify-content-center align-items-center bg-secondary">
  <div class="login-box shadow p-5 mb-5 bg-body rounded">
    <h2 class="text-center">Login</h2>
    <form action="index.php?op=in" method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="psw" required>
      </div>
      <?php 
      if($login_failed){
        unset($_SESSION['username']);
        unset($_SESSION['level']);
        echo '<p class="login-failed text-danger">Username or password incorrect. Please try again.</p>';
      }
      ?>
      <button type="submit" name="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</body>

</html>