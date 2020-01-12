<?php
namespace MVC\Controller;
class ProductController{
    public function indexAction() {
//        in ra tên của claass và tên của phương thức đang điợc goi đến
        echo "<br>".__METHOD__;
        include_once "mvc/view/Product/index.php";
    }
    public function createAction() {
        echo "<br>".__METHOD__;
        include_once "mvc/view/Product/create.php";
    }
    public function editAction() {
        echo "<br>".__METHOD__;
        include_once "mvc/view/Product/edit.php";
    }
    public function deleteAction() {
        echo "<br>".__METHOD__;
        include_once "mvc/view/Product/delete.php";
    }
}
