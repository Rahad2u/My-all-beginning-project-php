<?php 
require_once './function.php';
$task = $_GET['task']??'report';
$error = $_GET['error']??'0';
$info = '';
if('seed'==$task){
  seed();
  $info = "Sedding is complete";
}
$firstname = "";
$lastname  = "";
$age       = "";
$class     = "";
$roll      = "";
$id        = "";
if(isset($_POST['save'])){
  $firstname = htmlspecialchars($_POST['fname']);
  $lastname  = htmlspecialchars($_POST['lname']);
  $age       = htmlspecialchars($_POST['age']);
  $class     = htmlspecialchars($_POST['class']);
  $roll      = htmlspecialchars($_POST['roll']);
  $id        = htmlspecialchars($_POST['id']);
  if($id){
    // Update Student Code
    if($firstname!='' && $lastname!='' && $age!='' && $class!='' && $roll!=''){
     $result_update = updateStudent($id, $firstname, $lastname, $age, $class, $roll);
     if($result_update){
      header('location:./index.php?task=report');
     }else{
       $error = 1;
     }
    }
  }else{
    // Add a niw student
    if($firstname!='' && $lastname!='' && $age!='' && $class!='' && $roll!=''){
      $ADD_student = addStudent($firstname, $lastname, $age, $class, $roll);
      if($ADD_student){
       header('location:./index.php?task=report');
      }else{
        $error = 1;
      }
     }
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

    <title>CRUD PROJECT 4</title>
    <link rel="icon" href="./img/Webysther_20160423_-_Elephpant.svg.png">
  </head>
  <body class="vw-100 vh-100">
    
  <div class="header">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">
        <img src="./img/Webysther_20160423_-_Elephpant.svg.png" alt="" style="height: 60px; width: auto;">
    </a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent" >
      <div class="navbar-nav">
          <div class="nav-item">
          <a href="./index.php?task=report" class="nav-link active text-decoration-none" style="color: #f54275; font-size: 20px;">All Student |</a>
          </div>
          <div class="nav-item">
            <a href="./index.php?task=add"  class="nav-link text-decoration-none active" style="color: #f54275; font-size: 20px;">Ad new Student |</a>
          </div>
          <div class="nav-item">
            <a href="./index.php?task=seed" class="nav-link text-decoration-none active" style="color: #f54275; font-size: 20px;">Seed</a>
          </div>
      </div>
    </div>
  </div>
</nav>
  </div>
  <div class="info mt-4" style="text-align: center; font-size: 17px; color: #EE5A24; font-weight: 700;">
    <?php
    if($info!=''){
      echo "<p>$info</p>";
    }
?>
  </div>
  <section class="text-h d-flex justify-content-center mt-5 mb-4" style="color: #1042c9;">
      <h1><span class="auto-type"></span></h1>
  </section>
  <?php if('1'==$error): ?>
<section class="alart_D">
  <div class="container">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <div class="alert alert-danger" role="alert" style="text-align: center; color: #d60420; margin-bottom: 20px;">
            <h5>Duplicate Roll Number</h5>
          </div>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>
<?php endif; ?>

  <?php if('report'==$task): ?>
<section class="S_form">
  <div class="container">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <div class="student_table" >
          <?php generateReport() ?>
          </div>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Ad Student form -->

<section class="add-student">
  <?php 
  if('add'==$task){
    ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
        <form action="./index.php?task=add" method="POST" class="shadow-lg">
                    <div class="container">
                        <div class="row">
                            <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="col" style="text-align: left;">
                                   <label for="fname" class="form-label" style="font-size: 17px; color: #000; font-weight: 600;">First name*</label>
                                    <input type="text" class="form-control" placeholder="First name" id="fname" name="fname" value="<?php echo "$firstname"; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="col" style="text-align: left;">
                                   <label for="lname" class="form-label" style="font-size: 17px; color: #000; font-weight: 600;">Last name*</label>
                                    <input type="text" class="form-control" placeholder="Last name" id="lname" name="lname" value="<?php echo "$lastname"; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="col" style="text-align: left;">
                                    <label for="age" class="form-label" style="font-size: 17px; color: #000; font-weight: 600;">Age*</label>
                                    <input type="text" class="form-control" placeholder="Age" id="age" name="age" value="<?php echo "$age"; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="col" style="text-align: left;">
                                   <label for="class" class="form-label" style="font-size: 17px; color: #000; font-weight: 600;">Class*</label>
                                    <input type="text" class="form-control" placeholder="Class" id="class" name="class" value="<?php echo "$class"; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="col" style="text-align: left;">
                                <label for="roll" class="form-label" style="font-size: 17px; color: #000; font-weight: 600;">Roll*</label>
                                    <input type="text" class="form-control" placeholder="Roll" id="roll" name="roll" value="<?php echo "$roll"; ?>">
                                </div>
                            </div>
                            <div class="col-12" style="text-align: left;">
                                    <button type="submit" class="btn btn-primary" name="save" style="margin-bottom: 20px;">Update</button>
                                </div>
                                </div>
                        </div>
                    </div>
                    </form>
        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>
    <?php
  }
  ?>
</section>

 <!-- Edit form -->
 <!-- ====================== -->
<section class="edit-form">
  <?php 
  if('edit'==$task):
    $id   = htmlspecialchars($_GET['id']);
    $S_Id = studentGet($id);
    if($S_Id):
    ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
        <form action="./index.php?task=edit" method="POST" class="shadow-lg">
                    <div class="container">
                        <div class="row">
                            <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="col" style="text-align: left;">
                                   <label for="fname" class="form-label" style="font-size: 17px; color: #000; font-weight: 600;">First name*</label>
                                    <input type="text" class="form-control" placeholder="First name" id="fname" name="fname" value="<?php echo $S_Id['firstname']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="col" style="text-align: left;">
                                   <label for="lname" class="form-label" style="font-size: 17px; color: #000; font-weight: 600;">Last name*</label>
                                    <input type="text" class="form-control" placeholder="Last name" id="lname" name="lname" value="<?php echo $S_Id['lastname']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="col" style="text-align: left;">
                                    <label for="age" class="form-label" style="font-size: 17px; color: #000; font-weight: 600;">Age*</label>
                                    <input type="text" class="form-control" placeholder="Age" id="age" name="age" value="<?php echo $S_Id['age']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="col" style="text-align: left;">
                                   <label for="class" class="form-label" style="font-size: 17px; color: #000; font-weight: 600;">Class*</label>
                                    <input type="text" class="form-control" placeholder="Class" id="class" name="class" value="<?php echo $S_Id['class']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="col" style="text-align: left;">
                                <label for="roll" class="form-label" style="font-size: 17px; color: #000; font-weight: 600;">Roll*</label>
                                    <input type="text" class="form-control" placeholder="Roll" id="roll" name="roll" value="<?php echo $S_Id['roll']; ?>">
                                </div>
                                <input type="text" hidden value="<?php echo $id ?>" name="id">
                            </div>
                            <div class="col-12" style="text-align: left;">
                                    <button type="submit" class="btn btn-primary" name="save" style="margin-bottom: 20px;">Update</button>
                                </div>
                                </div>
                        </div>
                    </div>
                    </form>
        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>
    <?php
  endif;
endif;
  ?>
</section>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> <!-- auto tiping CDN -->
    <script>
            var typed= new Typed(".auto-type",{
            strings: ["CRUD PROJECT 4"],
            typespeed: 150,
            backSpeed: 160,
            loop: true,
        })
    </script>
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
