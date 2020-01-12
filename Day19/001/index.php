<?php
    class Car{
//        khai báo các thuộc tính
//Thuộc tính chỉ đặc điểm của đối tượng
//Phương thức chỉ ra hành động cụ thể
    public $name;
    public  $model;
    public $weight;
    public $price;
    public  $year_public;
    public  $manufacture;
    public function start(){
        echo "<br> Khởi động xe";
    }
        public function drive(){
        echo "<br> Lái xe nhé";
    }
        public function stop(){
        echo "<br> Dừng lại ngay";
    }

    }
    $manda = new Car();
    $manda->name="Manda CXS";
$manda->weight="1000kg";
$manda->price="1 tỷ";
$manda->year_public="2017";
$manda->manufacture="Masda";
$manda->model="sịn sò";
echo "<pre>";
print_r($manda);
echo "</pre>";
//gọi đến 1 phương thức trong class
$manda-> start();
$manda-> drive();
$manda-> stop();
