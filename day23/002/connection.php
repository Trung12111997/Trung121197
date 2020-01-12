<?php

$mysqlServer = "localhost";
$mysqlSUser = "root";
$mysqlpassword = "";
$mysqlDatabaseName = "baitap1";
$connection = new mysqli($mysqlServer, $mysqlSUser, $mysqlpassword, $mysqlDatabaseName);
if ($connection->connect_error) {
    die("Kết nối CSDL bị lỗi" . $connection->connect_error);
//    ngắt chương trình và show ra lỗi
}