<h1 class="edit-mem" style="text-align: center; font-size: 25px; font-weight: bolder; position: relative; bottom: 50px;">編輯會員資料</h1>
<div class="member_edit" style="display: flex; justify-content: center; position: relative; bottom: 50px;">
    <?php
        // $id=$_POST['id'];
        // echo "$id";
        $user=find('users',$_POST['id']);
        // dd($user);

    ?>

        <form action="./api/member_update.php" method="post">
            <div>
                <span>帳號：</span>
                <input type="text" name="acc" value="<?=$user['acc'];?>">
            </div>
            <div>
                <span>密碼：</span>
                <input type="password" name="pw" id="pw" value="<?=$user['pw'];?>">
            </div>
            <div>
                <span>密碼提示：</span>
                <input type="text" name="passnote" value="<?=$user['passnote'];?>">
            </div>
            <div>
                <span>姓名：</span>
                <input type="text" name="name" value="<?=$user['name'];?>">
            </div>
            <div>
                <span>性別：</span>
                <select name="gender" id="gender">
                    <option value="男" <?php echo ($user['gender'] == '男')?'selected':'';?>>男</option>
                    <option value="女" <?php echo ($user['gender'] == '女')?'selected':'';?>>女</option>
                </select>
            </div>
            <div>
                <span>生日：</span>
                <input type="date" name="birthday" value="<?=$user['birthday'];?>">
            </div>

            <input type="hidden" name="id" value="<?=$_POST['id'];?>">
            <input type="submit" style="background: pink;" value="更新">
            <input type="reset" style="background: pink;" value="重置">
        </form>
    </div>

    <script>
      //獲取元素
    var input = document.getElementById('pw')
    var imgs = document.getElementById('eyes');
    //下面是一個判斷每次點選的效果
    var flag = 0;
    imgs.onclick = function () {
      if (flag == 0) {
        input.type = 'text';
        flag = 1;
      } else {
        input.type = 'password';
        flag = 0;
      }
    }
  </script>
