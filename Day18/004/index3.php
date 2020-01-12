<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$myfile=fopen("write.txt", "w");
$content="
dong số 1
song so 2
dong so 3
";
fwrite($myfile,$content);
fclose($myfile);

?>
</body>
</html>