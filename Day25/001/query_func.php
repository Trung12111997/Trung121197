<?php
class Database{
    private  $host ="localhost";
    private  $username="root";
    private  $password="";
    private $databasename="baitap";
    private  $charset="utf8";
    private $conn;
    public function __construct()
    {
        $this->connect();

    }
    public function connect(){
        if (!$this->conn){
            $this->conn= mysqli_connect($this->host,$this->username,$this->password,$this->databasename);
            if (mysqli_connect_errno()){
                echo 'kết nối thất bại'.mysqli_connect_error();
                die();
            }else{
                echo 'Thành công ';
            }
            mysqli_set_charset($this->conn,$this->charset);
        }
    }

    public function disConnect(){
        if ($this->conn)
            mysqli_close($this->conn);
    }
    public function error(){
        if ($this->conn)
            return mysqli_error($this->conn);
        else
            return false;
    }
    public function insert($table='',$data=[]){
        $keys='';
        $values='';
        foreach ($data as $key=>$value){
            $keys .=','.$key;
            $values .= ',"'.mysqli_real_escape_string($this->conn,$value).'"';
        }
        $sql= 'INSERT INTO '.$table .'('.trim($keys,',').') VALUES (' .trim($values,',') .')';
        return mysqli_query($this->conn,$sql);
    }
    public  function update( $table='',$data=[], $id=[]){
        $content='';
        if (is_integer($id)){
            $where='id='.$id;
        }
        elseif(is_array($id) && count($id)==1){
            $listKey = array_keys($id);
            $where=$listKey[0].'='.$id[$listKey[0]];
        }
        else{
            die('không có nhiều hơn 1 khóa cính và id truyền vào phải là số ');
        }
            foreach ($data as $key => $value){
                $content .= ','. $key . '="'.mysqli_real_escape_string($this-> conn, $value).'"';

            }
            $sql='UPDATE ' .$table.' SET ' .trim($content,',').' WHERE '.$where;
            return mysqli_query($this->conn,$sql);


    }
    public function  delete($table='', $id=[]){
        $content = '';
        if(is_integer($id))
            $where = 'id = '.$id;
        else if(is_array($id) && count($id)==1){
            $listKey = array_keys($id);
            $where = $listKey[0].'='.$id[$listKey[0]];
        }
        else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        $sql = 'DELETE FROM ' . $table . ' WHERE '. $where;
        return mysqli_query($this->conn,$sql);
    }

}

//$data= [
//    'Hoten'    => 'Quang Anh',
//    'Diachi' => 'Bac Ninh',
//    'std' => '35',
//    'email' => '03157'
//];
//$db1 = new Database();
//if($db1->insert('sinhvien', $data)){
//    echo 'Thêm thành công';
//}else {
//    echo "Lỗi: " .$db1->error();
//}
//$data= [
//    'Hoten'    => 'Quang Anh',
//    'Diachi' => 'Bac Ninh',
//    'std' => '35',
//    'email' => '03157'
//];
//$id = 2;
//$db1 = new Database();
//if($db1->update('sinhvien', $data, $id)){
//    echo 'Sửa thành công';
//}else {
//    echo "Lỗi: " .$db1->error();
//}
$id = 3;
$db = new Database();
if($db->delete('sinhvien', $id)){
    echo 'Xóa thành công';
}else {
    echo "Lỗi: " .$db->error();
}