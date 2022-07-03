<?php
  $connect = mysqli_connect('localhost', 'root', '', 'crud1');

  $firstname = "";
  $lastname  = "";
  $age       = "";
  $class     = "";
  $roll      = "";
      if(isset($_POST['submit'])){
         $firstname = $_POST['firstname'];
         $lastname  = $_POST['lastname'];
         $age       = $_POST['age'];
         $class     = $_POST['class'];
         $roll      = $_POST['roll'];
      }
      if($firstname!='' && $lastname!='' && $age!='' && $class!='' && $roll!=''){
        $receive = "INSERT INTO student_form(first_name2, last_name2, age2, class2, roll2)
       VALUES ('$firstname', '$lastname', '$age', '$class', '$roll')";
        $mysqli_query = mysqli_query($connect, $receive);
        header("location:./adStudent.php");
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
  <body style="height: 100vh;">
   <!-- Header code start -->
    <div class="header">
    <nav class="navbar navbar-expand-lg" style="background: #dfe4ea;">
  <div class="container-fluid">
    <a class="navbar-brand" href="./student.php">
      <img src="img/PHP-Logo-Free-Download-PNG.png" alt="" style="width: 120px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav"  style="display: flex; justify-content: center;">
      <ul class="navbar-nav" style="font-size: 19px; font-weight: 500;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./student.php">Home</a>
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
        <div class="text-f" style="display: flex; justify-content: center; color: #000; margin-bottom: 15px;">
                <h3>Add Student</h3>
              </div>
      <form action="./adStudent.php" method="POST" class="shadow-lg" style="padding: 13px;">
      <div class="row g-3">
            <div class="col-lg-6">
            <label for="firstname" style="margin-bottom: 10px; font-size: 15px; font-weight: 700; color: #000;">First name*</label>
              <input type="text" class="form-control" placeholder="First name" aria-label="First name" id="firstname" name="firstname">
            </div>
            <div class="col-lg-6">
              <label for="lastname" style="margin-bottom: 10px; font-size: 15px; font-weight: 700; color: #000;">Last name*</label>
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" id="lastname" name="lastname">
            </div>
            <div class="col-lg-4">
              <label for="age" style="margin-bottom: 10px; font-size: 15px; font-weight: 700; color: #000;">Age*</label>
              <input type="text" class="form-control" placeholder="Age" aria-label="Age" id="age" name="age">
            </div>
            <div class="col-lg-4">
              <label for="class" style="margin-bottom: 10px; font-size: 15px; font-weight: 700; color: #000;">Class*</label>
              <input type="text" class="form-control" placeholder="Class" aria-label="Class" id="class" name="class">
            </div>
            <div class="col-lg-4">
              <label for="roll" style="margin-bottom: 10px; font-size: 15px; font-weight: 700; color: #000;">Roll*</label>
              <input type="text" class="form-control" placeholder="Last name" aria-label="Roll" id="roll" name="roll">
            </div>
            <div class="b_T" style="display: flex; justify-content: end;">
              <button type="submit" class="btn btn-primary" name="submit" style="margin-bottom: 15px;">Submit</button>
            </div>
</div>
      </form>
        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>
    </div>
    <footer class="footer">
        
    </footer>
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
