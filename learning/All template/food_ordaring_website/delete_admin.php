<?php 
session_start();
$session_name = $_SESSION['login'];
if($session_name!=""){
?>
<?php 
include "include_file/database_connect.php";
ob_start();
$id = $_GET['id'];
ob_end_clean();
// mysql delete 

$delete = "DELETE FROM admin_table WHERE id = $id";

// mysql query
$query = ($connect->query($delete));

if($query==true){
    $_SESSION['delete'] = "Sucess fulley deleted admin";
    header("location:./admin_page.php");
}

}else{
    header("location: admin_login.php");
  }
  ?>