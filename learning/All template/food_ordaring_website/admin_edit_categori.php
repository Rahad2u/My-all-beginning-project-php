<!-- Database connection -->
<?php include "include_file/database_connect.php"; ?>
<?php 
session_start();
$session_name = $_SESSION['login'];
if($session_name!=""){
?>
<!-- Admin header -->
<?php include "include_file/admin_header.php"; ?>


<section class="ad-admin-page" style="background-color: #ececec; padding: 8%;">
    <div class="container">
        <div class="row">
            <h1 class="text-center mb-4" style="color: #000;">Edit Category</h1>
      
           
            <?php 
            
            if(isset($_GET['id'])){
            
                $id = $_GET['id'];
            

            // Database table select
            $select_table = "SELECT * FROM category_table WHERE id = '$id'";
            $sql_query = ($connect->query($select_table));

            $sql_num_rows = mysqli_num_rows($sql_query);

            if($sql_num_rows == 1){
                $sql_array = mysqli_fetch_assoc($sql_query);
            
            $id                = $sql_array['id'];
            $title             = $sql_array['title'];
            $current_image_n   = $sql_array['image_name'];
            $featured          = $sql_array['featured'];
            $active            = $sql_array['active'];
            }else{
                $_SESSION['not-found'] = "Categori not found";
                header("location: admin_category.php");
            }
        }else{
            header("location: admin_category.php");
        }

            ?>


<?php 
            
            // Data update Start

            if(isset($_POST['submit-U'])){
                $c_id      = htmlspecialchars($_POST['hidden-id']);
                $title     = htmlspecialchars($_POST['title']);
                $c_image   = htmlspecialchars($_POST['current_img_name']);
                $n_image   = $_FILES['n_image'];
                $featured  = htmlspecialchars($_POST['featured']);
                $active    = htmlspecialchars($_POST['active']);




                // Chack image
                if($_FILES["n_image"] && ".jpg" && ".png" && ".svg"){

                    if(isset($_FILES['n_image']['name'])){
                        
                        // Chack image set or not
                        $image_upload = $_FILES['n_image']['name'];
    
    // Very importent part Start
    
                    // Set Auto rename img name
                    // Separate String
                            $exe = explode(".", $image_upload);
                            $file_extention = end($exe);
                            echo $file_extention;
                            
                            $image_name = "food_category".rand(000, 999).".".$file_extention;
                            print_r($image_name);
    
                            $source_path = $_FILES['n_image']['tmp_name'];
    
                            $destinetion_path = "../food_ordaring_website/img/categori_img/".$image_name;
    
                            $upload_img = move_uploaded_file($source_path, $destinetion_path);
    
                            if($upload_img==false){
                                $_SESSION['field'] = "faield to upload image";
                            }
    
    
                            // remove current image
    
                            $remove_img_path = "./img/categori_img/".$c_image;
                            if($current_image_n!=""){
                               unlink($remove_img_path);
                            }else{
                                ?>
                                <img src="./img/andrea-davis-yLX5NwdeRKM-unsplash.jpg" alt="" style="height: 80px; width: 100px; border-radius: 10px;">
                                <?php
                            }
    
    // Very importent part end
    
                       
    
                    }else{
                        $image_name_c = $c_image;
                    }
                }
    




                // Update Sql

                $sql_update = "UPDATE category_table SET 
                title = '$title', 
                image_name = '$image_name', 
                featured = '$featured', 
                active = '$active' WHERE 
                id = '$id'";
               
                $sql_query_u = ($connect->query($sql_update));


               if($sql_query_u==true){
                   $_SESSION['admin_edit_successfull'] = "Successfully admin add";
                    header("location: admin_category.php");
               }else{
                   echo "Sql update query no execute";
               }
            }


            
            ?>


            <div class="col-lg-2"></div>
            <div class="col-lg-8 bg-white p-4 shadow-lg" style="border-radius: 5px;">
            <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                <div class="title mt-3">
                        <label for="title" class="text-dark" style="width: 16%;"><strong>C-Title: </strong></label>
                        <input type="text" class="form-control" name="title" value="<?php echo $title; ?>" required>
                    </div>

                    <div class="img mt-3">
                        <label for="title" class="text-dark" style="width: 18%;"><strong>Current-img: </strong></label>
                        <div class="curent-img form-control border-none text-left">
                            <?php 
                            if($current_image_n!=""){
                                ?>
                                <img src="./img/categori_img/<?php echo $current_image_n;?>" alt="" style="height: 80px; width: 100px; border-radius: 10px;">
                                <?php
                            }else{
                                ?>
                                 <img src="./img/png-clipart-logo-brand-product-trademark-font-not-found-logo-brand.png" alt="" style="height: 80px; width: 100px; border-radius: 10px;">
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="img mt-3">
                        <label for="title" class="text-dark" style="width: 18%;"><strong>New-img: </strong></label>
                        <input type="file" class="form-control" name="n_image" value="<?php echo $image_name; ?>" required>
                    </div>

                    <div class="radio-button mt-4 d-flex">
                    <div class="text">
                        <strong class="text-dark">Featured: </strong> 
                    </div>
                    <div class="form-check-inline">
                    <input <?php if($featured=="Yes"){echo "checked";} ?> class="form-check-input" type="radio" name="featured" id="inlineRadio1" value="Yes" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                    <input <?php if($featured=="No"){echo "checked";} ?> class="form-check-input" type="radio" name="featured" id="inlineRadio2" value="No" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>

                    </div>

                    <div class="radio-button mt-4 d-flex">
                    <div class="text-active">
                        <strong class="text-dark">Active: </strong> 
                    </div>
                    <div class="form-check form-check-inline">
                    <input <?php if($active=="Yes"){echo "checked";} ?> class="form-check-input" type="radio" name="active" id="activeRadio1" value="Yes" required>
                    <label class="form-check-label" for="activeRadio1">Yes</label>
                    </div>

                    <div class="form-check form-check-inline">
                    <input <?php if($active=="No"){echo "checked";} ?> class="form-check-input" type="radio" name="active" id="activeRadio2" value="No" required>
                    <label class="form-check-label" for="activeRadio2">No</label>

                    <!-- Hidden field -->
                    <input type="text" name="current_img_name" hidden value="<?php echo $current_image_n; ?>">
                    <input type="text" name="hidden-id" value="<?php echo $id; ?>" hidden>
                    </div>

                    </div>
                </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="submit-U">Submit</button>
                    </div>
            </form>

            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>

<!-- footer section -->
<?php include "include_file/footer.php"; ?>

<?php 
}else{
    header("location: admin_login.php");
}
?>
