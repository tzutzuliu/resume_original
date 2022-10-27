    <style>
        .remove{
            color:#eee;
        }
        .remove:hover{
            color:red;
        }
    </style>


    <h1 class="head_mem" style="text-align: center; position: relative; bottom: 50px; font-size: 35px;">會員中心</h1>
    <h1 class="head_w" style="text-align: center; font-size: 30px;">歡迎&nbsp;&nbsp;</h1><h1 class="head_n" style="text-align: center;"><?=$_SESSION['user'];?></h1>
    <?php 

    $user=find('users',['acc'=>$_SESSION['user']]);
    // dd($user);
    // $user_subject=all('logs',['user_id'=>$user['id']]);
    $user_subject=all('logs',['user_id'=>$user['id']],'GROUP BY `subject_id`');
    
    // dd($user_subject);
    ?>

    <div class="member_cen" style="display: flex; justify-content: center;">
    <?php
        foreach($user_subject as $subject){
            echo find('subjects',['id' => $subject['subject_id']])['subject']."<br>";
        }
        // $subjects = all('subjects', $filter, $orderStr . $page_rows);

        // foreach($subjects as $subject){
        //     echo $subject['subect']
        // }
        
        
        

        $voted=all('logs',['user_id' => $user['id']]);
        //dd($voted);
        foreach ($voted as $key => $value){

                 echo $value['subject_id'];
             }

    ?>
        <div class="member_cen" style="display: block; justify-content: center;">
            <div>
                <span>帳號：</span>
                <?=$user['acc'];?>
            </div>
            <br>
            <!-- <div>
                <span>密碼：<?=($user['pw']);?></span>
            </div> -->
            <div>
                <span>密碼提示：</span>
                <?=$user['passnote'];?>
            </div>
            <br>
            <div>
                <span>姓名：</span>
                <?=$user['name'];?>
            </div>
            <br>
            <div>
                <span>性別：</span>
                <?=$user['gender'];?>
            </div>
            <br>
            <div>
                <span>生日：</span>
                <?=$user['birthday'];?>
            </div>
        </div>   

        <!-- <button><a href='./index.php?do=member_edit&id=<?=$user['id'];?>'>編輯</a></button> -->

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="remove_perdata" style="text-align: center;">
            <a class="remove" href='./api/remove_acc.php?id=<?=$user['id'];?>'>移除個人資料</a>
        </div>
        <p>&nbsp;</p>

        <form action='./index.php?do=member_edit' method='post'>
            <input type="hidden" name="id" value="<?=$user['id'];?>">
            <input type="submit" style="background: pink; position: relative; bottom: 10px;"value="編輯">
        </form> 
    </div>

    <!--  重新導向 -->
    <!-- <button onclick="location.href='./index.php?do=member_edit.php&id=<?=$user['id'];?>'">編輯</button> -->
    <!-- <button onclick="location.href='./index.php?do=member_edit'">編輯</button> -->


