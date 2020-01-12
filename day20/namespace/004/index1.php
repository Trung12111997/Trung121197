<?php
include_once "app/controllers/controller.php";
include_once "app/controllers/backend/index.php";
include_once "app/controllers/backend/post.php";
include_once "app/controllers/fontend/index.php";
include_once "app/controllers/fontend/post.php";
include_once "app/model/backend/index.php";
use \app\controllers\backend\indexcontroller as BE_indexcontroller ;
use \app\controllers\fontend\indexcontroller as BF_indexcontroller;

$indexcontroller= new BE_indexcontroller();
$indexcontroller->getInfo();
$indexcontroller1= new BF_indexcontroller();
$indexcontroller1->getInfo();


