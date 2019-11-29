<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form name="login" action="" method="get">
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
<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";
echo "<br>".$_GET["username"];
echo "<br>".$_GET["password"];
echo "<br>".$_GET["submit"];
?>

</body>
</html>