<?php
namespace app\controllers\backend;
use app\model\backend\indexmodel;

class indexcontroller{
    public function getInfo(){
        echo "<br>".__METHOD__;
}
public  function  getInfo2(){
        $model=new indexmodel();
        $model->getAll();
}
}
