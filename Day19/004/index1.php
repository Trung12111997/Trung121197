<?php
class demo{
    public static $spro1;
    public $spro2;
    public function method1(){
        echo"<br> method1";
    }
    public static function method2(){
        echo"<br> method2";
    }
}
$demo1=new demo();
$demo1->spro2="abc";
$demo1->method1();
