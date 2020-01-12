<?php
include_once "app/controllers/controller.php";
include_once "app/controllers/backend/index.php";
include_once "app/controllers/backend/post.php";
include_once "app/controllers/fontend/index.php";
include_once "app/controllers/fontend/post.php";
include_once "app/model/backend/index.php";
 use \app\controllers\backend\indexcontroller;
 use \app\model\backend\indexmodel;
$indexcontroller= new indexcontroller();
$indexcontroller->getInfo();
$indexcontroller1= new indexmodel();
$indexcontroller1->getInfo();

