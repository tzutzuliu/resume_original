<?php

    // $acc=$_POST['acc'];
    $user=find('users',['acc' => $_POST['acc']]);

    dd($_POST['acc']);
    // dd($user);


    if(empty($user)){
        echo "查無此帳號";
    }else{
        echo "密碼提示為：".$user['passnote'];
    }

?>

