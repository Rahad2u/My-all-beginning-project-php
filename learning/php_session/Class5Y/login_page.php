
<?php 
session_start();
$connect           = mysqli_connect('localhost','root','','store2');
// security
$user_email        = htmlspecialchars('user_email');
$user_password     = htmlspecialchars('user_password');
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
    <!-- icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;
    1,100;1,300;1,400;1,500;1,700;1,900&family=Spline+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link rel="stylesheet" href="./style.css">
    <title>Login form</title>
    <link rel="icon" href="./img/Webysther_20160423_-_Elephpant.svg.png">
  </head>
  <body class="vh-100">
   <section class="category_Add" style="margin-top: 200px;">
       <div class="container">
           <div class="row">
               <div class="col-lg-2"></div>
               <div class="col-lg-8">
               <?php 
               $user_e = '';
               $user_p = '';
               if(isset($_POST[$user_email])){
                   $user_e        = $_POST[$user_email];
                   $user_p        = $_POST[$user_password];
               }
                   $sql = "SELECT * FROM user_table WHERE user_email='$user_e' AND user_password='$user_p'";
                   $sql_q = $connect->query($sql);
                   if(mysqli_num_rows($sql_q)>0){

                       $arry_sql = mysqli_fetch_assoc($sql_q);

                       $user_first_name = $arry_sql['user_first_name'];
                       $user_last_name  = $arry_sql['user_last_name'];

                       $_SESSION['first_name'] = $user_first_name;
                       $_SESSION['last_name']  = $user_last_name;
                       header('location:index.php');
                   }
                  ?>
                   <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="shadow-lg p-3" style="background: #2c214d; color: #fff;">
                     <div class="text-form mb-5" style="text-align: center; color: #fff; border: 1px dotted #fff;">
                       <h1>Login</h1> 
                     </div>
                      <div class="row">
                       <div class="col-lg-6">
                    <div class="mb-3">
                     <label for="inputEmail4" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="E-mail" name="user_email">
                     </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="mb-3">
                     <label for="inputPassword4" class="form-label">Password*</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="user_password">
                     </div>
                    </div>
                      </div>
                     <button type="submit" class="btn btn-primary" style="background: #5d701d; border: 1px #5d701d;">Login</button>
                   </form>
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
