<?php
class Guest{
    public $name;
    public  $tuoi;
    public  $join_created;
    protected $status;//tình trang hôn nhân
    public function viewArtical(){
        echo "<br> xem bài viết";
    }
    public function postcoment(){
        echo "<br> bình luận bài viết";
    }
}
