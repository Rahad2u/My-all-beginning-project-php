
<?php 
session_start();
$f_name =  $_SESSION['first_name'];
$l_name =  $_SESSION['last_name'];
if($f_name!='' && $l_name!=''){

  $connect           = mysqli_connect('localhost','root','','store2');

$product_name      = htmlspecialchars('product_name');
$product_cetagory  = htmlspecialchars('product_cetagori');
$product_code      = htmlspecialchars('product_code');
$date              = htmlspecialchars('date');
$id                = htmlspecialchars('id');

$sql_s  = "SELECT * FROM product_store";
$sql_q  = $connect->query($sql_s);
$sql_A  = mysqli_fetch_assoc($sql_q);
$e_id   =  $sql_A['category_id'];
$e_name =  $sql_A['category_name'];

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
    <title>Product add page</title>
    <link rel="icon" href="./img/Webysther_20160423_-_Elephpant.svg.png">
  </head>
  <body class="vh-100">
  <section class="header_section">
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
    <section class="category_Add" style="margin-top: 30px;">
       <div class="container">
           <div class="row">
               <div class="col-lg-1"></div>
               <div class="col-lg-10">
                   <?php 
                   $e_p_name   = '';
                   $e_p_code   = '';
                   $e_p_e_date = '';
                   if(isset($_GET['id'])){
                     $I_id = $_GET['id'];
                   $sql_select = "SELECT * FROM product_table WHERE product_id = $I_id";
                   $sql_qurey  = $connect->query($sql_select);
                   $sql_array  = mysqli_fetch_assoc($sql_qurey); 

                   $e_p_name   = $sql_array['product_name'];
                   $e_p_code   = $sql_array['product_code'];
                   $e_p_e_date = $sql_array['product_entry_date'];

                   }
                   
                   if(isset($_GET[$product_name])){
                     $product_n      = $_GET[$product_name];
                     $product_c      = $_GET[$product_cetagory];
                     $product_code   = $_GET[$product_code];
                     $product_e_date = $_GET[$date];
                     $product_id     = $_GET[$id];

                    if($product_n!='' && $product_c!='' && $product_code!='' && $product_e_date!=''){
                     $sql_U = "UPDATE product_table SET product_name='$product_n', product_categori='$product_c',product_code='$product_code', product_entry_date = '$product_e_date' WHERE product_id='$product_id'";
                     $U_query =  $connect->query($sql_U) == TRUE;
                     ob_start();
                     header('location:./edit_product.php');
                     ob_end_clean();
                   }
                   }
                   ?>
                   <form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET" class="shadow-lg p-3" style="color: #fff; background-color: #273c75; border-radius: 5px;">
                     <div class="text-form mb-5" style="text-align: center; color: #fff;">
                       <h1>Add new product</h1> 
                     </div>
                     <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Product Name</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name" value="<?php  echo $e_p_name; ?>">
                     </div>
                     <div class="mb-3">
                       <label for="categiri_name" class="form-label">Select product categori</label>
                       <select name="product_cetagori" id="categori_name" class="form-select mb-3">
                         <option selected>select</option>
                            <?php 
                          while($sql_A  = mysqli_fetch_assoc($sql_q)){
                            $e_id   =  $sql_A['category_id'];
                            $e_name =  $sql_A['category_name'];
                            echo "
                            <option>$e_name</option>
                            ";
                          }
                            ?>
                       </select>
                     </div>
                     <div class="mb-3">
                       <label for="product_code" class="form-label">Product Code</label>
                       <input type="text" class="form-control" id="product_code" name="product_code" value="<?php echo $e_p_code; ?>">
                     </div>
                     <div class="mb-3">
                       <label for="date" class="form-label">Date</label>
                       <input type="date" class="form-control" id="date" name="date" value="<?php echo $e_p_e_date; ?>">
                       <input type="text" name="id" hidden value="<?php echo $I_id; ?>">
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