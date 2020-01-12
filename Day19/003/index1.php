<?php
include_once "guest.php";
include_once "mod.php";
include_once "admin.php";
$gurtses= new Guest();
$gurtses->banhknunber();
echo "<pre>";
print_r($gurtses);
echo "<pre>";
$statuss1=new mod();
$statuss1-> getStatusInfo();
echo "<pre>";
print_r($statuss1);
echo "<pre>";

