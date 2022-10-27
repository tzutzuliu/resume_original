<?php
    //屆時會看到
    include '../base.php';

    echo "<script type='text/javascript'>
    
    Swal.fire({
        position: 'center',
        title: '已收到資料，謝謝您!',
        showConfirmButton: false,
    })
    
    </script>";

    header("Refresh:0.5;url='../index.php'");


?>