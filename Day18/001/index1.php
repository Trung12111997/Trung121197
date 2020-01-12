<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Một sesscion là cách để lưu trữ thông tin trong biến mà được sử dụng trên toàn bộ các trang trên cùng 1 trang web
    Không gioosng cookie thông tin được lưu trữ các sesscion được lưu trữ trên server
    Ứng dụng :
    1 - Làm giỏ hàng trong phpb để lưu trữ
    2- Làm chức năng đăng nhập và đăng xuất trong php
</pre>
<?php
    $_SESSION["username"]= "admin";
    $_SESSION["user_mail"]="admingmail.com";
    $_SESSION["user_role"]="adminstrator";
    echo"<pre>";
    print_r($_SESSION);
    echo  "<pre>";
      //in ra 1 session cụ thể
        echo "<br>" .$_SESSION["username"];
        // Thay đổi gia strij của session
        $_SESSION["username"]="anhsaosb";
            echo"<pre>";
            print_r($_SESSION);
            echo  "<pre>";
?>

</body>
</html>