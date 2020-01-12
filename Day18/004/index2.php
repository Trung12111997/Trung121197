<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$fileme= fopen("demo.txt","r") or die ("Không thể mở file");
echo fread($fileme,filesize("demo.txt"));
fclose($fileme);

?>
</body>
</html>