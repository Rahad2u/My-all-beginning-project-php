<?php
session_start([
    'cookie_lifetime'=>300
]);
$error = false;

if(isset($_POST['email']) && isset($_POST['password'])){
  if('rahadhasan33675@gmail.com'==$_POST['email'] && '4a5946943bca2507299c6bdbb3b9b1c07b0a9024'== sha1($_POST['password'])){
    $_SESSION['loggedin']=true;
  }else{
    $error = true;
    !isset($_SESSION['loggedin']);
  }
}
if(isset($_POST['logout'])){
  session_destroy();
}
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

    <title>Session Class2</title>
    <link rel="icon" href="./img/Webysther_20160423_-_Elephpant.svg.png">
  </head>
  <body class="vh-100">
    <section class="login-form" style="margin-top: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                <div class="log-text">
          <h5>
              <?php 
                isset($_SESSION['loggedin']) && $_SESSION['loggedin'];
                  
              ?>
          </h5>
      </div>
        <div class="form-text d-flex justify-content-center text-primary mb-4">
            <h1>Login</h1>
        </div>
        <div class="allart-box" style="text-align: center; margin-bottom: 25px;">
          <?php 
             if($error){
               echo "<span class='alert alert-danger' role='alert'>Not match email and password</span>";
             }
          ?>
        </div>
             <?php 
        if(!isset($_SESSION['loggedin'])):
        ?>
        <form action="" method="POST" class="shadow-lg p-3">
            <div class="mb-3">
                <label for="email" class="form-label" style="color: #000; font-size: 15px; font-weight: 600;">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
                <div class="mb-3">
                    <label for="password" class="form-label" style="color: #000; font-size: 15px; font-weight: 600;">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                    <button type="submit" class="btn btn-primary">Login</button>
             </form>
             <?php
             else:
              ?>
              <form action="" method="POST">
                <div class="d-flex justify-content-end" style="margin-right: 20px;">
                        <input type="hidden" name="logout" value="1">
                        <button class="btn btn-primary">Logout</button>
                </div>
            </form>
              <?php
             endif;
             ?>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
        
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
