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
        Hủy 1 phần tử trong mảng trong php
        sử dụng
    </pre>
    <?php
        $student=[];
        $student[]="Nguyễn Văn A";
        $student[]="Nguyễn Văn B";
        $student[]="Nguyễn Văn C";
        $student[]="Nguyễn Văn D";

        echo "<pre>";
        print_r($student);
        echo"<pre>";
        unset($student[1]);
    echo "<pre>";
    print_r($student);
    echo"<pre>";
    ?>
</body>
</html>