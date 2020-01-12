<?php
class mod extends Guest{
    public $approve_comment;
    public $manager_guest;
    public function approvecoment(){
        echo "<br> Duyệt comment";
    }
    public function managerguest(){
        echo "<br> quản lý người dùng ";
    }

}
