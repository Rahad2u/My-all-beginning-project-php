<?php 
include_once "function.php";
    $task="encode";
    if(isset($_GET['task']) && $_GET['task']!=''){
        $task= $_GET['task'];
    }
    
    $key="abcdefghijklmnopqrstuvwxyz1234567890";
    if('key'==$task){
        $key_original= str_split($key);
        shuffle($key_original);
        $key = join('',$key_original);
    }else if(isset($_POST['key']) && $_POST['key']!=''){
        $key = $_POST['key'];
    }

$scrambledData = '';
if('encode'==$task){
    $data = $_POST['data']??'';
    if($data !=''){
        $scrambledData = datascrm($data, $key);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,
    300;1,400;1,500;1,700;1,900&family=Spline+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
    <link rel="icon" href="img/logo.jpg">

</head>
<body>
    <section class="write text-center">
       <div class="container">
       <div class="t_w">
            <h3>Data Scrambler</h3>
            <p>user this application to data Scrambler</p>
            <a href="index.php?task=encode">Encode |</a>
            <a href="index.php?task=decode">Decode |</a>
            <a href="index.php?task=key">Genetate Key</a>
        </div>
       </div>
    </section>
    <section class="f-s mt-4">
    <div class="f_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 auto">
               <div class="shadow-lg pd_t">
               <form action="index.php" method="POST">
                <div class="mb-3">
                        <label for="key" class="form-label">key*</label>
                        <input type="text" name="key" class="form-control" id="key" placeholder="Encode" <?php displayKey($key); ?>>
                        </div>
                        <div class="mb-3">
                        <label for="data" class="form-label">Data*</label>
                            <textarea name="data" id="data" cols="30" rows="10" class="form-control" placeholder="Decode"><?php if(isset($_POST['data'])){ echo $_POST['data'];}?></textarea>
                        </div>
                        <div class="mb-3">
                        <label for="result" class="form-label">Result*</label>
                        <textarea name="result" id="result" cols="30" rows="10" class="form-control" placeholder="Generate Key"><?php echo $scrambledData; ?></textarea>
                        </div>
                    <div class="b-tn">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
               </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
        </div>
    </section>
</body>
</html>