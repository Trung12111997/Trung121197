<?php
namespace MVC\Controller;
class PostController{
    public function indexAction() {
//        in ra tên của claass và tên của phương thức đang điợc goi đến
        echo "<br>".__METHOD__;
        include_once "mvc/view/post/index.php";
    }
    public function createAction() {
        echo "<br>".__METHOD__;
        include_once "mvc/view/post/create.php";
    }
    public function editAction() {
        echo "<br>".__METHOD__;
        include_once "mvc/view/post/edit.php";
    }
    public function deleteAction() {
        echo "<br>".__METHOD__;
        include_once "mvc/view/post/delete.php";
    }
}