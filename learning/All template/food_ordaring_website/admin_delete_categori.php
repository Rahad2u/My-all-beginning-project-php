<?php 
session_start();
$session_name = $_SESSION['login'];
if($session_name!=""){


include "./include_file/database_connect.php";

if(isset($_GET['id']) && isset($_GET['image_name'])){

    $id_d = $_GET['id'];
    $image_name = $_GET['image_name'];

    // Remove image function setup

    if($image_name!=""){
        $image_path = "./img/categori_img/".$image_name;
        $remove_img = unlink($image_path);

        if($remove_img==false){
            $_SESSION['remove'] = "Image remove Failed";
            header("location: admin_category.php");
        }else{
            $_SESSION['remove'] = "Image remove Successfull";
            header("location: admin_category.php");
        }
        $mysql_d = "DELETE FROM category_table WHERE id=$id_d";

            $mysql_q = ($connect->query($mysql_d));
        
            if($mysql_q==true){
                $_SESSION['categori_d'] = "Categori delete successfull";
                header("location: admin_category.php");
            }
    }

 
}else{
    header("location: admin_category.php");
}

}else{
    header("location: admin_login.php");
  }
  ?>