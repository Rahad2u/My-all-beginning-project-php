<?php 
session_start();
$f_name =  $_SESSION['first_name'];
$l_name =  $_SESSION['last_name'];
if($f_name!='' && $l_name!=''){
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
<!-- font awsome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Registration And Login from</title>
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

<section class="categori" style="margin-top: 8px; margin-left: 2px;"><!-- body code start !-->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 p-3 shadow-sm" style="border: 1px solid #c56cf0; background: #c56cf0; height: 100%;"><!-- categori left !-->
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
    <div class="col-lg-9 mt-5"><!-- right start !-->
  
          <div class="row">
            <div class="col-lg-3 d-flex justify-content-center ">
              <div class="icon text-success" style="text-align: center; cursor: pointer;">
              <i class="fa-solid fa-file-circle-plus fa-4x"></i>
              <h5><a class="text-decoration-none text-success" href="./category.php">Add category</a></h5>
              </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center">
            <div class="icon text-success" style="text-align: center; cursor: pointer;">
            <i class="fa-solid fa-list fa-4x"></i>
            <h5><a class="text-decoration-none text-success" href="./read_cetagori.php">List of cetagori</a></h5>
              </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center" style="text-align: center; cursor: pointer;">
            <div class="icon text-success">
            <i class="fa-solid fa-box-open fa-4x"></i>
            <!-- <i class="fa-solid fa-file-circle-plus fa-4x"></i> -->
            <h5><a class="text-decoration-none text-success" href="./add_product.php">Add product</a></h5>
              </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center">
            <div class="icon text-success" style="text-align: center; cursor: pointer;">
            <i class="fa-solid fa-list fa-4x"></i>
            <h5><a class="text-decoration-none text-success" href="./edit_product.php">List product</a></h5>
              </div>
            </div>

            <div class="col-lg-3 d-flex justify-content-center mt-5">
            <div class="icon text-success" style="text-align: center; cursor: pointer;">
            <i class="fa-solid fa-store fa-4x"></i>
            <h5><a class="text-decoration-none text-success" href="./add_store_product.php">Add store product</a></h5>
              </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center mt-5">
            <div class="icon text-success" style="text-align: center; cursor: pointer;">
            <i class="fa-solid fa-bars-staggered fa-4x"></i>
            <h5><a class="text-decoration-none text-success" href="./list_of_product.php">Store product list</a></h5>
              </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center mt-5">
            <div class="icon text-success" style="text-align: center; cursor: pointer;">
            <i class="fa-solid fa-file-circle-plus fa-4x"></i>
            <h5><a class="text-decoration-none text-success" href="./spend_product.php">Add spand product</a></h5>
              </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center mt-5">
            <div class="icon text-success" style="text-align: center; cursor: pointer;">
           
            <i class="fa-solid fa-list fa-4x"></i>
            <h5><a class="text-decoration-none text-success" href="./list_of_spend_product.php">Spand produnt list</a></h5>
              </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center mt-5">
            <div class="icon text-success" style="text-align: center; cursor: pointer;">
            <i class="fa-solid fa-chart-line fa-4x"></i>
            <h5><a class="text-decoration-none text-success" href="./report.php">Report product</a></h5>
              </div>
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3 d-flex justify-content-center mt-5">
            <div class="icon text-success" style="text-align: center; cursor: pointer;">
            <i class="fa-solid fa-user-plus fa-3x"></i>
            <h5 class="mt-1"><a class="text-decoration-none text-success" href="./user_form.php">Add user</a></h5>
              </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center mt-5">
            <div class="icon text-success" style="text-align: center; cursor: pointer;">
            <i class="fa-solid fa-elevator fa-3x"></i>
            <!-- <i class="fa-solid fa-user-plus fa-3x"></i> -->
            <h5 class="mt-1"><a class="text-decoration-none text-success" href="./user_list.php">User list</a></h5>
              </div>
            </div>
          </div>
    </div><!-- right end !-->
  </div>
</div>
</section><!-- body end !-->

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