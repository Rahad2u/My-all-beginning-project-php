<?php include "database_connect.php"; ?>
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
        <!-- font family link -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,
        300;1,400;1,500;1,700;1,900&family=Spline+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!-- My css link -->
        <link rel="stylesheet" href="style.css">

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>order your favorite food</title>
    <link rel="icon" href="img/download.jpeg">
  </head>
  <body class="vh-100">

    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
              <!-- <div class="container-fluid"> -->
                  <div class="col-lg-3">
                    <a class="navbar-brand" href="admin_control.php">
                        <img src="img/logo.png" alt="">
                    </a>
                  </div>
                  <div class="col-lg-9">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse admin-control  d-flex justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a aria-current="page" href="./admin_control.php">Home</a>
                          </li>
                          <li class="nav-item">
                            <a href="./admin_page.php">Admin</a>
                          </li>
                          <li class="nav-item">
                            <a href="./admin_category.php">Category</a>
                          </li>
                          <li class="nav-item">
                              <a href="admin_food.php">Food</a>
                            </li>
                            <li class="nav-item">
                              <a href="admin_order.php">Order</a>
                            </li>
                        </ul>
                        <div class="logout-button">

                        <?php 
                        $sql_select = "SELECT * FROM admin_table";
                        $sql_query  = ($connect->query($sql_select));

                        $sql_array = mysqli_fetch_assoc($sql_query);
                        
                        
                        ?>

              <form action="" method="POST">
                <button type="submit" name="submit_logout" class="btn glow-button-delete" style="width: 80px!important;">Logout</button>
              </form>
              <?php 
                if(isset($_POST['submit_logout'])){
                  session_destroy();
                  header("location: admin_login.php");
                }
              ?>
              </div>
                      </div>
                  </div>
              <!-- </div> -->
            </nav>
        </div>
    </div>