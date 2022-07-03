<?php 
session_start();
$session_name = $_SESSION['login'];
if($session_name!=""){
?>
<?php include "include_file/database_connect.php"; ?>
<?php include "include_file/admin_header.php"; ?>
<section class="admin_coltrol d-flex">
    <div class="container">
        <div class="row">
<h1 class="text-center" style="color: #000; margin-bottom: 35px; font-family: monospace;">Order list</h1>
            
            </div>
            <div class="col-lg-12">
            <form action="" method="POST">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th scope="col">S.N</th>
                      <th scope="col">Customer-N</th>
                      <th scope="col">Customer-Pn</th>
                      <th scope="col">Customer-E</th>
                      <th scope="col">Customer-M</th>
                      <th scope="col">Oder-F</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $auto_count = 1;
                    $sql_select = "SELECT * FROM order_table";
                    $sql_query  = ($connect->query($sql_select)); 
                    // Sql count
                    $sql_count  = mysqli_num_rows($sql_query);
                    if($sql_count>0){
                      while($mysqli_array = mysqli_fetch_assoc($sql_query)){
                        $id                    = $mysqli_array['id'];
                        $order_quantity        = $mysqli_array['order_quantity'];
                        $customer_name         = $mysqli_array['customer_name'];
                        $customer_phone_number = $mysqli_array['customer_phone_number'];
                        $customer_email        = $mysqli_array['customer_email'];
                        $customer_meassage     = $mysqli_array['customer_meassage'];
                        $order_product_id      = $mysqli_array['order_product_id'];
                        $status                = $mysqli_array['status'];
                        ?>
                         <tr>
                      <th scope="row"><?php echo $auto_count++; ?></th>
                      <td><?php echo $customer_name; ?></td>
                      <td><?php echo $customer_phone_number; ?></td>
                      <td><?php echo $customer_email; ?></td>
                      <td><?php echo $customer_meassage; ?></td>
                      <td><?php echo $order_product_id; ?></td>
                      <td>
                        <?php 
                        if($status=="Update"){
                          ?>
                            <p style="color: #2a0380;">Pending</p>
                          <?php
                        }elseif($status==1){
                            ?>
                            <p style="color: #2a0380;">Pending</p>
                            <?php
                        }elseif($status==2){
                          ?>
                          <p style="color: #2b8a06;">Delivered</p>
                          <?php
                        }elseif($status==3){
                            ?>
                            <p style="color: #96050e;">Cancelled</p>
                            <?php
                        }
                        else{
                          ?>
                          <p style="color: #fa3e25;">Update</p>
                          <?php
                        }
                        ?>
                      </td>
                      <td>
                          <a href="./admin_order_update.php?id=<?php echo $id; ?>" class="btn glow-button" id="click">Update</a>
                      </td>
                    </tr>
                    <style>
                       .glow-button{
                        color: #ddd;
                        transition: .5s;
                       
                       }
                       .glow-button:hover{
                        color: #fff;
                       }
                    </style>
                        <?php 
                        
                      }
                    }
                    ?>
                   
                  </tbody>
                </table>
            </form>
            </div>
        </div>
    </div>
</section>

<script>
function clickfunction(){
      document.getElementById('click').innerHTML= "OComplete";
}
</script>
<?php include "include_file/footer.php";

}else{
  header("location: admin_login.php");
}
?>