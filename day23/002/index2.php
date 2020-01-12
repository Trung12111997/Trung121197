<?php

$mysqlServer = "localhost";
$mysqlSUser = "root";
$mysqlpassword = "";
$mysqlDatabaseName = "baitap";
$connection= mysqli_connect($mysqlServer, $mysqlSUser, $mysqlpassword, $mysqlDatabaseName);
if (!$connection) {
    die("kết nối đến CSDL bị lỗi " . mysqli_connect_error());
}
echo "<br> Kết nối thành công";