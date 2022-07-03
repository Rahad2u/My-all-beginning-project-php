<?php 
session_start();
if(isset($_SESSION['login'])){
  header("location: admin_control.php");
}
include "include_file/database_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
 <!-- Css link -->
 <link rel="stylesheet" href="style.css">

    <title>Login page</title>
    <link rel="icon" href="./img/download.jpeg">
  </head>
  <body class="vh-100  d-flex justify-content-center align-items-center login-page-body">
    <!-- Admin Login form -->
  <div class="container">
      <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
          <div class="l-text">
                  <h1>Login</h1>

              </div>
              <div class="text-login text-center">
                <p class="text-danger">Please login to access login panel</p>
              </div>
              <?php 
              $email_r    = "";
              $password_r = "";
              $chack_me   = "";
                if(isset($_POST['submit'])){
                   $email_r    = htmlspecialchars($_POST['email']);
                   $password_r = htmlspecialchars($_POST['password']);
                   ob_start();
                   $chack_me   = htmlspecialchars($_POST["chack-me"]);
                   ob_end_clean();
                   $mysql = "SELECT * FROM admin_table WHERE email = '$email_r' AND password = '$password_r'";
                   $mysqli_query = ($connect->query($mysql));
                  
                  //  Convart mysql_array
                   $mysqli_array = mysqli_fetch_assoc($mysqli_query);

                   $count = mysqli_num_rows($mysqli_query);
                  if($email_r!="" && $password_r!="" && $chack_me!=""){
                   if($count == 1){
                     $_SESSION['login'] = "Login successfull";
                      
                      header("location: admin_control.php");
                   }elseif($count == 0){
                       $_SESSION['login'] = "Login not successfull";
                   
                    if(isset($_SESSION['login'])){
                      session_destroy();
                      $page = $_SERVER['PHP_SELF'];
                      $sec = "1";
                      header("Refresh: $sec; url=$page");

                     ?>
                     <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       <strong>Email and password not match!!!</strong>
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>
                     <?php
                }
              }
                   }else{
                     $_SESSION['empty-field'] = "Input field empty";
                     if(isset($_SESSION['empty-field'])){
                       session_destroy();

                          $page = $_SERVER['PHP_SELF'];
                          $sec = "1";
                          header("Refresh: $sec; url=$page");
                     ?>
                     <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                       <strong>You should fill up all field!!</strong>
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>
                     <?php
                     }
                   }
                  }  
              ?>
             
          <div class="admin-login shadow-lg p-4">
          <form action="" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label shadow-sm">Email address**</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label shadow-sm">Password**</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input shadow-sm" id="exampleCheck1" name="chack-me">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
</form>
          </div>
          </div>
          <div class="col-lg-3"></div>
      </div>
  </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- https://cdnjs.com/libraries/popper.js/2.5.4 -->
    <!-- <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"
    ></script> -->

    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
  </body>
</html>
