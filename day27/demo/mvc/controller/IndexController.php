<?php
namespace MVC\Controller;
class IndexController{
    public function indexAction() {
//        in ra tên của claass và tên của phương thức đang điợc goi đến
        echo "<br>".__METHOD__;
        include_once "mvc/view/index/index.php";
    }
    public function createAction() {
        echo "<br>".__METHOD__;
        include_once "mvc/view/index/create.php";
    }
    public function editAction() {
        echo "<br>".__METHOD__;
        include_once "mvc/view/index/edit.php";
    }
    public function deleteAction() {
        echo "<br>".__METHOD__;
        include_once "mvc/view/index/delete.php";
    }
}