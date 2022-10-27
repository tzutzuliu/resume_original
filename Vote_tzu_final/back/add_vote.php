<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .votetopic{
            border: 10px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-weight: bolder;
            position: relative;
            bottom: 130px;
            font-size: 25px;
        }

        #options{
            position: relative;
            bottom: 130px;
            font-size: 25px;
            font-weight: bolder;
        }

        input[type="submit"]{
            font-size: 18px;
            position: relative;
            bottom: 130px;
            font-weight: bolder;
        }
        .selector{
            position: relative;
            bottom: 130px;
            font-size: 25px;
            font-weight: bolder;
        }

        .select_tp{
            position: relative;
            bottom: 130px;
        }

    </style>
</head>
<body>
</body>
</html>

<!--請把api的add_vote檔用post傳值方式-->
<!--在backfile路徑底下的add_vote.php送出之後由apifile夾的add_votephp檔案專門處理,最後將呈現列表呈現在back.php(管理者端後台的頁面)-->
<form action="./api/add_vote.php" method="post">
    <div class="select_tp">
        <select name="types" id="types">
            <?php
            $types=all("types");   //分類從資料庫叫出來都在這;
            foreach($types as $type){
                echo "<option value='{$type['id']}'>";
                echo $type['name'];
                echo "</option>";
            }
            ?>
        </select>
    </div>
    <!--表單就用label-->
    <div class="votetopic">
        <label for="subject">投票主題：</label> 
        <input type="text" name="subject" id="subject">
        <input type="button" value="新增選項" onclick="more()">
    </div>

        <div class="selector">
            <input type="radio" name="multiple" value="0" checked>
            <!--希望預設都是單選,所以放一個checked-->
            <label>單選題</label>
            <input type="radio" name="multiple" value="1">
            <label>複選題</label>
        </div>

    <div id="options">
        <div>            
            <label>選項:</label><input type="text" name="option[]">
        </div>
    </div>
    <br>
    <input type="submit" value="新增">


</form>

<script>
    //先建立一段jsfunction,當按下新增一個選項那個按鈕就會出來
    //每一次function的more被點選時,就把選項"這顆按鈕"放到最下面出現
    //每跑一次morefunction時,就去跑一次option
    //option[]上課講加上中括號是因為,如果資料會呈現重複多筆的話,請加上中括號
    //意思就是先將option先存成一個array,讓資料包在array裡面好後續使用
    function more(){
        let opt=`<div><label>選項:</label><input type="text" name="option[]"></div>`;
        let opts=document.getElementById('options').innerHTML;
        opts=opts+opt;
        document.getElementById('options').innerHTML=opts;
    }
    
</script>