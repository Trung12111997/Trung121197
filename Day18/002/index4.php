<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <Pre>
        Hủy cookies thì dẽ dùng lifetime trừ đi 1 số bất kì
    </Pre>
    <?php
        echo "<pre>";
            print_r($_COOKIE);
        echo "<pre>";
        $lifetime=time()-8460;
        setcookie("username","",$lifetime,"/");
    echo "<pre>";
    print_r($_COOKIE);
    echo "<pre>";

    ?>
</body>
</html>