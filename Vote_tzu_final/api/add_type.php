<?php
    include_once "base.php";
    //新增分類存到types的資料表裡面的name
    save('types',['name'=>$_POST['name']]);

    //回到後台,完成新增後將頁面請求導回後台首頁
    to("../back.php");

?>