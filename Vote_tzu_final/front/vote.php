<style>
    h1{
        font-size: 24px;
        text-align: center;
        box-sizing: border-box;
        box-shadow: rgb(0 0 0 / 40%) 0px 2px 4px, rgb(0 0 0 / 30%) 0px 7px 13px -3px, rgb(0 0 0 / 20%) 0px -3px 0px inset;
        width: 20%;
        margin-left: auto; /*置中*/
        margin-right: auto;
        margin-bottom: 20px;
        padding: 15px;
        position: relative;
        bottom: 120px;
    
    }
        
    input[type="submit"], input[type="button"]{
        position: relative;
        bottom: 0.5px;
        left: 1px; 
        font-size: 22px;   
        appearance: button;
        background-color: #000;
        border: 1px solid #000;
        border-radius: 4px;
        box-shadow: #fff 4px 4px 0 0,#000 4px 4px 0 1px;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-family: ITCAvantGardeStd-Bk,Arial,sans-serif;
        font-weight: 400;
        line-height: 30px;
        overflow: visible;
        text-align: center;
        text-transform: none;
        touch-action: manipulation;
        user-select: none;
        -webkit-user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        margin-left: auto; /*置中*/
        margin-right: auto;
    }


</style>


<?php
    //要在前台把投票的頁面(處理引入過來);
    //因為處理的全都都在base檔案;
    include_once "./api/base.php";

    $subject=find("subjects",$_GET['id']);
    $opts=all('options',['subject_id'=>$_GET['id']]);

    //dd($subject);
    //dd($opts);
?>

        <h1><?=$subject['subject'];?></h1>
        <form action="./api/vote.php" method="post">
    <?php
        foreach($opts as $opt){
    ?>
        <div class="vote_op" style="text-align: center; position: relative; bottom: 120px;">
            <?php             
                if($subject['multiple']==0){
            ?>       
                    <input type="radio" name="opt" value="<?=$opt['id'];?>">
            <?php
                }else{
            ?>
                    <input type="checkbox" name="opt[]" value="<?=$opt['id'];?>">
                    <!--這邊多選請用checkbox,name要加是因為要把多選的塞到array裡面去處理-->
            <?php
            }
            ?>      
            <?=$opt['option'];?>
        </div>
    <?php
        }
    ?>
        <span style="text-align: center; display: block;">
            <input type="submit" value="我要投票">
            <input type="button" value="放棄投票" onclick="location.href='index.php'">
        </span>
    </form>
</body>
</html>


