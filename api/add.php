<?php
include_once "../base.php";


//測試階段↓↓↓↓↓↓↓↓↓
//有print array出來
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

//$db = new DB($_POST['table']);

//form data有收到資料接收來自表單內容; 
//$data=$_POST['msg'];
//$add_table=[ 
//        'dataUser'=>$data,
//        'dataTel' =>$data,
//        'dataMail'=>$data,
//        'subject' =>$data,
//        'dataMsg' =>$data,
//];

//print_r($data);

//使用save()函式把內容存至資料表msg
//save('msg',$add_table);
//$db->save($data);


//if(isset($_POST['msg'])){
//        foreach($_POST['msg'] as $msg){
//        if($msg!=""){
//                $add_option=[
//                'dataUser'=>$data,
//               'dataTel' =>$data,
//                'dataMail'=>$data,
//                'subject' =>$data,
//                'dataMsg' =>$data,    
//        ];
//                save("msg",$add_table);
//                //存進去欄位裡
//        }
//        }
        //echo "<script type='text/javascript'>alert('您的訊息已經收到,會盡快與您聯絡,謝謝!!');</script>";
        // header("Refresh:3;url='../index.php'");
//        to("./api/msg.php");
//    }else{

//        to("../index.php?do=".$_POST['msg']);
//   }

//先給物件
$db = new DB($_POST['table']);

//switch case one:
switch ($_POST['table']) {
    case 'msg':
        $data['dataUser'] = $_POST['dataUser'];
        $data['dataTel'] = $_POST['dataTel'];
        $data['dataMail'] = $_POST['dataMail'];
        $data['subject'] = $_POST['subject'];
        $data['dataMsg'] = $_POST['dataMsg'];
        break;
};

//測試有沒有出來
// print_r($data);
//存進去
$db->save($data);

//下判斷式,if else,為了讓使用者收到訊息之後可以看到我的對話窗;then回首頁
if($_POST['table'] == 'msg'){      
        echo "<script type='text/javascript'>alert('已收到您的訊息,會盡快與您聯絡,謝謝您!!');</script>";
        // header("Refresh:3;url='../index.php'");
        to("./msg.php");
}else{

        to("./index.php?do=".$_POST['table']);
}

    


?>


