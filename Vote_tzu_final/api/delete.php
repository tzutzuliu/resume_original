<?php

    include_once "base.php";

    //從網址取得要刪除的資料夾名稱
    $table=$_GET['table'];

    //從網址取得要刪除的資料id
    $id=$_GET['id']; 
    //del($table,$id); //這裡運用的是del函式($table,$arg)

    //要刪除的話,刪到多細,在這塊判斷
    //真要刪除的資料表,和id刪除
    if($table=='subjects'){
        del($table,$id);
        del('options',['subject_id'=>$id]);
        del('logs',['subject_id'=>$id]);
    }else{

        del($table,$id);
    }

    // $da = ['subject_id'=>$id];
    // dd($da);

    to("../back.php");
    //回到上一層;


?>