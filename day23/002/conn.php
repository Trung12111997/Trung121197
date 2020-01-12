<?php
$mysqlServer = "localhost";
$mysqlSUser = "root";
$mysqlpassword = "";
$mysqlDatabaseName = "baitap";
try{
    $conn = new  PDO("mysql:host=$mysqlServer;dbname=$mysqlDatabaseName",$mysqlSUser,$mysqlpassword);
    $conn->setAttribute(PDO ::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected thành công";
}
catch (PDOException $e){
    echo "Connection thất bại: " . $e->getMessage();
}
echo"<br> DeMOTesst";