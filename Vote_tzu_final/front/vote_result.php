<style>
      .title{
        position: relative;
        bottom: 140px;
        font-size: 22px;
        text-align: center;
    }
</style>


<?php

    //取得主題資料
    $subject=find("subjects",$_GET['id']);

    //取得主題所屬的所有選項資料
    $opts=all("options",['subject_id'=>$_GET['id']]);

    // dd($vote);

?>

<!-- 顯示主題文字 -->
<h1 class="title">
    <?=$subject['subject'];?>
</h1>
<br>
<div style="position: relative;bottom: 140px;left: 1px; text-align: center;">
    <div style='font-size: 20px;'>
        總投票數(Total):<?=$subject['total'];?>
    </div>
    <br>
    <div style="height: 25px; background: pink; width: 300px; text-align: center; display: inline-table;">目前投票狀態</div>
    <table style="border: 3px solid black; border-style: dashed; width: 300px; height: 100px; color: brown; margin-left: auto; margin-right: auto;">
        <tr>
            <td style="text-align: center;">選項</td>
            <td style="text-align: center;">人數</td>
            </tr>
            <?php
                foreach($opts as $opt){
                $total=($subject['total']==0)?1:$subject['total'];
                $rate=$opt['total']/$total;
            ?>
                
            <div>
                 <tr>
                    <td style="color: brown; text-align: center;"><?=$opt['option'];?></td>
                    <td style="color: brown; text-align: center;"><?=$opt['total'];?></td>
                        
                    <!--$opt['total']/$total;(占分比,如要用百分比可用round,取第2位數-->           
                </tr>
            </div>
                
        <?php
                
        }

        ?>
    </table>
    </div>
</div>
<br>


