<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <style>
        table{
            margin: auto;
            width: 455px;
            text-align: inherit;
            display: flex;
            position: relative;
            bottom: 20px;
        }

        table td{
            padding:1rem;
        }

        .btns{
            text-align: center;
        }

        input[type="submit"], input[type="reset"]{
            background-color: palevioletred;
        }

    </style>
</head>
    <?php

       if(isset($_GET['error'])) {
           echo "<h2 style='color:red;text-align:center'>{$_GET['error']}</h2>";
       }
       if(isset($_GET['error2'])) {
        echo "<h2 style='color:red;text-align:center'>{$_GET['error2']}</h2>";
    }
    ?>
    <form action="./api/chk_login.php" method="post">
        <table>
            <tr>
                <td><i class="fa-solid fa-user-group"></i>帳號</td>
                <td><input type="text" name="acc" id="">
                </td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-key"></i>密碼</td>
                <td>
                    <input type="password" name="pw" id="">
                </td>
            </tr>
            <tr>
                <?php
                if(!isset($_GET['back'])){
                    echo '<td><a href="?do=register">尚未註冊</a></td>';
                    echo '<td><a href="?do=forgot">忘記密碼</a></td>';
                }
                ?>
                <!-- <td><a href="./login/register.php">尚未註冊?</a></td> -->
                <!-- <td><a href="?do=register">尚未註冊?</a></td>
                <td><a href="?do=forgot">忘記密碼?</a></td> -->
            </tr>
        </table>
        <div class='btns'>
            <input type="hidden" name="back" value="<?php echo (isset($_GET['back']))? $_GET['back']:'';?>">
            <input type="submit" value="登入">
            <input type="reset" value="重置">
        </div>
    </form>
