<?php

if(isset($_POST['weight'])&& isset($_POST['height'])){
    echo "Cân nặng là:".$_POST["weight"];
    echo "<br>";
    echo "Chiều cao là:".$_POST["height"];
    $BMI=($_POST['weight'])/($_POST['height']*$_POST['height']);
    echo " chỉ số BMI là :".$BMI;
    $nguyco="";
    $phanloai="";
    if ($BMI < 18.5) {
        $phanloai = "gầy";
        $nguyco = "thấp";
    } else if (BMI >= 18.5 && $BMI < 25) {
        $phanloai = "bình thường";
        $nguyco = "trung bình";
    } else if ($BMI >= 25 && $BMI < 30) {
        $phanloai = "hơi béo";
        $nguyco = "cao";
    } else if ($BMI >= 30 && $BMI < 35) {
        $phanloai = "béo phì độ 1";
        $nguyco = "cao";
    } else if ($BMI >= 35 && $BMI < 40) {
        $phanloai = "béo phì độ 2";
        $nguyco = "rất cao";
    } else {
        $phanloai = "béo phì độ 3";
        $nguyco = "nguy hiểm";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>


<div class="container">
    <div class="row">

            <pre>
                Sử dụng công thức tại trang https://news.zing.vn/5-cong-thuc-don-gian-do-chi-so-BMI-post669580.html
                để tính toán ra chỉ số BMI khi nhập vào
                và in ra thông tin phân loại
                và nguy cơ bệnh tật
            </pre>
        <form name="BMI" action="" method="post" /*onsuBMIt="return false;"*/>
            <div class="form-group">
                <label>Cân nặng ( Kg )</label>
                <input type="text" name="weight" class="form-control" placeholder="Cân nặng">

            </div>
            <div class="form-group">
                <label>Chiều cao ( đơn vị mét )</label>
                <input type="text" name="height" class="form-control" placeholder="Chiều cao">
            </div>
        <p>
            <input type="suBMIt" value="tính BMI"name="suBMIt">
        </p>

<!--            <button class="btn btn-primary" onclick="">tính MBI</button>-->
        </form>
    </div>

    <div class="row">
        <h2>Kết quả sau tính toán</h2>


    </div>

    <div class="row">
        <p> Phân loại :<?php echo $phanloai ?></p>
        <p> Nguy cơ :<?php echo $nguyco ?></p>

    </div>
</div>


</body>
</html>