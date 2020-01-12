<?php
class demo{
    public static $spro1;
    public $spro2;
    public function method1(){
        echo"<br> method1";
    }
    public static function method2(){
        echo"<br> static method2";
        self::$spro2="12334";
    }
}
demo::$spro1="abc";
demo::method2();
// trong 1 cái phương thức static thì khong được phép sử dụng từ khóa $this để gọi đến chính nó
//muốn truy cập đến thuộc tính static44

