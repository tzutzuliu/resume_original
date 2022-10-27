<?php

    include_once "./base.php";
    del('users',$_GET['id']);


    unset($_SESSION['user']);
    unset($_SESSION['voted']);

    to('../index.php');


?>