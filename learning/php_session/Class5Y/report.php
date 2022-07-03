
<?php 
session_start();
$f_name =  $_SESSION['first_name'];
$l_name =  $_SESSION['last_name'];
if($f_name!='' && $l_name!=''){

  $connect           = mysqli_connect('localhost','root','','store2');


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
    <title>Report page</title>
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
    <section class="category_Add" style="margin-top: 30px;">
<div class="container">
           <div class="row">
               
               <?php 
                  
                  ?>
                   <form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET" class="shadow-lg p-3" style="">
                     <div class="text-form shadow-sm" style="text-align: center; color: #34ace0; margin-bottom: 60px; border: 1px solid #ddd; background: #ddd;">
                       <h1>Report generate form</h1>
                     </div> 
                        <div class="mb-3">
                       
                   <div class="row">
                      <div class="col-lg-2">
                       
                      <label for="r_p" class="mb-2">R-Product**</label>
                      
                    <select name="report_product" id="r_p" class="form-control mb-4">
                    <?php
                    $sql = "SELECT * FROM store_product";

                    $sql_q = ($connect->query($sql));

                   while($sql_array         = mysqli_fetch_assoc($sql_q)){
                      $s_product_id         = $sql_array['store_product_id'];
                      $s_product_name       = $sql_array['store_product_name'];
                      ?>
                      <option value="<?php echo $s_product_name; ?>"><?php echo $s_product_name; ?></option>
                      <?php } ?>
                    </select>
                    <button type="submit" name="submit" class="btn btn-primary" style="background: #5d701d; border: 1px #5d701d;">G-Report</button>
                      </div>

<div class="col-lg-5">
  <!-- Report Data code -->
                      <?php 
                      $store_product_quantity = "";
                   if(isset($_GET['report_product'])){
                    $report_product = $_GET['report_product'];
                   
                   $sql_data_select = "SELECT * FROM store_product WHERE store_product_name ='$report_product'";
                   $sql_query1         = $connect->query($sql_data_select);
                   while($sql_array1         = mysqli_fetch_assoc($sql_query1)){
                   $store_product_name       = $sql_array1['store_product_name'];
                   $store_product_quantity   = $sql_array1['store_product_quantity'];
                   $store_product_entry_date = $sql_array1['store_product_entry_date'];
?>
<div class="store_product_text" style="text-align: center; color: #6d22f0;">
<h5>Store-Product</h5>
</div>
<?php
                   echo "
                   <table class='table table-hover table-bordered'>
                      <thead>
                        <tr>
                          <th>Product-Name</th>
                          <th>Product-quantity</th>
                          <th>Product-entry-date</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                      <td>$store_product_name</td>
                      <td>$store_product_quantity</td>
                      <td>$store_product_entry_date</td>
                      </tr>
                      </tbody>
                      </table>
                   ";
                   }
                  }
                
                   ?>
</div>
       <div class="col-lg-5">
                        <!-- Spend product count code -->
<div class="spand_produnt_text" style="text-align: center; color: #6d22f0;">
<?php 
$spend_product_name = '';
$spend_product_quentity = '';
$spend_product_date = '';
                   if(isset($_GET['report_product'])){
                   $report_product2 = $_GET['report_product'];
                   
                   $sql_data_select2         = "SELECT * FROM spend_product_table WHERE spend_product_name ='$report_product2'";
                   $sql_query2               = $connect->query($sql_data_select2);
                   ob_start();
                   $sql_array2               = mysqli_fetch_assoc($sql_query2);
                   $spend_product_name       = $sql_array2['spend_product_name'];
                   $spend_product_quentity   = $sql_array2['spend_product_quentity'];
                   $spend_product_date       = $sql_array2['spend_product_date'];
                   ob_end_clean();
?>
<div class="store_product_text" style="text-align: center; color: #6d22f0;">
<h5>Spand-Product</h5>
</div>
<?php
                   echo "
                   <table class='table table-hover table-bordered'>
                      <thead>
                        <tr>
                          <th>Spand-P-Name</th>
                          <th>Spand-P-quantity</th>
                          <th>Spand-P-entry-date</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                      <td>$spend_product_name</td>
                      <td>$spend_product_quentity</td>
                      <td>$spend_product_date</td>
                      </tr>
                      </tbody>
                      </table>
                   ";
                  //  }

                }
                   ?>
                      </div>
                      </div>
                   </div>
                   </form>
               </div>
                </div>
                
                <?php if((int)$store_product_quantity - (int)$spend_product_quentity){ ?>
                <div class="available-product mt-5" style="color: #000;">
                     <h4>Available Product= <?php echo  (int)$store_product_quantity - (int)$spend_product_quentity; ?>/-</h4>
                   </div>                             
                     <?php } ?>
                    
   </section>
    </div>
    <div class="col-lg-1"></div>
      </div>
    </div>
 
           </div>
       </div>
   </section>
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