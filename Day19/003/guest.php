<?php
class Guest{
    public $name;
    public  $tuoi;
    public  $join_created;
    private $bank_number_acpunt="0123456789";
    protected $status= " Dã có ngừi iu";   /// tình trạng bản thân
    public function viewArtical(){
        echo "<br> xem bài viết";
    }
    public function postcoment(){
        echo "<br> bình luận bài viết";
    }
    public function banhknunber(){
        echo"<br> Tfai khoản ngân hàng là :";
    }
}
