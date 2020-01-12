<?php
include_once "app/controllers/controller.php";
include_once "app/controllers/backend/index.php";
include_once "app/controllers/backend/post.php";
include_once "app/controllers/fontend/index.php";
include_once "app/controllers/fontend/post.php";
$indexcontroller= new  \app\controllers\backend\indexcontroller();
$indexcontroller->getInfo();
$indexcontroller1= new  \app\controllers\fontend\indexcontroller();
$indexcontroller1->getInfo();

