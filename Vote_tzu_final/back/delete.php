<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .del{
            text-align: center;
            color: brown;
            font-size: 32px;
            font-weight: bolder;
            position: relative;
            bottom: 150px;
        }
        .topic{
            color: brown;
            font-size: 25px;
            font-weight: bolder;
            position: relative;
            bottom: 140px;
            text-align: center;
     

        }
        .title{
            color: brown;
            font-size: 20px;
            font-weight: bolder;
            position: relative;
            bottom: 130px;
            text-align: center;
        }
        .btn{
            font-size: 30px;
            font-weight: bolder;
            display: flex;
            justify-content: center;
            align-content: center;
        }
    
    </style>
</head>
<body>
    
</body>
</html>


<?php
    $subject=find("subjects",$_GET['id']);
?>


<div>
    <h1 class="del">
        Are you sure to delete this item? 
    </h1>

    <div class="topic">
    <!--給他一個區塊專屬只呈現主題:topic-->
        【主題】
    </div>

    <div class="title">
    <!--把要呈現的標題弄進來-->
    <!--外層html結構,內層裡面用php開始結尾包主題-->
        <?=$subject['subject'];?>
    </div>

    <div class="btn">
        <button onclick="location.href='./api/delete.php?table=subjects&id=<?=$_GET['id'];?>'">delete</button>
        <!--確定onclick按下去之後就會刪除掉,連同phpmyadmin;-->
        <button onclick="location.href='back.php'">cancel</button>
        <!--沒有的話就取消回去,後台管理-->
    </div>
</div>