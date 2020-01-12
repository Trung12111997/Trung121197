<?php
namespace app\controllers\backend;
use app\model\backend\postmodel;

class postcontroller{
    public function getInfo(){
        echo "<br>".__METHOD__;
    }
    public function getInfo2(){
        $model= new postmodel();
        $model->getAll();
    }
}