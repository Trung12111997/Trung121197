<?php
    class dthoaicodien{
        public $name;
        public function goidien(){
            echo"<br> gọi điện ";
        }
        public function nhantin(){
            echo"<br> sms ";
        }
    }
    trait computer{
        public function gưithudientu(){
            echo"<br> guithu";
        }
        public function office(){
            echo"<br> office";
        }
    }
    trait  radio{
        public function ngheradio(){
            echo "<br> nghe radio";
        }
    }
    trait camera{
        public function chupanh(){
            echo"<br> Chụp ảnh";
        }
    }
     class dthoaithongm extends dthoaicodien {
        use computer,radio,camera;
     }
$sony = new dthoaithongm();
$sony->gưithudientu();
$sony->chupanh();
$sony->ngheradio();
$sony->office();
$sony->goidien();
$sony->nhantin();