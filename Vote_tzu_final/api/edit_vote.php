<?php
    include_once "base.php";

    //exit(); 
    //會先暫停下方程式碼全部不執行;

    //接收來自表單傳來的投票主題文字內容區塊(下面這行)
    $subject_id=$_POST['subject_id'];

    //接收來自表單傳來的主題內容
    $new_topic=$_POST['subject']; //暫存在這個自訂變數裡

    //把撈出來的資料再存回去裡面,記得下面save要改
    $subject=find('subjects',$subject_id);

    //將資料表中的主題內容更換成表單傳過來的新主題內容
    $subject['subject']=$new_topic; //舊資料換新
    $subject['multiple']=$_POST['multiple']; //單複選的傳送
    $subject['type_id']=$_POST['types']; //同上，更新分類項目

    //使用函式,存進去資料庫裡面的subject裡面
    save('subjects',$subject);

    //根據主題id來取得所有的選項資料
    //這塊是管理者後台編輯修改的功能,需做foreach迴圈和if判斷
    $opts=all("options",['subject_id'=>$subject_id]);
        //把options選項撈出的時候,看看撈出來的key值,跟op的id值是否一致;
        foreach($_POST['option'] as $key => $opt){
            $exist=false;
            foreach($opts as $op){
                if($op['id']==$key){ //如果op的id值等於key值
                    $exist=true; //有存在,存在yes;就;
                    break; //跳出
                }
            }
            //如果表單傳來的選項資料在資料表中存在則為更新資料，否則為新增資料
            if($exist){ 
                //就給我去更新選項,然後存起來
                $op['option']=$opt;
                save("options",$op);
            }else{
                //add選項(不然新增選項存回去)
            if($opt!=""){
                $add_option=[
                'option'=>$opt,
                'subject_id'=>$subject_id
                ];
                save("options",$add_option);
            }        
    }
}

    to('../back.php');
    //請存回後台管理

?>