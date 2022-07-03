<?php 
    $database = mysqli_connect('localhost', 'root', '', 'crud1');
    
    $firstname = "";
    $lastname  = "";
    $age       = "";
    $class     = "";
    $roll      = "";
    if(isset($_POST['submit'])){
       $firstname = htmlspecialchars($_POST['firstname']);
       $lastname  = htmlspecialchars($_POST['lastname']);
       $age       = htmlspecialchars($_POST['age']);
       $class     = htmlspecialchars($_POST['class']);
       $roll      = htmlspecialchars($_POST['roll']);
       $id        = htmlspecialchars($_POST['id']);
       
    }
  if($firstname!='' && $lastname!='' && $age!='' && $class!='' && $roll!=''){
    $sql = "INSERT INTO student_data(firstname, lastname, age, class, roll) VALUES('$firstname', '$lastname', '$age', '$class', '$roll')";
    $insert =  mysqli_query($database, $sql);
    header("location: index.php");
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css">
    <title>CRUD2</title>
    <link rel="icon" href="./img/Webysther_20160423_-_Elephpant.svg.png">
  </head>
  <body style="height: 100vh;">
   <div class="container">
       <div class="row">
           <div class="col-lg-2">
           <div class="formB" style="margin-top: 100px; text-align: left;">
             <a href="./student_table.php" class="text-decoration-none btn btn-success">
               <i class="fa-solid fa-arrow-left" style="margin-right: 10px;"></i>Back student list</a>
           </div>
           </div>

           <div class="col-lg-8" style="margin-top: 100px;">
            <form action="./index.php" method="POST" class="shadow-lg border border-secondary padingf">
            <div class="row g-3">
            <div class="formtext mt-4">
                    <h4>Submit your data!</h4>
                </div>
                <div class="col-lg-6 mb-4 mt-3">
                     <input type="hidden" name="id">
                    <label for="firstname" class="mb-1 tsize">First name*</label>
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name" id="firstname" name="firstname">
                </div>
                <div class="col-lg-6 mb-4 mt-3">
                    <label for="lastname" class="mb-1 tsize">Last name*</label>
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" id="lastname" name="lastname">
                </div>
                <div class="col-lg-4">
                    <label for="age" class="mb-1 tsize">Age*</label>
                    <input type="text" class="form-control" placeholder="Age" aria-label="age" id="age" name="age">
                </div>
                <div class="col-lg-4">
                    <label for="class" class="mb-1 tsize">Class*</label>
                    <input type="text" class="form-control" placeholder="Class" aria-label="class" id="class" name="class">
                </div>
                <div class="col-lg-4">
                    <label for="roll" class="mb-1 tsize">Roll*</label>
                    <input type="text" class="form-control" placeholder="Class Roll" aria-label="roll" id="roll" name="roll">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        I Agree
                    </label>
                    </div>
                    <div class="button">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </div>
            </form>
           </div>
           <div class="col-lg-2"></div>
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
