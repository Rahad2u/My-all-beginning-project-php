<?php 
include "./include_file/database_connect.php";

if(isset($_GET['id']) && isset($_GET['image_name'])){

 $id = $_GET['id'];
 $image = $_GET['image_name'];

 // Image remove add_food_image folder
if($image!=""){
    $image_path = "../food_ordaring_website/img/add_food_img/".$image;
    unlink($image_path);

    $sql_delete = "DELETE FROM food_table WHERE id=$id";

    $sql_query = ($connect->query($sql_delete));

    if($sql_query==true){
        $_SESSION["food-delete"] = "Delete Successfully";
        header("location: admin_food.php");
    }

}


}
?>