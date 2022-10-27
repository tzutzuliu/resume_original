<?php

    include_once "./api/base.php";
    //把剛剛在後台製作好的投票主題;選項功能使用include引入近來到"我的管理者後台端"
    //並在下方(管理者後台端)呈現我的投票主題list


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>吱吱管理投票中心</title>
    <link rel="stylesheet" href="./css/basic.css">
    <link rel="stylesheet" href="./css/back.css"> 
    <!--後壓前-->

</head>
<body>
    <div id="header">
        <?php include "./layout/header.php"; //不要搞混根目錄跟尋找上一個目錄的差別,這指當前目錄的layout資料夾的這個header.php檔,下面那個亦是; 
              include "./layout/back_nav.php";
        ?>
   </div>

   
    <div id="content">
    <!--後台端跟前台端差不多概念有真正在做事修改動用到的主程式,我都設在content這個section-->       
    <?php
        if(isset($_GET['do'])){
            $file="./back/".$_GET['do'].".php"; //這串是要將後台的add_vote新增上去,先用if判斷式判斷,假定back資料夾底下有抓到do這個值,$file是變數,有!就得到這個檔案(那個點是字串連接起來);   
        }
        if(isset($file) && file_exists($file)){ //這個變數如果有,"而且"(才用&&,兩個條件都要成立才執行)也要同時存在
            include $file;                      //後台的編輯.php,刪除.php因為都已引入在這;
        }else{
    ?>
        <button class="button-add" onclick="location.href='?do=add_vote'">新增投票</button>
        <!--網址後面有問號出現通常都是get傳值(query string)的資料型態-->

        <div>
            <ul>               
            <?php
                //在這裡將vote_list呈現在後台頁面,呈現形式可自己更改;
                $topicname=all('subjects');
                foreach($topicname as $subject){ //variable也可以不要這樣設;variable不能亂取;
                    echo "<li class='list'>"; //用li呈現,前有ul就會有li,兩者一起;起始標;
                    echo '投票主題：'.$subject['subject']; //要subject這欄位;
                    echo "<br>";
                    if($subject['multiple']==0){
                        echo "<div>選項：單選題</div>";
                    }else{
                        echo "<div>選項：複選題</div>";
                    }
                    echo '投票期間：'.$subject['start']. "～".$subject['end'];
                    echo "<br>";
                    echo  '投票人數：'.$subject['total'];
                    echo "<br>";
                    echo "<br>";
                    echo "<a class='button-edit' href='?do=edit&id={$subject['id']}'>編輯投票</a>";
                    echo "<a class='button-delete' href='?do=delete&id={$subject['id']}'>刪除投票</a>";
                    echo "</li>"; //前面有開始標籤,後結尾標籤,ul通常就會有li兩個通常包在一起,也可以改用ol即可;
                }
            ?>
            </ul>
        </div>
    
        <?php
        }
        ?>
   </div>

   <div id="footer"> 
        <?php
              include "./layout/footer.php" ; //include footer 吱吱版權;
        ?>
    </div>

</body>
</html>