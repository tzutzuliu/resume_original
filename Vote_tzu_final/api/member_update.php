<?php
include_once "./base.php";
// $id=$_POST['id'];
// $pw = find('users',$_POST['id']);
// dd($pw);

$pw=find('users',$_POST['id']);
// $new_pw=$_POST['pw'];
// dd($pw);
// dd($pw['pw']);
// dd($_POST['pw']);


// $newpw=($pw['pw'] == $_POST['pw'])? $pw: $_POST['pw'];
// dd($newpw);
$new_user = ['id' => $_POST['id'],
            'acc' => $_POST['acc'],
            'pw' => ($pw['pw'] == $_POST['pw'])? $pw['pw'] : md5($_POST['pw']),
            'passnote' => $_POST['passnote'],
            'name' => $_POST['name'],
            'gender' => $_POST['gender'],
            'birthday'=>$_POST['birthday'],
            ];


            //  dd($new_user);
            save('users',$new_user);
to('../index.php');

// $sql="UPDATE `students` SET 
//              `uni_id`='{$_POST['uni_id']}',
//              `seat_num`='{$_POST['seat_num']}',
//              `name`='{$_POST['name']}',
//              `birthday`='{$_POST['birthday']}',
//              `national_id`='{$_POST['national_id']}',
//              `address`='{$_POST['address']}',
//              `parent`='{$_POST['parent']}',
//              `telphone`='{$_POST['telphone']}',
//              `major`='{$_POST['major']}',
//              `secondary`='{$_POST['secondary']}'
//       WHERE `id`='{$_POST['id']}'";





// dd($id);
//$pdo->query($sql);
// $pdo->exec($sql);
// header("location:index.php");
?>