<?php 
session_start();
?>
<?php include "include_file/database_connect.php"; ?>
<?php include "include_file/header.php"; ?>

    <section class="from-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h2 class="text-center text-white text-c-animetion">Fill this form to confirm your order.</h2>
                    <?php
                    $title       = "";
                    $description = "";
                    $price       = "";
                    $image_name  = "";
                    $category_id = "";
                    
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];

                        // Select table sql

                        $sql_select = "SELECT * FROM food_table WHERE id = '$id'";

                        $sql_query = ($connect->query($sql_select));

                        $sql_array = mysqli_fetch_assoc($sql_query);

                        $title             = $sql_array['title'];
                        $description       = $sql_array['description'];
                        $price             = $sql_array['price'];
                        $image_name        = $sql_array['image_name'];
                        $category_id       = $sql_array['category_id'];
                    }

                    ?>
                    <div class="text-selected mt-5">
                        <h6 class="selected">Selected Food**</h6>
                        <form action="" method="POST" enctype="multipart/form-data">
                        <div class="select-food">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 p-3">
                                        <img src="./img/add_food_img/<?php echo $image_name; ?>" alt="">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="text-order">
                                            <h3><?php echo $title; ?></h3>
                                            <h6><b>Price: </b>$<?php echo $price; ?></h6>
                                                <label for="exampleInputPassword1" class="form-label">Quantity**</label>
                                                <input type="number" class="form-control" id="exampleInputPassword1" name="p_quantity" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-food-text">
                        <h6>Delivery Details**</h6>
                        <?php 
if(isset($_POST['submit-order'])){
$fullname     = htmlspecialchars($_POST['fullname']);
$p_quantity   = htmlspecialchars($_POST['p_quantity']);
$phone_number = htmlspecialchars($_POST['phone-number']);
$email        = htmlspecialchars($_POST['email']);
$message      = htmlspecialchars($_POST['message']);
$category_id  = htmlspecialchars($_POST['category_id']);
ob_start();
$chack        = htmlspecialchars($_POST['chack']);
ob_end_clean();

                
                if($fullname!="" && $p_quantity!="" && $phone_number!="" && $email!="" && $message!="" && $chack!=""){
                if($category_id!=""){
                    // Received customar order
                    $received_sql = "INSERT INTO order_table SET 
                    order_quantity           ='$p_quantity', 
                    customer_name            ='$fullname', 
                    customer_phone_number    ='$phone_number', 
                    customer_email           ='$email', 
                    customer_meassage        ='$message',
                    order_product_id         ='$category_id' 
                    ";
                    // Exicute query
                    $order_query = ($connect->query($received_sql));
                    if($order_query==true){
                        $_SESSION['order-sent'] = "Order sent";
                    }
                }else{
                            ?>
                            <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                            <strong>Can't order this food!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php
                }
            
}else{
    $_SESSION['empty-value'] = "You should fill up all field";
}
}
?>
                    <div class="order-food-input">
                            <div class="mb-3">
                              <label for="text1" class="form-label">Full-Name**</label>
                              <input type="text" name="fullname" class="form-control mb-3" id="text1" aria-describedby="textHelp" placeholder="Full-name" required>

                              <label for="text1" class="form-label">Phone-Number**</label>
                              <input type="text" name="phone-number" class="form-control mb-3" id="text1" aria-describedby="textHelp" placeholder="Phone-number" required>

                              <label for="exampleInputEmail1" class="form-label">Email**</label>
                              <input type="email" name="email" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" required>
                            </div>
                            <div class="form-outline">
                                <label class="form-label" for="textAreaExample1">Message**</label>
                                <textarea name="message" class="form-control mb-3" id="textAreaExample1" placeholder="Message" style="height: 100px;" required></textarea> 
                                <input type="text" hidden name="category_id"  value="<?php echo $category_id; ?>">
                              </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="chack" required>
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-danger text-white" name="submit-order">Confirm order</button>
                          </form>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
  
    <?php include "include_file/footer.php"; ?>