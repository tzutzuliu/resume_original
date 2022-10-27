<?php
    include_once "base.php";
    //先引入include

    //接收來自表單傳來的投票主題文字內容
    $subject=$_POST['subject'];

    //這塊建立資料陣列,看你資料欄位是啥就會在下方;
    $add_subject=[
        'subject'=>$subject,
        'type_id'=>$_POST['types'],
        'multiple'=>$_POST['multiple'],
        'start'=>date("Y-m-d"),
        //今天start今天開始 起始日
        'end'=>date("Y-m-d",strtotime("+30 days")),
        //把今天的時間加30天(這裡的時間可自行調整),轉成秒數(時間的格式)丟給date時間函數去處理執行 
    ];

    //使用save()函式把投票主題存至資料表中subjects中
    save('subjects',$add_subject);
    //存進去

    $id=find('subjects',['subject'=>$subject])['id'];
    //利用存入的投票主題文字找出相對應到的資料並取得id資料
    //找到id的方式,從subjects的資料表中傳回後去查找id(primarykey)
    //但此方法並不是最好的方式,因為假定如果subject題目重複的話,去查找回來的就會出現多筆資料,這樣就有可能不知道到底誰才是真正要查找的關鍵
    //正確來說以資料庫(Normalization)定義,每一筆資料"都一定要有能夠識別一致性的值(而且是唯一)",那個值就是primarykey

    //至少要有一個選項,投票主題才能建立新增起來
    //if判斷,如果表單有這個資料,就請取出來給我,(用foreach迴圈概念取出)
    if(isset($_POST['option'])){
        foreach($_POST['option'] as $opt){
            if($opt!=""){
                $add_option=[
                    'option'=>$opt,
                    'subject_id'=>$id
                ];
                save("options",$add_option);
                //存進去options欄位裡
            }
        }
    }

    //使用to()函式來取代header，請參考base.php中的函式to($url)
    // dd($add_subject)
    to('../back.php');
    //請回後台管理

?>