<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
 include_once "connection.php";
 if (isset($_POST["Hoten"]) && isset($_POST["Diachi"])&& isset($_POST["std"])&& isset($_POST["email"]))
 {
     $Hoten=$_POST["Hoten"];
     $Diachi=$_POST["Diachi"];
     $std=$_POST["std"];
     $email=$_POST["email"];
     $sql_insert="INSERT INTO sinhvien(Hoten, Diachi, std,email) VALUES ('$Hoten', '$Diachi','$std','$email')";
        echo $sql_insert;
        $test=$connection->query($sql_insert);
        if($test){
            echo "<br> insert thành công";
        }else{
            echo "<br> insert thất bại";
        }
        echo "<br> Kết quả thực hiện câu query";
        var_dump($test);

 }
     ?>
    <div class="page-wrap">
        <form action=""name="sinhvien" method="post">
            <p>
                <lable>Hoten</lable>
                <input type="text" name="Hoten">
            </p>
              <p>
                <lable>Diachi</lable>
                <input type="text" name="Diachi">
            </p>
              <p>
                <lable>SĐT</lable>
                <input type="text" name="std">
            </p>
                      <p>
                <lable>EMail</lable>
                <input type="text" name="email">
            </p>
            <p>
                <input type="submit" name="submit" value="Thêm">
            </p>
        </form>
    </div>
</body>
</html>