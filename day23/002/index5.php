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
     $id= (INT) $_POST["id"];
     $Hoten=$_POST["Hoten"];
     $Diachi=$_POST["Diachi"];
     $std=$_POST["std"];
     $email=$_POST["email"];
     $sql_update=" UPDATE sinhvien SET Hoten= '$Hoten', Diachi= '$Diachi', std='$std', email='$email' WHERE id=$id";
//     $sql_update=' UPDATE sinhvien SET Hoten= "'.$Hoten.'", Diachi= "'.$Diachi.'", std="'.$std.'", email="'.$email.'" WHERE id=.$id';

     $a = 1;

     echo "$a";
     echo '$a';
        echo $sql_update;
        $test=$connection->query($sql_update);
        if($test){
            echo "<br> update thành công";
        }else{
            echo "<br> update thất bại";
        }
        echo "<br> Kết quả thực hiện câu query";
        var_dump($test);

 }
     ?>
    <div class="page-wrap">
        <form action=""name="sinhvien" method="post">
            <p>
                <lable>ID</lable>
                <input type="text" name="id">
            </p>
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