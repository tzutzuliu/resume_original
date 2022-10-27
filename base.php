<?php
//設台北時區
// base檔載入session其他include都會有
//php 自訂函式(帶參數);參數本身不一定是value,也可能是物件或其他種形式ex array也行
//base檔案專門處理多複雜的部份.故必須了解function的重要性,這個檔案稍微複雜一點,但可自行調整;
//裡面會有很多個區塊的function去處理任何一件事,包含儲存,刪除...等brabra;
// implode 接起字串 AND (要空格) 後輸出


//設台北時區
date_default_timezone_set("Asia/Taipei");


// base檔載入session其他include都會有
session_start();


class DB
{
    private $dsn = "mysql:host=localhost;charset=utf8;dbname=s1110220";
    //private $dsn = "mysql:host=localhost;charset=utf8;dbname=db_resume"; //不能有空格
    private $root = 's1110220';
    //private $root = 'root';
    private $password = "s1110220";
    //private $password = "";
    private $table;
    private $pdo;

    //設定建構式
    //PDO連線
    //Apache->Config->httpd.conf->DocumentRoot & Directory 
    public function __construct($table)
    {

        $this->table = $table;
        $this->pdo = new PDO($this->dsn, $this->root, $this->password);
        // $this->pdo =new PDO("mysql:host=localhost;dbname=db01_story", $this->root, $this->password);
    }


    /****************************************************************************************** */

    //($a,…$arg)的參數寫法稱為"不定參數"，表示不確定參數會有幾個，而所有的參數都會被放入陣列中。
    // 不定參數一定放在所有參數的最後，前面的參數表示一定要有，否則會出現參數缺少的錯誤。
    public function all(...$arg)
    {

        $sql = "select * from $this->table ";

        // $arg=[] or [陣列],[SQL字串],[陣列,SQL字串]
        if (isset($arg[0])) {

            //判斷是否為array
            if (is_array($arg[0])) {
                //處理陣列 ["欄位"=>"值","欄位"=>"值"]
                //處理SQL語法 where `欄位`='值' && `欄位`='值'

                foreach ($arg[0] as $key => $value) {

                    $tmp[] = sprintf("`%s`='%s'", $key, $value);
                }

                // print_r (implode(" && ", $tmp)); //&&前後空白 //implode() 函數把數組元素組合為一個字符串。
                $sql = $sql . " where " . implode(" && ", $tmp); //where前後注意空白

            } else {
                //為字串
                $sql = $sql . $arg[0];
            }

            if (isset($arg[1])) {
                //為字串
                $sql = $sql . $arg[1];
            }
        }


        // echo $sql;
        //執行 PDO 物件並將sql語法導向到裡面的 query() 函數。讓 PDO 進行 SQL 連接並且執行 query()。
        //fetchAll(PDO::FETCH_ASSOC)
        return $this->pdo->query($sql)->fetchAll();
    }
    /****************************************************************************************** */


    public function count(...$arg)
    {
        $sql = "select count(*) from $this->table ";

        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $key => $value) {
                    $tmp[] = sprintf(" `%s`='%s' ", $key, $value);
                }

                $sql = $sql . " where " . implode(" && ", $tmp);
            } else {

                $sql = $sql . $arg[0];
            }
        }

        if (isset($arg[1])) {
            $sql = $sql . $arg[1];
        }

        // echo $sql."<br>";
        return $this->pdo->query($sql)->fetchColumn();
    }
    /****************************************************************************************** */


    public function find($id)
    {
        $sql = "select * from $this->table ";

        if (is_array($id)) {
            foreach ($id as $key => $value) {
                $tmp[] = sprintf("`%s`='%s'", $key, $value);
            }

            $sql = $sql . " where " . implode(" && ", $tmp);
        } else {

            $sql = $sql . " where `id`='$id' ";
        }


        // echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    /******************************************************************************************/

    public function del($id)
    {
        $sql = " delete from $this->table";

        if (is_array($id)) {
            foreach ($id as $key => $value) {
                $tmp[] = sprintf(" `%s`='%s' ", $key, $value);
            }

            $sql = $sql . " where " . implode(" && ", $tmp);
        } else {

            $sql = $sql . " where `id`='$id'";
        }


        // echo $sql."</br>";
        return $this->pdo->exec($sql);
    }
    /******************************************************************************************/

    //array有id做update,沒有做insert
    //規範傳入的參數為一個陣列,陣列格式為 `欄位` => "值", 所以不再另外加判斷式is_array()
    public function save($array)
    {
        if (isset($array['id'])) {
            //update有id
            foreach ($array as $key => $value) {
                $tmp[] = sprintf(" `%s`='%s' ", $key, $value);
            }
            //update改變
            $sql = "update $this->table set " . implode(',', $tmp) . " where `id`='{$array['id']}' ";
        } else {
            //insert 增加
            //`,` & ','
            //array_keys()取array所有的key值
            $sql = " insert into $this->table (`" . implode("`,`", array_keys($array))  . "`) 
                                        values ('" . implode("','", $array) . "') "; //串所有值
        }


        // echo $sql."<br>";
        return $this->pdo->exec($sql);
    }
}

/******************************************************************************************/
function to($url)
{
    header("location:" . $url);
}



// 建立物件導向(資料表)///////////////////////////////////////////////

$Msg = new DB("msg");



// 如果要建立session狀態管理測試

//if (!isset($_SESSION['total'])) {
//    $total = $Total->find(1);
//    $total['total'] = $total['total'] + 1;
    // print_r($total);
//    $Total->save($total);

    // 建立SESSION
//    $_SESSION['total'] = 0;
//}




?>
