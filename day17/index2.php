<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<form name="login" action="" method="post">
    <p>
        <lable> Username</lable>
        <input  name="username" type="text" value="">
    </p>
    <p>
        <lable> Password</lable>
        <input  name="password" type="text" value="">
    </p>
    <p>
        <input type="submit" value="login"name="submit">
    </p>
</form>
<div class="alert alert-success">
<strong>Success! Bạn đã đăng nhập thành công</strong>
</div>
<div class="alert alert-danger">
    <strong>Fail!</strong> Sai username và mật khẩu
</div>
<?php
    if(isset($_POST['username'])&&isset($_POST['password'])){
        if(isset($_POST['username'])==admin && isset($_POST['password'])==12345678){

        }

    }

?>
</body>
</html>