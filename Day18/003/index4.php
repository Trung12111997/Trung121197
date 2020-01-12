<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
     Chuyển đổi qua lại gữa hai định djang thời gian
     định dạng 1 : người đọc ví dụ 12:05:05 23/12/2008
     định djang 2 : 1577876400
</pre>
<?php
 $time1=" 23-12-2008 12:05:05";
 echo "<br> Thời gian chính là :".$time1;
 $time2=strtotime($time1);
 echo"<br> demo strtotime()".$time2;
 echo "<br> Kiểm tra lại xem đúng không".date("H:i:s d/m/Y",$time2);



?>
</body>
</html>