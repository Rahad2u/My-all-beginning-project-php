
<?php

use function PHPSTORM_META\type;

session_start();
$f_name =  $_SESSION['first_name'];
$l_name =  $_SESSION['last_name'];
if($f_name!='' && $l_name!=''){

  $connect           = mysqli_connect('localhost','root','','store2');

$sql_s             = "SELECT * FROM  product_table";
$sql_q             = $connect->query($sql_s);
$sql_A             = mysqli_fetch_assoc($sql_q);
$p_id              =  $sql_A['product_id'];
$p_name            =  $sql_A['product_name'];

$spend_product_name    = htmlspecialchars('spend_product_name');
$spend_p_quentity      = htmlspecialchars('spend_p_quentity');
$spend_p_date          = htmlspecialchars('spend_p_date');
$spend_p_id            = htmlspecialchars('spend_p_id');

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
    <title>Edit spend product</title>
    <link rel="icon" href="./img/Webysther_20160423_-_Elephpant.svg.png">
  </head>
  <body class="vh-100">
  <section class="header_section"><!-- navebar start !-->
      <div class="container-fluid">
        <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffe6f7;">
  <div class="container-fluid">
    <div class="navbar-img">
      <a href="./index.php">
      <img src="./img/PHP-Logo-Free-Download-PNG.png" alt=""  style="width: 120px;">
      </a>
    </div>
    <div class="d-flex justify-content-center" style="color: #b30059;">
      <h2>Welcome to store management system</h2>
    </div>
    <div class="d-flex justify-content-end">
      <h6 style="margin-right: 10px; margin-top: 7px; color: #000;"><?php echo $f_name.' '.$l_name; ?></h6>
      <a href="./logout_page.php" class="btn btn-outline-success">Logout</a>
      </div>
  </div>
</nav>
        </div>
      </div>
    </section><!-- navebar end !-->
    <div class="container-fluid">
      <div class="row">
      <div class="col-lg-3 p-3 shadow-sm" style="border: 1px solid #c56cf0; background: #c56cf0; height: 100%; margin-top: 3px; margin-left: 3px;"><!-- categori left !-->
    <div class="all-process">
        <div class="dropdown shadow-lg bg-white p-3" style="border-radius: 5px;">
          <h5 class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000; text-align: center; cursor: pointer;">categori</h5>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="./category.php">Add categori</a></li>
            <li><a class="dropdown-item" href="./read_cetagori.php">Categori list</a></li>
          </ul>
        </div>
        <div class="dropdown mt-4 shadow-lg bg-white p-3" style="border-radius: 5px;">
          <h5 class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000; text-align: center; cursor: pointer;">Product</h5>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="./add_product.php">Add Product</a></li>
            <li><a class="dropdown-item" href="./edit_product.php">Product list</a></li>
          </ul>
        </div>
        <div class="dropdown mt-4 shadow-lg bg-white p-3" style="border-radius: 5px;">
          <h5 class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000; text-align: center; cursor: pointer;">Store Product</h5>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="./add_store_product.php">Add store product</a></li>
            <li><a class="dropdown-item" href="./list_of_product.php">Store product list</a></li>
          </ul>
        </div>
        <div class="dropdown mt-4 shadow-lg bg-white p-3" style="border-radius: 5px;">
          <h5 class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000; text-align: center; cursor: pointer;">Spand Product</h5>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="./spend_product.php">Add spand product</a></li>
            <li><a class="dropdown-item" href="./list_of_spend_product.php">Spand product list</a></li>
          </ul>
        </div>
        <div class="dropdown mt-4 shadow-lg bg-white p-3" style="border-radius: 5px;">
          <h5 class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000; text-align: center; cursor: pointer;">Report product</h5>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="./report.php">Generate report</a></li>
          </ul>
        </div>
        <div class="dropdown mt-4 shadow-lg bg-white p-3" style="border-radius: 5px;">
          <h5 class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000; text-align: center; cursor: pointer;">User</h5>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="./user_form.php">Add new user</a></li>
            <li><a class="dropdown-item" href="./user_list.php">User list</a></li>
          </ul>
        </div>
        </div>
    </div><!-- left end !-->
    <div class="col-lg-8">
    <?php 
     if(isset($_GET['id'])){
        $id  = $_GET['id'];
       $sql_select = "SELECT * FROM spend_product_table WHERE spend_product_id=$id";
       $sql_Q = $connect->query($sql_select);
       
       $con_array  =  mysqli_fetch_assoc($sql_Q);

       $spend_product_id       = $con_array['spend_product_id'];
       $spend_product_name     = $con_array['spend_product_name'];
       $spend_product_quentity = $con_array['spend_product_quentity'];
       $spend_product_date     = $con_array['spend_product_date'];
      }
      ?>
   <section class="category_Add" style="margin-top: 30px;">
       <div class="container">
           <div class="row">
               <div class="col-lg-1"></div>
               <div class="col-lg-10">
               <?php 

                   if(isset($_GET[$spend_product_name])){
                     $spend_product_n      = $_GET[$spend_product_name];
                     $spend_P_quen         = $_GET[$spend_p_quentity];
                     $spend_pro_date       = $_GET[$spend_p_date];
                     $spend_p_i            = $_GET[$spend_p_id];     
                    

                     $sql_u = "UPDATE spend_product_table SET spend_product_name = '$spend_product_n' , spend_product_quentity= '$spend_P_quen',
                     spend_product_date='$spend_pro_date' WHERE spend_product_id ='$spend_p_i'";
                     
                     $sql_q = mysqli_query($connect, $sql_u);
                     ob_start();
                     header('location:./add_store_product.php');
                     ob_end_clean();

                   }
                  ?>
                   <form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET" class="shadow-lg p-3" style="color: #fff; background-color: #273c75; border-radius: 5px;">
                     <div class="text-form mb-5" style="text-align: center; color: #fff;">
                       <h1>Edit spend product</h1> 
                     </div>
                     <div class="mb-3">
                       <label for="store_product_name" class="form-label">Produt Name</label>
                       <select name="spend_product_name" id="categori_name" class="form-select mb-3">
                         <option>select</option>
                         
                            <?php 
                          while($sql_A  = mysqli_fetch_assoc($sql_q)){
                            $p_id   =  $sql_A['product_id'];
                            $p_name = $sql_A['product_name'];;
                            echo "
                            <option >$p_name</option>
                            ";
                          }
                            ?>
                       </select>
                     </div>
                     <div class="mb-3">
                       <label for="product_code" class="form-label">Product quentity</label>
                       <input type="number" class="form-control" id="product_code" name="spend_p_quentity" value="<?php echo $spend_product_quentity; ?>">
                     </div>
                     <div class="mb-3">
                       <label for="date" class="form-label">Store product date</label>
                       <input type="date" class="form-control" id="date" name="spend_p_date" value="<?php echo $spend_product_date; ?>">
                       <input type="text" name="spend_p_id" hidden value="<?php echo $spend_product_id; ?>">
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
               <div class="col-lg-1"></div>
           </div>
       </div>
   </section>

    </div>
    <div class="col-lg-1"></div>
      </div>
    </div>
     
    <section class="footer" style="margin-top: 150px;"><!-- footer code start !-->
    <div class="footer-text">
    <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <a class="text-white" href="./index.php">@Store menagement system <h5 style="display: inline-block; color: #b30059;">Rahad hasan</h5></a>
  </div>
  <!-- Copyright -->
</footer>
    </div>
</section><!-- footer code end !-->
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
<?php 
}else{
  header('location:login_page.php');
}
?>