<nav>
        <a href="index.php">回首頁</a>
        <?php
                if(isset($_SESSION['user'])){
                ?>
                        <a href="index.php?do=logout">登出</a>
                        <a href="index.php?do=member_center">會員中心</a>
                <?php
                }else{
                ?>
                        <a href="index.php?do=login">登入</a>

                <?php
                }
        ?>
</nav>