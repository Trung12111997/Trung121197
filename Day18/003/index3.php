<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$time2020= mktime(12,0,0,1,1,2020);
echo "<br>". $time2020;
echo "<br>" .date("H:i:s d/m/Y",$time2020);
?>

</body>
</html>