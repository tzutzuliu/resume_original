<?php
    //先設定一個空的分頁字串變數
    //    $p = "";

    //如果網址中帶有分頁的參數則將變數設為參數的值
    //    if (isset($_GET['p'])) {
    //        $p = "&p={$_GET['p']}";
    //    }

?>

<style>
    .btn-voli{
        position: relative;
        font-size: 15px;   
        appearance: button;
        background-color: #000;
        border: 1px solid #000;
        border-radius: 2px;
        box-shadow: #fff 2px 2px 0 0,#000 2px 2px 0 1px;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-family: ITCAvantGardeStd-Bk,Arial,sans-serif;
        font-weight: 400;
        line-height: 20px;
        overflow: visible;
        text-align: center;
        text-transform: none;
        touch-action: manipulation;
        user-select: none;
        -webkit-user-select: none;
        vertical-align: middle;
        white-space: nowrap;
    }
    .btn-voli:focus{
        text-decoration: none;
    }

    .btn-voli:hover{
        text-decoration: none;
    }

    .btn-voli:active{
        box-shadow: rgba(0, 0, 0, .125) 0 3px 5px inset;
        outline: 0;
    }

    .btn-voli:not([disabled]):active{
        box-shadow: #fff 2px 2px 0 0, #000 2px 2px 0 1px;
        transform: translate(2px, 2px);
    }

    .vote-li{
        width: 400px;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

    }

    .item{
        text-align: center;
        width: 300px;
        height: 300px;
        margin: 15px;
        display: flex;
        flex-wrap: no-wrap;
        flex-direction: column;
        background-color: white;
        border-radius: 10px;
        font-family: 'Noto Sans TC', sans-serif;
        box-shadow: 0 10px 30px rgb(0 0 0 / 50%);;

        }

    .vote-flex{
        position: relative;
        bottom: 50px;
        display: flex;
        flex-wrap: wrap;
    }

</style>

<div class='vote-flex'>            
        <?php
            //在這裡將vote_list呈現在前台頁面,呈現形式可自己更改;
            //使用all()函式來取得資料表subjects中所有的資料,並呈現在前台頁面;
            //使用foreach迴圈將每一筆資料內容顯示在畫面上;
            //如果有要做排序的話,不會只以ahref連結去做order排序,可以做到更複雜的;要在這做判斷;
            //orderstr這開始判斷是否要做排序?
            //$orderStr='';
            //if(isset($_GET['order'])){
            //    $_SESSION['order']['col']=$_GET['order'];
            //    $_SESSION['order']['type']=$_GET['type'];

            //    if($_GET['order']=='remain'){
            //        $orderStr=" ORDER BY DATEDIFF(`end`,now()) {$_SESSION['order']['type']}";
            //    }else{
            //        $orderStr=" ORDER BY `{$_SESSION['order']['col']}` {$_SESSION['order']['type']}";
            //    }
                
            //}
            
            //$orderStr='';
            /*在這裡建立分頁所需的變數群資料 */
            //$total=math('subjects','count', 'id'); //第一個參數是資料表NAME Count什麼欄位;
            //dd($total);
            //$div=3; //每一頁以X筆資料為主; //每頁資料總數
            //$page=ceil($total/$div); //計算總頁數
            //dd($page);
            //$now=isset($_GET['p'])?$_GET['p']:1; //用get傳 //從網址參數取得目前所在頁數
            //$start=($now-1)*$div;   //計算要從那個索引開始取得資料
            //$page_rows="limit $start,$div"; //limit一定在sql語法最後  //建立SQL語法的limit字串
            //dd($page_rows);
            //$subjects=all('subjects',$orderStr . $page_rows);//all投票主題顯示列表
            $subjects=all('subjects');//all投票主題顯示列表
            //dd($topicname);
            ?>
            <?php
                foreach($subjects as $subject){ //variable也可以不要這樣設;variable不能亂取;
            ?>
            <div class="vote-li">
                <div class="item">
                    <h1 style="text-align: center;"><?=$subject['subject'];?></h1>
                    <img src="./pic/gem.jpg" alt="" width="190" height="180" style="position: relative; left: 55px;">        
                    <p style="text-align: inherit; font-size: 15px;">時間 :<?=$subject['start'];?>~<?=$subject['end'];?></p>
                    <br>
                    <button class="btn-voli" onclick="location.href='?do=vote&id=<?=$subject['id'];?>'">我要投票</button>
                </div>             
            </div>                

            <?php
            }
            ?>
        <!--page的都在這裡-->
        <div style="text-align: center;">
            <?php
            //if($page>1){         
            //    for($i=1; $i<=$page; $i++){
            //        echo "<a href='?p={$i}'>&nbsp;";
            //        echo $i;
            //        echo "&nbsp;</a>";
            //    }
            //}

            ?>
        </div>    
</div>
