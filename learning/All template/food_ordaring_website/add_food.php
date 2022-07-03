
<?php 
session_start();
$session_name = $_SESSION['login'];
if($session_name!=""){
?>
<!-- Database connection -->
<?php include "include_file/database_connect.php"; ?>
<!-- Admin header -->
<?php include "include_file/admin_header.php"; ?>

<section class="ad-admin-page" style="background-color: #ececec; padding: 8%;">
    <div class="container">
        <div class="row">
            <h1 class="text-center mb-4" style="color: #000;">Add Foods</h1>
            
            <?php 
                if(isset($_SESSION['alart-field-Up'])){
                    $page = $_SERVER['PHP_SELF'];
                    $sec = "1.5";
                    header("Refresh: $sec; url=$page");
                    ?>
                    <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                      <strong>You should fill up all field!!!</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['alart-field-Up']);

                }
            ?>

            <div class="col-lg-2"></div>
            

            <?php 
            
            if(isset($_POST['submit'])){
                $f_title    = htmlspecialchars($_POST['f_title']);
                $f_image_n  = $_FILES['f_image']; 
                // print_r($f_image_n) ;
                $f_price    = htmlspecialchars($_POST['f_price']);
                $f_food_id  = htmlspecialchars($_POST['f_food_id']);
                $f_food_dis = htmlspecialchars($_POST['f_food_dis']);
                ob_start();
                $f_featured = htmlspecialchars($_POST['featured']);
                $f_active   = htmlspecialchars($_POST['active']);
                ob_end_clean();

// set multipole value radio button 
ob_start();
                if(isset($f_featured)){
                    $f_featured = $_POST['featured'];
                }else{
                    echo "No";
                }

                if(isset($f_active)){
                    $f_active = $_POST['active'];
                }else{
                    echo "No";
                }
            ob_end_clean();

// Chack image

    if(isset($_FILES['f_image']) && ".png" && ".jpg" && ".svg"){
    $image_name = $_FILES['f_image']['name'];
              
// Very importent part

        // Set Auto rename img name
        // Separate String
                $exe = explode(".", $image_name);
                $file_extention = end($exe);
                
                $image_name = "food_Add".rand(000, 999).".".$file_extention;

                $source_path = $_FILES['f_image']['tmp_name'];

                $destinetion_path = "../food_ordaring_website/img/add_food_img/".$image_name;

                $upload_img = move_uploaded_file($source_path, $destinetion_path);

// Very importent part end

               // Chack any field empty or not
if($f_title!="" && $f_image_n!="" && $f_price!="" && $f_food_id!="" && $f_food_dis!="" && $f_featured!="" && $f_active!=""){
    
    //  Data insert database

    $sql_insert = "INSERT INTO food_table SET 
    title='$f_title', 
    description='$f_food_dis', 
    price='$f_price', 
    image_name='$image_name', 
    category_id='$f_food_id', 
    featured='$f_featured', 
    active='$f_active'";

    // Exicute query

    $sql_query = ($connect->query($sql_insert));

    if($sql_query==true){
        $_SESSION['successfully-add'] = "Successfully add food";
        header("location: admin_food.php");
    }else{
        echo "sql query not working";
    }

}else{
    $_SESSION['alart-field-Up'] = "Fill up all field";
    // header("location: add_food.php");
}
                
                }

            }

            ?>


            <div class="col-lg-8 bg-white p-4 shadow-lg">

            <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <label for="inputname1" class="form-label"><i><b>Title**</b></i></label>
                        <input type="text" class="form-control" id="inputname1" placeholder="Full name" name="f_title" required>
                    </div>
                   
                    <div class="col-md-6">
                        <label for="inputemail2" class="form-label"><i><b>Image**</b></i></label>
                        <input type="file" class="form-control" name="f_image">
                    </div>
                    <div class="col-md-6">
                        <label for="inputpassword44" class="form-label"><i><b>Price**</b></i></label>
                        <input type="number" class="form-control" id="inputpassword44" placeholder="set-price" name="f_price" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword46" class="form-label"><i><b>Food-id**</b></i></label>
                        <input type="text" placeholder="Set-Food-Id" class="form-control" id="inputPassword46" name="f_food_id" required>
                    </div>
                    <div class="col-md-10">
                        <label for="inputPassword47" class="form-label"><i><b>Food-description**</b></i></label>
                        <textarea class="form-control" id="inputPassword47" rows="3" placeholder="Food-description" name="f_food_dis" required></textarea>
                    </div>

                    <div class="col-12">

                    <div class="radio-button mt-1 d-flex">
                    <div class="text">
                        <strong class="text-dark">Featured: </strong> 
                    </div>
                    <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="featured" id="inlineRadio1" value="Yes" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="featured" id="inlineRadio2" value="No" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>

                    </div>

                    <div class="radio-button mt-4 d-flex mb-3">
                    <div class="text" style="margin-right: 20px;">
                        <strong class="text-dark">Active: </strong> 
                    </div>
                    <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="active" id="inlineRadio15" value="Yes" required>
                    <label class="form-check-label" for="inlineRadio15">Yes</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="active" id="inlineRadio25" value="No" required>
                    <label class="form-check-label" for="inlineRadio25">No</label>
                    </div>

                    </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn glow-button" name="submit" style="width: 100px!important;">Add food</button>
                    </div>
                    <style>
                        .glow-button{
                            transition: .5s;
                        }
                        .glow-button:hover{
                            color: #fff;
                        }
                    </style>
            </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>

<!-- footer section -->
<?php include "include_file/footer.php"; 

}else{
    header("location: admin_login.php");
}
?>