<?php

session_start();
require './php/db_connection.php';
if (isset($_POST['submitbtn'])) {
    $username = $_POST['username'];
    $pharmacy_name = $_POST['pharmacyname'];
    $password = $_POST['password'];
  
       $query = mysqli_query($con, "insert into admin_credentials(USERNAME,PASSWORD,pharmacy_name) values('$username','$password','$pharmacy_name')") or die(mysqli_error($connection));

  
}
        if ($_POST) {
            $_SESSION['admin'] = $username;
            header("location:home.php");
        }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Signup</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
     <b>Pharmacy</b>Management
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Signup</p>

      <form  method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
     
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Pharmacy name" name="pharmacyname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div> 
        <div class="row">
         
          <!-- /.col -->
          <div class="d-grid gap-2 col-4 mx-auto">
            <button type="submit" name="submitbtn" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div><br>
          <div class="d-grid col-8 mx-auto">
          Already Registered. <a href="login.php" class="text-center">Login</a>
          </div>
      </form>

      
      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
