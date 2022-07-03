<?php
  $connect = mysqli_connect('localhost', 'root', '', 'crud1');
  // $id        = "";
  // $firstname = "";
  // $lastname  = "";
  // $age       = "";
  // $class     = "";
  // $roll      = "";

  if(isset($_GET['del_id'])){
    $del_id = $_GET['del_id'];
   $sql_delete =  "DELETE FROM student_form WHERE id = $del_id";
   if(mysqli_query($connect, $sql_delete)){
     header('location: ./index.php');
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
    <!-- google roboto font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,
    900&family=Spline+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icon CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css">
    <title>CRUD PROJECT 3</title>
    <link rel="icon" href="img/Webysther_20160423_-_Elephpant.svg.png">
  </head>
  <body class="vh-100">
   <!-- Header code start -->
    <div class="header">
    <nav class="navbar navbar-expand-lg" style="background: #dfe4ea;">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">
      <img src="img/PHP-Logo-Free-Download-PNG.png" alt="" style="width: 120px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav"  style="display: flex; justify-content: center;">
      <ul class="navbar-nav" style="font-size: 19px; font-weight: 500;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="./adStudent.php">Ad Student</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    </div>
 
    <!-- form start -->
    <div class="S-form" style="margin-top: 100px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
        <div class="text-f bg-primary p-3" style="display: flex; justify-content: center; color: #fff; margin-bottom: 15px;">
                <h3>Class 10 student's list</h3>
              </div>
              <div class="student-table">
                <?php 
                $sql       =  "SELECT * FROM student_form";
                $sql_query = mysqli_query($connect, $sql);
                echo'<table class="table table-primary">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Class</th>
                <th>Roll</th>
                <th>Action</th>
                ';

                while($sql_array = mysqli_fetch_assoc($sql_query)){   
                $id        = $sql_array['id'];            
                $firstname = $sql_array['first_name2'];
                $lastname  = $sql_array['last_name2'];
                $age       = $sql_array['age2'];
                $class     = $sql_array['class2'];
                $roll      = $sql_array['roll2'];
                echo"
                <tbody>
                  <td>$firstname</td>
                  <td>$lastname</td>
                  <td>$age</td>
                  <td>$class</td>
                  <td>$roll</td>
                  <td>
                  <a href='./edit.php?edit_id=$id' class='btn btn-primary'>Edit</a>
                  <a href='./index.php?del_id=$id' class='btn btn-danger'>Delete</a>
                  </td>
                </tbody>
                ";
                }
                ?>
              </div>
        </div>
        <div class="col-lg-1"></div>
      </div>
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
