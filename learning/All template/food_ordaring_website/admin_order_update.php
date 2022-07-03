<?php include "./include_file/database_connect.php"; ?>
<?php include "./include_file/admin_header.php"; ?>
<style>
    .update-order{
        margin-top: 100px;
    }
</style>
                <!-- Update query -->
<?php 
            if($_GET['id']){
            $id = $_GET['id'];

            if(isset($_POST["decision"])){

                $decision = $_POST['decision'];
                if($decision=="Update"){
                    echo "empty";
                }else{
                    $sql_update = "UPDATE order_table SET status = '$decision'WHERE id = '$id'";
                    $sql_query  = ($connect->query($sql_update));
                }
               

               if($sql_query==true){
                header("location: admin_order.php");
               }
            }
            }

?>
<section class="update-order">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 text-center">
           <form action="" method="POST">
           <select class="form-select" aria-label="Default select example" name="decision">
                <option selected>Update</option>
                <option value="1">Pending</option>
                <option value="2">Delivered</option>
                <option value="3">Cancelled</option>
                </select>
                <div class="mt-4" style="text-align: left!important;">
                <button class="btn glow-button" name="submit">Submit</button>
            </div>
            <style>
                .glow-button{
                    color: #ddd;
                    transition: .5s;
                }
                .glow-button:hover{
                    color: #fff;
                }
            </style>
           </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
<?php include "./include_file/footer.php"; ?>