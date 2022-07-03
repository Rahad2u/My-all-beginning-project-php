
<?php 
session_start();
$f_name =  $_SESSION['first_name'];
$l_name =  $_SESSION['last_name'];
if($f_name!='' && $l_name!=''){

  $connect           = mysqli_connect('localhost','root','','store2');
  
$category_name = htmlspecialchars('category_n');
$category_id   = htmlspecialchars('category_e_d');
$cate_id       = htmlspecialchars('cate_id');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;
    1,100;1,300;1,400;1,500;1,700;1,900&family=Spline+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <title>edit_categori</title>
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
    <section class="category_Add" style="margin-top: 40px;">


               <section class="edit_form" style="margin-top: 30px;">
       <div class="container">
           <div class="row">
               <div class="col-lg-1"></div>
               <div class="col-lg-9">
                   <?php 
// set global veriable
$cate_id = '';
$cate_name = '';
$cate_add_date = '';

                   if(isset($_GET['id'])){
                    $id  = $_GET['id'];
                    if($category_name!='' && $category_id!=''){
                        $sql_E          = "SELECT * FROM product_store WHERE category_id=$id";
                        $mysql_q        = ($connect->query($sql_E));
                        $con_array      = mysqli_fetch_assoc($mysql_q);

                        $cate_id        = $con_array['category_id'];
                        $cate_name      = $con_array['category_name'];
                        $cate_add_date  = $con_array['category_entry_date'];
                    }
                  }
                  $category_n = '';
                  $category_d = '';
                  $category_id = '';
                  if(isset ($_GET['category_n'])){
                  $category_n = $_GET['category_n'];
                  $category_d = $_GET['category_e_d'];
                  $category_id = $_GET['cate_id'];

                  $sql_u = "UPDATE product_store SET category_name = '$category_n' , category_entry_date= '$category_d' WHERE category_id = '$category_id'";

                  if($connect->query($sql_u)){
                    ob_start();
                    header('location: read_cetagori.php');
                    ob_end_clean();
                  }
                  }
                  
                   ?>
                   <form action="edit_data.php?read_cetagori.php" method="GET" class="shadow-lg p-3" style="margin-top: 30px; color: #fff; background-color: #273c75; border-radius: 5px;">
                     <div class="text-form mb-5" style="text-align: center; color: #fff;">
                       <h1>Edit category name</h1> 
                     </div>
                     <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Cetagory Name</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_n" value="<?php echo $cate_name; ?>">
                     </div>
                     <div class="mb-3">
                       <label for="date" class="form-label">Date</label>
                       <input type="date" class="form-control" id="date" name="category_e_d" value="<?php echo $cate_add_date; ?>">
                       <input type="text" hidden name="cate_id" value="<?php echo $cate_id; ?>">
                     </div>
                     <button type="submit" class="btn btn-primary" name="update">Update</button>
                   </form>
               </div>
               <div class="col-lg-1"></div>
           </div>
   </section>

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