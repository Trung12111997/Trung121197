<?php
namespace MVC\Models;
class Database{
    public $connect;
    const SERVER_NAME="localhost";
    const USERNAME="root";
    const PASSWORD="";
    const DBNAME="mvcdemo";


    public function connectDB(){
        if (!$this->connect){
           $this->connect=mysqli_connect(seft:: SERVER_NAME, seft::USERNAME, seft:: PASSWORD, seft:: DBNAME);
        }
        if (!$this->connect){
            die("Connection failed: " .mysqli_connect_error());
        }

    }
}
