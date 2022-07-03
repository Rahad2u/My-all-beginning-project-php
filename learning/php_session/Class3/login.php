<?php 
session_name('session');
session_start(/*[
    'cookie_lifetime'=>300 // 5min
]*/);
$alart = false;
if(isset($_POST[htmlspecialchars('email')]) && isset($_POST[htmlspecialchars('password')])){
    if('rahadhasan33675@gmail.com'==$_POST['email'] && '4a5946943bca2507299c6bdbb3b9b1c07b0a9024'==sha1($_POST['password'])){
        isset($_SESSION['loggedin']);
        header('location:./editOption.php');
    }else{
        $alart = true;
        !isset($_SESSION['loggedin']);
    }
}
if(isset($_POST[htmlspecialchars('email')]) && isset($_POST[htmlspecialchars('password')])){
  if('rahadhasan33675@gmail.com'==$_POST['email'] && 'd83a6cc7597ef3bbbc39c9a767a418ddf3a09e9c'==sha1($_POST['password'])){
      isset($_SESSION['loggedin']);
      header('location:./V_ALL_Function.php');
  }else{
      $alart = true;
      !isset($_SESSION['loggedin']);
  }
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

    <title>Session Login</title>
    <link rel="icon" href="./img/Webysther_20160423_-_Elephpant.svg.png">
  </head>
  <body class="vh-100">
    
  
   <div class="container" style="margin-top: 200px;">
       <div class="row">
           <div class="col-lg-2"></div>
           <div class="col-lg-8">
           <div class="header-text mb-4 text-primary" style="display: flex; justify-content: center;">
                   <h1>Login</h1>
               </div>
               <div class="alart-box" style="display: flex; justify-content: center;">
                   <?php 
                   if($alart){
                       echo "<span class='alert alert-danger'>Do not match email and password</span>";
                   }
                   ?>
               </div>
           <form action="" method="POST" class="shadow-lg p-3">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="color: #000; font-size: 17px; font-weight: 600;">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"style="color: #000; font-size: 17px; font-weight: 600;">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
</form>
           </div>
           <div class="col-lg-2"></div>
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
