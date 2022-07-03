<?php 
require_once('function.php');
$info= '';
$task= $_GET['task'] ?? 'report';
$error= $_GET['error'] ?? '0';
if('seed' == $task){
    seed();
    $info= 'Seeding is completed';
}
$fname="";
$lname="";
$age="";
$class="";
$roll="";
if(isset($_POST['submit'])){
$fname= htmlspecialchars($_POST['fname']);
$lname= htmlspecialchars($_POST['lname']);
$age=   htmlspecialchars($_POST['age']);
$class= htmlspecialchars($_POST['class']);
$roll=  htmlspecialchars($_POST['roll']);
//$id=    htmlspecialchars($_POST('id'));

if($fname!='' && $lname!='' && $age!='' && $class!='' && $roll!=''){
   $result= addStudent($fname, $lname, $age, $class, $roll);
    if($result){
        header("location: index.php?task=report");
    }else{
        $error= 1;
    }
}
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
                <div class="text_crud">
                    <h2><span class="auto-type"></span></h2>
                    <p>A Sample Project To Perform CRUD Operation Using Plain Files And PHP</p>
                    <?php include_once('nav.php'); ?>
                </div>
                <div class="centerz">
                <?php 
                   if($info != ''){
                    echo ("<p>{$info}</p>");
                   };
                ?>
                <div class="allart" style="margin-top: 30px; text-align: center; color: #EA2027;">
                <?php if('1' == $error):?>
                    <h5>Duplicate roll number!!!</h5>
                <?PHP endif ?>
                </div>
                <div class="table" style="margin-top: 20px; display: inline-grid;">
                <?php if('report' == $task):?>
                    <?php genReport(); ?>
                <?PHP endif ?>
                </div>
                <div class="from_action">
                <?php if('add' == $task):?>
                    <form action="index.php?task=add" method="POST" class="shadow-lg">
                    <div class="container">
                        <div class="row">
                            <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="col" style="text-align: left;">
                                   <label for="fname" class="form-label" style="font-size: 15px; color: #000; font-weight: 600;">First name*</label>
                                    <input type="text" class="form-control" placeholder="First name" id="fname" name="fname" value="<?php echo $fname; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="col" style="text-align: left;">
                                   <label for="lname" class="form-label" style="font-size: 15px; color: #000; font-weight: 600;">Last name*</label>
                                    <input type="text" class="form-control" placeholder="Last name" id="lname" name="lname" value="<?php echo $lname; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="col" style="text-align: left;">
                                    <label for="age" class="form-label" style="font-size: 15px; color: #000; font-weight: 600;">Age*</label>
                                    <input type="text" class="form-control" placeholder="Age" id="age" name="age" value="<?php echo $age; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="col" style="text-align: left;">
                                   <label for="class" class="form-label" style="font-size: 15px; color: #000; font-weight: 600;">Class*</label>
                                    <input type="text" class="form-control" placeholder="Class" id="class" name="class" value="<?php echo $class; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="col" style="text-align: left;">
                                <label for="roll" class="form-label" style="font-size: 15px; color: #000; font-weight: 600;">Roll*</label>
                                    <input type="text" class="form-control" placeholder="Roll" id="roll" name="roll" value="<?php echo $roll; ?>">
                                </div>
                            </div>
                            <div class="col-12" style="text-align: left;">
                                    <button type="submit" class="btn btn-primary" name="submit" style="margin-bottom: 20px;">Submit</button>
                                </div>
                                </div>
                        </div>
                    </div>
                    </form>
                <?PHP endif ?>
                <?php if('edit'== $task):
                    $id = htmlspecialchars($_GET['id']);
                    $student = getStudent($id);
                    if($student):
                        //print_r($student);die;
                    ?>
                    <form action="index.php?task=edit" method="POST" class="shadow-lg">
                    <div class="container">
                        <div class="row">
                            <div class="row g-3">
                            <div class="col-lg-6">
                                <input type="hidden" value="<?php echo $id;?>" name="id">
                                <div class="col" style="text-align: left;">
                                   <label for="fname" class="form-label" style="font-size: 15px; color: #000; font-weight: 600;">First name*</label>
                                    <input type="text" class="form-control" placeholder="First name" id="fname" name="fname" value="<?php echo $student['fname']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                            <input type="hidden" value="<?php echo $id;?>" name="id">
                                <div class="col" style="text-align: left;">
                                   <label for="lname" class="form-label" style="font-size: 15px; color: #000; font-weight: 600;">Last name*</label>
                                    <input type="text" class="form-control" placeholder="Last name" id="lname" name="lname" value="<?php echo $student['lname']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="col" style="text-align: left;">
                                    <label for="age" class="form-label" style="font-size: 15px; color: #000; font-weight: 600;">Age*</label>
                                    <input type="text" class="form-control" placeholder="Age" id="age" name="age" value="<?php echo $student['age']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="col" style="text-align: left;">
                                   <label for="class" class="form-label" style="font-size: 15px; color: #000; font-weight: 600;">Class*</label>
                                    <input type="text" class="form-control" placeholder="Class" id="class" name="class" value="<?php echo $student['class']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="col" style="text-align: left;">
                                <label for="roll" class="form-label" style="font-size: 15px; color: #000; font-weight: 600;">Roll*</label>
                                    <input type="text" class="form-control" placeholder="Roll" id="roll" name="roll" value="<?php echo $student['roll']; ?>">
                                </div>
                            </div>
                            <div class="col-12" style="text-align: left;">
                                    <button type="submit" class="btn btn-primary" name="submit" style="margin-bottom: 20px;">Update</button>
                                </div>
                                </div>
                        </div>
                    </div>
                    </form>
                <?php 
                endif;
            endif; 
                ?>
                </div>
            </div>
            </div>
        </div>

        <!-- java script -->
    </section>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> <!-- auto tiping CDN -->
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