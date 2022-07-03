
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
            
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                
                $sql_select = "SELECT * FROM food_table WHERE id = '$id'";
                $sql_qurey  = ($connect->query($sql_select));

                $mysqli_numrows = mysqli_num_rows($sql_qurey);

                if($mysqli_numrows==1){
                    $sql_array = mysqli_fetch_assoc($sql_qurey);

                    $d_f_title              = $sql_array['title'];
                    $d_f_description        = $sql_array['description'];
                    $d_f_price              = $sql_array['price'];
                    $d_f_image_name         = $sql_array['image_name'];
                    $d_f_category_id        = $sql_array['category_id'];
                    $d_f_featured           = $sql_array['featured'];
                    $d_f_active             = $sql_array['active'];

                }else{
                    $_SESSION['not-found-f'] = "Food table not found";
                    header("location: admin_edit_food.php");
                }
            }else{
                header("location: admin_food.php");
            }
            
            

             // Data update Start

             if(isset($_POST['submit'])){

                $n_current_img  = htmlspecialchars($_POST['current_img_name']);
                $n_hidden_id    = htmlspecialchars($_POST['hidden-id']);
                 
                $n_title        = htmlspecialchars($_POST['e_title']);
                $n_e_image      = $_FILES['e_image'];
                $n_price        = htmlspecialchars($_POST['e_price']);
                $n_food_id      = htmlspecialchars($_POST['e_food_id']);
                $n_food_dis     = htmlspecialchars($_POST['e_food_dis']);
                ob_start();
                $n_featured     = htmlspecialchars($_POST['featured']);
                $n_active       = htmlspecialchars($_POST['active']);
                ob_end_clean();


                // Chack image
                if($_FILES["e_image"] && ".jpg" && ".png" && ".svg"){

                    if(isset($_FILES['e_image']['name'])){
                        
                        // Chack image set or not
                        $image_upload = $_FILES['e_image']['name'];
    
    // Very importent part Start
    
                    // Set Auto rename img name
                    // Separate String
                            $exe = explode(".", $image_upload);
                            $file_extention = end($exe);
                            echo $file_extention;
                            
                            $image_name = "food_category".rand(000, 999).".".$file_extention;
                            // print_r($image_name);
    
                            $source_path = $_FILES['e_image']['tmp_name'];
    
                            $destinetion_path = "../food_ordaring_website/img/add_food_img/".$image_name;
    
                            $upload_img = move_uploaded_file($source_path, $destinetion_path);
    
                            if($upload_img==false){
                                $_SESSION['failed'] = "failed to upload image";
                            }
    
    
                            // remove current image
    
                            $remove_img_path = "./img/add_food_img/".$n_current_img;
                            if($n_current_img!=""){
                               unlink($remove_img_path);
                            }else{
                                ?>
                                <img src="./img/png-clipart-logo-brand-product-trademark-font-not-found-logo-brand.png" alt="" style="height: 80px; width: 100px; border-radius: 10px;">
                                <?php
                            }
    
    // Very importent part end
    
                       
    
                    }else{
                        $image_name_c = $n_current_img;
                    }
                }
    




                // Update Sql

                $sql_update = "UPDATE food_table SET 
                title = '$n_title', 
                description = '$n_food_dis', 
                image_name = '$image_name', 
                category_id = '$n_food_id', 
                price = '$n_price',
                featured = '$n_featured', 
                active = '$n_active' WHERE 
                id = '$id'";
               
               $sql_query_u = ($connect->query($sql_update));


               if($sql_query_u==true){
                   $_SESSION['admin_food_edit_successfull'] = "Successfully edit food";
                    header("location: admin_food.php");
               }else{
                   echo "Sql update query not working";
               }
            }


            ?>
               

            <div class="col-lg-2"></div>
            


            <div class="col-lg-8 bg-white p-4 shadow-lg">

            <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <label for="inputname1" class="form-label"><i><b>Title**</b></i></label>
                        <input type="text" class="form-control" id="inputname1" placeholder="Full name" name="e_title" value="<?php echo $d_f_title; ?>" required>
                    </div>

                    <div class="col-md-6">
                        <label for="inputemail2" class="form-label"><i><b>Change-image**</b></i></label>
                        <input type="file" class="form-control" name="e_image">
                    </div>
                   
                    <div class="col-md-6">
                        <label for="inputpassword44" class="form-label"><i><b>Price**</b></i></label>
                        <input type="number" class="form-control" id="inputpassword44" placeholder="set-price" name="e_price" value="<?php echo $d_f_price; ?>" required>
                    </div>

                    <div class="col-md-6">
                        <label for="inputemail2" class="form-label"><i><b>Current-image**</b></i></label>
                        <div class="image-set form-control">
                            <?php 
                            if($d_f_image_name!=""){
                                ?>
                                <img src="./img/add_food_img/<?php echo $d_f_image_name; ?>" alt="" style="height: 80px; width: 100px; border-radius: 10px;">
                                <?php
                            }else{
                                ?>
                                <img src="./img/png-clipart-logo-brand-product-trademark-font-not-found-logo-brand.png" alt="" style="height: 80px; width: 100px; border-radius: 10px;">
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="inputPassword46" class="form-label"><i><b>Food-id**</b></i></label>
                        <input type="text" placeholder="Set-Food-Id" class="form-control" id="inputPassword46" name="e_food_id" value="<?php echo $d_f_category_id; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword47" class="form-label"><i><b>Food-description**</b></i></label>
                        <textarea class="form-control" id="inputPassword47" rows="3" placeholder="Food-description" name="e_food_dis" required><?php echo $d_f_description; ?></textarea>
                    </div>

                    <div class="col-12">

                    <div class="radio-button mt-1 d-flex">
                    <div class="text">
                        <strong class="text-dark">Featured: </strong> 
                    </div>
                    <div class="form-check-inline">
                    <input class="form-check-input" <?php if($d_f_featured=="Yes"){echo "checked";} ?> type="radio" name="featured" id="inlineRadio1" value="Yes" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" <?php if($d_f_featured=="No"){echo "checked";} ?> type="radio" name="featured" id="inlineRadio2" value="No" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>

                    </div>

                    <div class="radio-button mt-4 d-flex mb-3">
                    <div class="text" style="margin-right: 20px;">
                        <strong class="text-dark">Active: </strong> 
                    </div>
                    <div class="form-check-inline">
                    <input class="form-check-input" <?php if($d_f_active=="Yes"){echo "checked";} ?> type="radio" name="active" id="inlineRadio15" value="Yes" required>
                    <label class="form-check-label" for="inlineRadio15">Yes</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" <?php if($d_f_active=="No"){echo "checked";} ?> type="radio" name="active" id="inlineRadio25" value="No" required>
                    <label class="form-check-label" for="inlineRadio25">No</label>

                    <!-- Hidden field -->
                    <input type="text" name="current_img_name" hidden value="<?php echo $d_f_image_name; ?>">
                    <input type="text" name="hidden-id" value="<?php echo $id; ?>" hidden>
                    </div>

                    </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn glow-button" name="submit" style="width: 100px!important;">Edit food</button>
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