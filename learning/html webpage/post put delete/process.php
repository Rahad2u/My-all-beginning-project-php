<?php
    $connect = mysqli_connect('localhost','root','','mydatabase');

  
        $firstname = $_POST['first_name'];
        $lastname  = $_POST['last_name'];
        $email     = $_POST['email'];
        $descrip   = $_POST['Descrip'];
        
        $sql = "INSERT INTO users_table (first_name, last_last, email, Descrip) VALUES ('$firstname', '$lastname', '$email', '$descrip')";

        
        
 
    if(mysqli_query($connect, $sql)){
        echo "Data Inserted";
    }else{
        echo "Error:" . $sql. "<br>" . mysqli_error($connect);
     }
    
    


?>
