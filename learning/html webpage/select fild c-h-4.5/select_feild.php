<?php 
include_once "select_feild_function.php";
$fruitsN= ["apple", "orange", "mango", "grape", "cherry", "guava"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,
    100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
     integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" 
     crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    <title>select feild</title>
</head>
<body>
    <section class="s_f">
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="mt shadow-lg">

                    <form action="" method="POST">
                      <label for="input1" class="form-label">Select Your favorite fruits</label>
                      <p class="hide">
                          <?php 
                          
                        //   if(isset($_POST['favorite']) && $_POST["favorite"] !=''){
                        //       printf("My favourite fruits: %s", filter_input(INPUT_POST, 'favorite', FILTER_SANITIZE_STRING));
                        //   }
                          

                          // multipole selected

                         //$a_fruits=isset( $_POST['favorite'])? $_POST['favorite']: array();
                         //$a_fruits= $_POST['favorite'] ?? array();
                        
                         $a_fruits = filter_input(INPUT_POST,'favorite', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
                         if($a_fruits >0){
                             echo "My favourite fruits: ".join(",",$a_fruits);
                         }
                          ?>
                      </p>
                      <select class="form-select form-select-lg mb-3" aria-label="form-select-lg example" name="favorite[]" id="favorite" multiple>
                          <option value="Select" selected="true" disabled="disabled">Select one</option>
                         <?php displayOptions($fruitsN , $a_fruits); ?>
                      </select>
                     <div class="btt text-right mt-3">
                         <input href="#" type="submit" class="btn btn-danger">
                        </div>
                        </form> 

                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </section>
</body>
</html>