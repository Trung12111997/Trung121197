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
        Hủy 1 session
    </pre>
    <?php
    $_SESSION["username"]= "admin";
    $_SESSION["user_mail"]="admingmail.com";
    $_SESSION["user_role"]="adminstrator";
    echo"<pre>";
    print_r($_SESSION);
    echo  "<pre>";
    unset($_SESSION["username"]);
    echo"<pre>";
    print_r($_SESSION);
    echo  "<pre>";
    ?>
</body>
</html>