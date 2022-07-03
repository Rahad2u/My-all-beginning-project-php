<?php 
session_name('test_session');
session_start(
    // ['cookie_lifetime' => 60]
);
// $_SESSION['name']='Rahad';
// echo $_SESSION['name'];
// session_destroy();

// $_SESSION['counter'] = $_SESSION['counter'] ?? 0;
// $_SESSION['counter']++;

 $_SESSION['name']='Rahad';
echo $_SESSION['name'];


?>