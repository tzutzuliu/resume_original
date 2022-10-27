<!--會員註冊部份-->
<style>
    input[type="submit"], input[type="reset"]{
        background-color: palevioletred;

    }
</style>


        <h1 class="text-center" style="position: relative; bottom: 100px; font-size: 25px; text-align: center;">會員註冊</h1>
    <form  class="register-table" style="position: relative; bottom: 80px; font-size: 25px; display: flex; justify-content: center;"  action="./api/store_member.php" method="post">
        <div>
            <table>
                <tr>
                    <td>帳號</td>
                    <td><input type="text" name="acc" id="" required="required"></td>
                </tr>
                <tr>
                    <td>密碼</td>
                    <td><input type="password" name="pw" id="" required="required"></td>
                </tr>
                <tr>
                    <td>密碼提示</td>
                    <td><input type="text" name="passnote" id="" required="required"></td>
                </tr>
                <tr>
                    <td>姓名</td>
                    <td><input type="text" name="name" id="" required="required"></td>
                </tr>
                <tr>
                    <td>性別</td>
                    <td>
                    <select name="gender" id="gender">
                        <option value="0">男</option>
                        <option value="1">女</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>生日</td>
                    <td><input type="date" name="birthday" id="birthday" required="required"></td>
                </tr>

            </table>
            <div class="register-btn" style="display: flex; justify-content: center; position: relative; top: 10px;">           
                <input type="submit" value="註冊">
                <input type="reset" value="重置">
            </div>     
        </div>

    </form>


    
        


