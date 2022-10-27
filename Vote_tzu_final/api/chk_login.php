<?php

include_once "./base.php";

    //檢查帳密是否正確

    // $acc=$_POST['acc'];
    // $pw=md5($_POST['pw']);
    // $adminAcc=$_POST['acc'];
    //     $adminPw=md5($_POST['pw']);
    //     $admin=find('admins',['acc'=>$_POST['acc']]);

    // dd($adminAcc);
    // dd($adminPw);
    // dd($admin);
    // $caca=$_POST['back'];
    // dd($_POST['back']);
$acc=$_POST['acc'];
$pw=md5($_POST['pw']);
// $users=find('users',['acc'=>$acc]);

if($_POST['back'] ==1){
    // $adminAcc=$_POST['acc'];
    // $adminPw=md5($_POST['pw']);
    $admin=find('admins',['acc'=>$_POST['acc']]);
    if($acc==$admin['acc'] && $pw==$admin['pw']){
        $_SESSION['admin']=$acc;
        // echo "登入成功";
        to('../back.php');
    }else{
        // echo "登入失敗";

        to("../index.php?do=login&back=1&error=帳號或密碼錯誤");
    }

}else{
    // $acc=$_POST['acc'];
    // $pw=md5($_POST['pw']);
    $users=find('users',['acc'=>$_POST['acc']]);
    if($acc==$users['acc'] && $pw==$users['pw']){
            $_SESSION['user']=$users['acc'];
            $_SESSION['user_id']=$users['id'];
            // dd($users['id']);
            // echo "登入成功";
            to('../index.php?do=member_center');
        }else{
            // echo "登入失敗";
    
            to("../index.php?do=login&error=帳號或密碼錯誤");
        }
}
    if(empty($user)){
        echo "查無此帳號";

    }else{
        echo "密碼提示為：".$user['passnote'];
    }


?>