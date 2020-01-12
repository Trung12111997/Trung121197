<?php
// Nạp file kết nối CSDL
include_once "conn.php";
if (isset($_POST["Hoten"]) && isset($_POST["Diachi"]) && isset($_POST["std"]) && isset($_POST["email"])) {
    $Hoten = $_POST["Hoten"];
    $Diachi = $_POST["Diachi"];
    $std = $_POST["std"];
    $email = $_POST["email"];
    $id = $_POST["id"];
    $sql_update = "UPDATE sinhvien SET Hoten='$Hoten', Diachi= '$Diachi', std = '$std',email='$email' WHERE id=$id";
    echo $sql_update;
    $test = $conn->query($sql_update);
    if ($test) {
        echo "<br> Cập nhật thành công";
    } else {
        echo "<br> Cập nhật thất bại";
    }
    echo "<br> kết quả thực hiện câu query";
    var_dump($test);
    header("Location: index6.php"); exit;
}
?>
© 2019 GitH