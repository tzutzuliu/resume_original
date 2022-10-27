<?php
    //php 自訂函式(帶參數);參數本身不一定是value,也可能是物件或其他種形式ex array也行
    //base檔案專門處理多複雜的部份.故必須了解function的重要性,這個檔案稍微複雜一點,但可自行調整;
    //裡面會有很多個區塊的function去處理任何一件事,包含儲存,刪除...等brabra;
    // implode 接起字串 AND (要空格) 後輸出
    session_start(); //這兩串一定要,很重要;
    date_default_timezone_set('Asia/Taipei'); //時區;
    function pdo(){
        $dsn="mysql:host=localhost;charset=utf8;dbname=votehw";//這個要到220記得註掉;
        return new PDO($dsn,'root',''); 
        //連線到我PHPmyadmin資料庫
        
        //先宣告全部函式都會用到的資料庫連線設定及建立PDO資料庫物件
       
        //回傳一個新的pdo連線物件

        //屆時要輸入到220教室的如下:
        //$dsn="mysql:host=localhost;charset=utf8;dbname=s1110220";
        //return new PDO($dsn,'s1110220','s1110220');

    }

/* df:
 * $table - 資料表名稱 字串型式
 * ...$arg - 參數型態
 *           1. 沒有參數，撈出資料表全部資料
 *           2. 一個參數：
 *              a. 陣列 - 撈出符合陣列key = value 條件的全部資料
 *              b. 字串 - 撈出符合SQL字串語句的全部資料
 *           3. 二個參數：
 *              a. 第一個參數必須為陣列，同2-a描述
 *              b. 第二個參數必須為字串，同2-b描述
 */

    function all($table,...$arg){
    $pdo=pdo();
    
    //建立共有的基本SQL語法
    $sql="SELECT * FROM $table ";
    
    //依參數數量來決定進行的動作因此使用switch...case
    switch(count($arg)){
        case 1:
    
            //判斷參數是否為陣列
            if(is_array($arg[0]) && !empty($arg[0])) {
    
                //使用迴圈來建立條件語句的字串型式，並暫存在陣列中
                foreach($arg[0] as $key => $value){
    
                    $tmp[]="`$key`='$value'";
    
                }
    
                //使用implode()來轉換陣列為字串並和原本的$sql字串再結合
                $sql.=" WHERE ". implode(" AND " ,$tmp);

            }elseif(empty($arg[0])){
                
                //如果參數不是陣列，那應該是SQL語句字串，因此直接接在原本的$sql字串之後即可
                $sql.=$arg[0];
            }
        break;
        case 2:
    
            if(!empty($arg[0])){
            //第一個參數必須為陣列，使用迴圈來建立條件語句的陣列
                foreach($arg[0] as $key => $value){
        
                    $tmp[]="`$key`='$value'";
        
                }
    
                //將條件語句的陣列使用implode()來轉成字串，最後再接上第二個參數(必須為字串)
                $sql.=" WHERE ". implode(" , " ,$tmp) . $arg[1];
            }else{
                $sql.=$arg[1];
            }

        break;
    
        //執行連線資料庫查詢並回傳sql語句執行的結果
        }
    
        //fetchAll()加上常數參數FETCH_ASSOC是為了讓取回的資料陣列中
        //只有欄位名稱,而沒有數字的索引值
        return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
    }

    /**
    * $table - 資料表名稱 字串型式
    * $arg 參數型態
    *      1. 陣列 - 撈出符合陣列key = value 條件的單筆資料
    *      2. 字串 - 必須是資料表的id，數字型態，且資料表有id這個欄位
    */

        
    function find($table,$arg){
        $pdo=pdo();
        
        $sql="SELECT * FROM $table WHERE ";
            if(is_array($arg)){
        
                foreach($arg as $key => $value){
        
                    $tmp[]="`$key`='$value'";
        
                }
        
                $sql.=implode(" AND " ,$tmp);
        
            }else{
        
                $sql.=" `id`='$arg'";
        
            }
        
            return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        }

    function del($table,$arg){
        $pdo=pdo();
        
        $sql="DELETE FROM $table WHERE ";
            if(is_array($arg)){ //判斷這個值是不是陣列,如果是就去跑下Foreach迴圈,刪除,((連動my資料庫));
        
                foreach($arg as $key => $value){
        
                    $tmp[]="`$key`='$value'";
        
                }
        
                $sql.=implode(" , " ,$tmp);
        
            }else{
        
                $sql.=" `id`='$arg'";
        
            }
        
            return $pdo->exec($sql);
        }

    //這塊專門做計算    
    function math($table,$math,$col,...$arg){
        $pdo=pdo();
        
        $sql="SELECT $math(`$col`) FROM $table ";
        
            if(!empty($arg[0])){
        
                foreach($arg[0] as $key => $value){
        
                    $tmp[]="`$key`='$value'";
        
                }
        
                $sql.=" WHERE " . implode(" AND " ,$tmp);
        
            }
        
            //使用fetchColumn()來取回第一欄位的資料
            //只有select 一個欄位的資料，因此這個函式會直接回傳計算的結果出來
            return $pdo->query($sql)->fetchColumn();
        }

    /**
        * $url - 要導向的檔案路徑及檔名
    */    


    function  to($url){ //要回到哪裡去的時候;
        header("location:".$url);

    }


    /**
        * $sql - SQL語句字串，取出符合SQL語句的全部資料
    */

    function  q($sql){
        $pdo=pdo();
        return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    }
    

    function  save($table,$arg){ //要存到..;
        $pdo=pdo();
        $sql='';
        if(isset($arg['id'])){
        //update

            foreach($arg as $key => $value){

                if($key!='id'){

                    $tmp[]="`$key`='$value'";
                }

        }
        //建立更新的sql語法
        $sql.="UPDATE $table SET ".implode(" , " ,$tmp)." WHERE `id`='{$arg['id']}'";

    }else{
        //insert
        $cols=implode("`,`",array_keys($arg));
        $values=implode("','",$arg);

        //建立新增的sql語法
        $sql="INSERT INTO $table (`$cols`) VALUES('$values')";

    }
        //echo $sql;
        return $pdo->exec($sql);

    }

    function dd($array){ //使用函式存成陣列呈現     //最常用來檢查陣列輸出
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }


?>