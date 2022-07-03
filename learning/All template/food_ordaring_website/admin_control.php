<?php 
session_start();
$session_name = $_SESSION['login'];
if($session_name!=""){
?>
<?php include "include_file/admin_header.php"; ?>
<style>

/* text color animation */

 .admin_coltrol h1 {
  animation: color-change 4s infinite;
} 

/* @keyframes color-change {
  0% { color: #000; }
  50% { color: #fff; }
  100% { color: #000; }
}   */

.admin_coltrol{
  background-image: url(./img/bg.jpg);
   background-repeat: no-repeat;
  background-position: center;
  background-size: cover; 
}



</style>
<section class="admin_coltrol d-flex justify-content-center align-items-center" style="height: 100%;">
 


    <h1 class="animated bounce infinite">
    <span class="text-welcome" style="font-family: fantasy;">Welcome To Food Ordering Website Control Panell</span>
    <span class="text-welcome" style="font-family: fantasy;"></span>
  </h1>
</section>


<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> <!-- auto tiping cdn -->
<script>
          // Auto typing cdn

        // alert("If you want to get services from this site then you have to follow all the rules of the website");
        // var typed= new Typed(".text-welcome",{
        //     strings: ["Welcome To Food Ordering Website Control Panell"],
        //     typespeed: 400,
        //     backSpeed: 200,
        //     loop: true,
        // })
        const num = document.querySelector(".number");
let counter = 0;
setInterval(() => {
  if (counter == 100) {
    clearInterval();
  } else {
    counter += 1;
    num.textContent = counter + "%";
  }
}, 35);
    </script>
<?php include "include_file/footer.php"; 
}else{
  header("location: admin_login.php");
}
?>
