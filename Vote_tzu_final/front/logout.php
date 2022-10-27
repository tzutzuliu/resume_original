<?php
    unset($_SESSION['user']);
    unset($_SESSION['voted']);
    unset($_SESSION['admin']);
    unset($_SESSION['user_id']);
    to('./index.php');

?>