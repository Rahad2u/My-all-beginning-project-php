<?php 
require_once('function.php');
$info= '';
$task= $_GET['seed'] ?? 'report';
if('seed'== $task){
    seed(DB_name);
    $info= 'Seeding is completed';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;
    1,300;1,400;1,500;1,700;1,900&family=Spline+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CRUD Project</title>
    <link rel="icon" href="img/Webysther_20160423_-_Elephpant.svg.png">
</head>
<body>
    <section class="crud_project">
        <div class="container">
            <div class="row">
                <div class="text_crud align-content-center">
                    <h2><span class="auto-type"></span></h2>
                    <p>A Sample Project To Perform CRUD Operation Using Plain Files And PHP</p>
                    <?php include_once('nav.php'); ?>
                </div>
                <?php 
                    if($info != ''){
                        echo "<p>{$info}</p>";
                    }
                ?>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> <!-- auto tiping cdn -->
    <script>
        var typed= new Typed(".auto-type",{
            strings: ["CRUD Project 1"],
            typespeed: 150,
            backSpeed: 160,
            loop: true,
        })
    </script>
</body>
</html>