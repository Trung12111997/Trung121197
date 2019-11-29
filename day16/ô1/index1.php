<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
 <pre>
     Mảng trong PHp
     Mảng là 1 kiểu dữ liệu trong PHP có thể chứa nhiều giá trị
     Mảng chưa phần tử (Gồm 2 yếu tố )
     2 Phần tử gồm chỉ số và giá trị
     Mảng đượ chia làm 3 loại mảng:
     1 là mảng chỉ số ( Tất cả các key trong mảng đều là số )
     2. Mảng kết hợp (Khi có 1  key laftrong mảng trở nên là chuỗi )
     3. Mảng đa chiều ( Mảng lồng mảng )
 </pre>
    <?php
        $mobiles= ["oppo", " samsung", "vimarrt", "Xiomi"];
     echo"<pre>";
        print_r($mobiles);
     echo"<pre>";
     echo "<br> Tỏng số phần tử trong mảng là :".count($mobiles);
//     truy suất vào phần tử trong mảng
    echo "<br>".$mobiles[0];
    echo "<br>".$mobiles[1];
    echo "<br>".$mobiles[2];
    echo "<br>".$mobiles[3];
//    hàm is_array dùng để kiểm tra xem biến có phải có 2 mảng hay khôg
     $checkarray = is_array($mobiles);
    echo "<br> Test thử hàm is array để kiểm tra mảng ";
    var_dump($checkarray);
//     Hàm empty là hàm dùng để kiểm tra xem mảng rỗng hay không
    $checkempty = empty($mobiles);
    echo "<br> Hàm có phải hàm rỗng không :";
    var_dump($checkempty);
    foreach($mobiles as $key_mobiles => $value_mobiles){
        echo "<br>".$key_mobiles;
        echo "<br>".$value_mobiles;
    }

    ?>


</body>
</html>