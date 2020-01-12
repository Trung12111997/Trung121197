<?php
class Car
{
//        khai báo các thuộc tính
//Thuộc tính chỉ đặc điểm của đối tượng
//Phương thức chỉ ra hành động cụ thể
    public $name;
    public $model;
    public $weight;
    public $price;
    public $year_public;
    public $manufacture;
    public function __construct($name,$model,$weight,$price,$year_public,$manufacture)
    {
        echo "<br> Tôi là phương thức khởi tạo tôi được tự động gọi khi được sử dụng từ khóa new khửi tạo đối tượng";
        //Phương thức khởi tạo
//        Lấy giá tri từ tham số truyền vào gán cho các thuộc tính và chú ý  là bên trong class khi muốn gọi đến chính class đó thì sẽ
//       sử dujg đến từ $this
//         Phương thức khởi tạo sẽ được gọi tự động
        $this-> name=$name;
        $this-> model=$model;
        $this-> weight=$weight;
        $this-> price=$price;
        $this-> year_public=$year_public;
        $this-> manufacture=$manufacture;
    }
    public function getInfo(){
        echo "<br> Phương thức getInfo";
        echo "<br>".$this->name;
        echo "<br>".$this->model;
        echo "<br>".$this->weight;
        echo "<br>".$this->price;
        echo "<br>".$this->year_public;
        echo "<br>".$this->manufacture;
    }

}
$car1= new Car("vin fast", "lx", "1 tấn", "600000000", 2019, "vin");
$car1->getInfo();