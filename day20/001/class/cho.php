<?php
include_once "../abstrack/Dongvat.php";
include_once "../interface/An.php";
include_once "../interface/Keu.php";
include_once "../interface/sinhsan.php";
class cho extends Dongvat implements An,Keu,sinhsan{
    public function toinayangi()
    {
        // TODO: Implement toinayangi() method.
        echo "<br> Tối nay ăn xương ";
    }
    public  function keunhuthenao()
    {
        // TODO: Implement keunhuthenao() method.
        echo "<br> Kêu như chó";
    }
    public function Sinhsanrasao()
    {
        // TODO: Implement Sinhsanrasao() method.
        echo "<br> sinh theo năm ";
    }
    public function Khainien()
    {
        parent::Khainien(); // TODO: Change the autogenerated stub

    }
    public function Tenloai()
    {
        // TODO: Implement Tenloai() method.
        echo "<br> Tôi Tên là chó milu";
    }
    public function Thongtin()
    {
        // TODO: Implement Thongtin() method.
        echo "<br> Tôi đến từ hàn quốc";
    }
}