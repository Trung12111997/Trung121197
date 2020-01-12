<?php
class Database{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "demo";
    private $charset = "utf8";
    private $connection;

    //Kết nối
    public function __construct()
    {
        $this->connect();
    }

    public function connect(){
        if(!$this->connection){
            $this->connection = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
            if (mysqli_connect_errno()){
                echo "Kết nối thất bại !" .mysqli_connect_error();
                die();
            }
            mysqli_set_charset($this->connection,$this->charset);
        }
    }

    //Ngắt kết nối
    public function disconnect(){
        if ($this->connection){
            mysqli_close($this->connection);
        }
    }

    public function error(){
        if ($this->connection){
            return mysqli_error($this->connection);
        }else{
            return false;
        }
    }

    public function insert($table = '', $data = []){
        $key = '';
        $value = '';
        foreach ($data as $key=>$value){
            $key .= ','.$key;
            $value .= ',"'.mysqli_real_escape_string($this->connection,$value).'"';
        }
        $sql = 'INSERT INTO' .$table. '(' .trim($key,','). ') VALUES (' .trim($value,','). ')';
        return mysqli_query($this->connection,$sql);
    }

    public function update($table = '', $data = [], $id=[]){
        $content = '';
        if (is_integer($id)){
            $where = 'id = ' .$id;
        }elseif (is_array($id) && count($id) ==1){
            $listkey = array_keys($id);
            $where = $listkey[0] .'='. $id[$listkey[0]];
        }else{
            die('Không thể nhiều hơn 1 khóa chính và id truyền vào phải là số');
        }foreach ($data as $key=>$value){
            $content.= ',' .$key. '="'.mysqli_real_escape_string($this->connection,$value).'"';
        }
        $sql = 'UPDATE' .$table. 'SET' .trim($key,','). 'WHERE' .$where;
        return mysqli_query($this->connection,$sql);
    }

    public function delete($table = '',$id=[]){
        $content = '';
        if (is_integer($id)){
            $where = 'id = ' .$id;
        }elseif (is_array($id) && count($id) == 1){
            $listkey = array_keys($id);
            $where = $listkey[0] .'='. $id[$listkey[0]];
        }else{
            die('Không thể nhiều hơn 1 khóa chính và id truyền vào phải là số');
        }
        $sql = 'DELETE FROM' .$table. 'WHERE' .$where;
        return mysqli_query($this->connection,$sql);
    }

    public function getObbject($table = ''){
        $sql = 'SELECT * FROM' .$table;
        $data = null;
        if ($result = mysqli_query($this->connection,$sql)){
            while($row = mysqli_fetch_object($result)){
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        }
        return false;
    }

    public function query($sql = '', $return = true){

    }
}
//$db1= new Database();
//$db1->error();
//$data = [
//    'firstname'=>"Haha",
//    'lastname'=>"Hihi",
//    'email'=>'ahha'
//];
//if ($db1->insert('demo1',$data)){
//    echo 'Success';
//}else{
//    echo 'Fail'.$db1->error();
//}