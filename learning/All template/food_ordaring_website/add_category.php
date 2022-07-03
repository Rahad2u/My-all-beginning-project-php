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
            <h1 class="text-center mb-4" style="color: #000;">Add Category</h1>
            <?php 
                // if(isset($_SESSION['success-message'])){
                //     echo $_SESSION['success-message'];
                // }
            ?>
            <?php 
           
        if(isset($_POST['sibmit-c'])){
            $title          = htmlspecialchars($_POST['title']);
            $image_file     = $_FILES['image'];
            ob_start();
            $f_redio        = htmlspecialchars($_POST['featured']);
            $a_redio        = htmlspecialchars($_POST['active']);
            ob_end_clean();
ob_start();
            if(isset($f_redio)){
            $f_active =  $_POST['featured'];
            }else{
            $f_active = "No";
            }

            if(isset($a_redio)){
            $a_active =  $_POST['active'];
            }else{
                $a_active = "No";
            }
            ob_end_clean();
// Chack img or not

if($_FILES["image"] && ".png" && ".jpg"){
    if(isset($_FILES["image"]['name'])){
        // print_r($_FILES["image"]);

        $image_name = $_FILES["image"]['name'];

// Very importent part

        // Set Auto rename img name
        // Separate String
                $exe = explode(".", $image_name);
                $file_extention = end($exe);
                
                $image_name = "food_category".rand(000, 999).".".$file_extention;

                $source_path = $_FILES['image']['tmp_name'];

                $destinetion_path = "../food_ordaring_website/img/categori_img/".$image_name;

                $upload_img = move_uploaded_file($source_path, $destinetion_path);

// Very importent part end

        if($upload_img==true){
           $_SESSION['success-message'] = "upload-success";
            unset($_SESSION['success-message']);
        }else{
            // echo "Not ok";
        }
    }else{
        echo "Not ok";
    }
}
        if($title!='' && $f_redio!='' && $a_redio!='' && $image_file!=''){
   
            // Create SQL query to insert category into database 
            $sql = "INSERT INTO category_table SET title='$title', 
            image_name= '$image_name', 
            featured='$f_active', 
            active='$a_active'";

            $sql_query = ($connect->query($sql));
            
            if($sql_query==true){
                $_SESSION['alart-c'] = "Alart category";
                header("location: admin_category.php");
            }
        }else{
            $_SESSION['alart-fill-up-field'] = "field up all field";
            if(isset($_SESSION['alart-fill-up-field'])){
        ?>
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Fill up all field</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        unset($_SESSION['alart-fill-up-field']);
        }
    }
        }

?>
            <div class="col-lg-2"></div>
            <div class="col-lg-8 bg-white p-4 shadow-lg" style="border-radius: 5px;">
            <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                <div class="title mt-3">
                        <label for="title" class="text-dark" style="width: 14%;"><strong>C-Title: </strong></label>
                        <input type="text" class="form-control" name="title" required>
                    </div>

                    <div class="img mt-3">
                        <label for="title" class="text-dark" style="width: 16%;"><strong>select-img: </strong></label>
                        <input type="file" class="form-control" name="image" required>
                    </div>

                    <div class="radio-button mt-4 d-flex">
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

                    <div class="radio-button mt-4 d-flex">
                    <div class="text-active">
                        <strong class="text-dark">Active: </strong> 
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="active" id="activeRadio1" value="Yes" required>
                    <label class="form-check-label" for="activeRadio1">Yes</label>
                    </div>

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="active" id="activeRadio2" value="No" required>
                    <label class="form-check-label" for="activeRadio2">No</label>
                    </div>

                    </div>
                </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="sibmit-c">Add category</button>
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