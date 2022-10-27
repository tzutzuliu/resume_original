<?php
    include_once "./api/base.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>吱吱線上投票中心</title>
    <link rel="stylesheet" href="./css/basic.css">
    <link rel="stylesheet" href="./css/front.css">
    <!--後壓前-->

</head>
<body>

    <div id="header">
        <?php include "./layout/header.php"; //指當前目錄的layout資料夾的這個header.php檔;          
              include "./layout/front_nav.php"; //指當前目錄的layout資料夾的這個front_nav.php檔;
        ?> 

    </div>

    <div id="content">
    <!--後台端跟前台端差不多概念有真正在做事修改動用到的主程式,我都設在content這個section-->
    <?php
        if(isset($_GET['do'])){
            $file='./front/'.$_GET['do'].".php";
        }
        if(isset($_GET['api'])){
            $file='./api/'.$_GET['api'].".php";
        }
        if(isset($file) && file_exists($file)){
            include $file;
        }else{
            include "./front/vote_list.php";
        }

    ?>


    <div id="footer">
        <?php include "./layout/footer.php" ;?>
    </div>

</body>
</html>