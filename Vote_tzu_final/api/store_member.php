<?php
//引入base.php
include_once "../api/base.php";
//$acc=$_POST['acc']; 
//dd($_POST);
//exit();


$users=[
    'acc'=>$_POST['acc'],
    'pw'=>md5($_POST['pw']),
    'passnote'=>$_POST['passnote'],
    'name'=>$_POST['name'],
    'gender'=>$_POST['gender'],
    'birthday'=>$_POST['birthday'],

];
//dd($user);
//exit();

// $acc = find('users',['acc' => $_POST['acc']]);
// dd($acc);
// dd(isset($acc));

//$dsn="mysql:host=localhost;charset=utf8;dbname=votehw";
//$pdo=new PDO($dsn,'root','');

$dsn="mysql:host=localhost;charset=utf8;dbname=s1110220";
$pdo=new PDO($dsn,'s1110220','s1110220');

$sql="SELECT count(*) FROM `users` WHERE `acc`='{$_POST['acc']}'";
$pw = substr(md5($_POST['pw']),0,16);
 //$user=$pdo->query($sql)->fetch();
$chk=$pdo->query($sql)->fetchColumn();
// dd($chk);


if($chk){

        to("../index.php?do=login&error2=此帳號已存在");
    }else{
        // echo "登入失敗";

        // to("../index.php?do=login&error=帳號或密碼錯誤");
        
        save('users',$users);
        $userId=find('users',['acc'=>$_POST['acc']]);
        $_SESSION['user']=$_POST['acc'];
        $_SESSION['user_id']=$userId['id'];

        dd($_SESSION['user_id']);
        dd($userId['id']);
        to('../index.php?do=member_center');
    }

//dd($users)
//save('users',$users);

// // header('location:login.php');
// to('../index.php?do=member_center');

?>