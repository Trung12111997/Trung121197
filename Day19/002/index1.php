<?php
include_once "guest.php";
include_once "mod.php";
include_once "admin.php";
$guetse= new guest();
$guetse->name="Người dùng 1";
$guetse->tuoi="21";
$guetse->join_created="21/11/2018";
$guetse->viewArtical();
$guetse->postcoment();
echo "<pre>";
print_r($guetse);
echo "<pre>";
/////////
///
///
///
 $admin1= new admin();
 $admin1->maintain="maintain";
 $admin1->mannagermod();
echo "<pre>";
  print_r($admin1);
 echo "<pre>";
 //////
/// ////
/// ///
/// //
///
$approvecomen1= new mod();
$approvecomen1-> approve_comment="approve_comment";
$approvecomen1-> manager_guest="manager_guest";
$approvecomen1->approvecoment();
$approvecomen1->managerguest();

echo "<pre>";
print_r($approvecomen1);
echo "<pre>";

