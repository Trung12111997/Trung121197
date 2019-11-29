<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$car = array(" sịn", "sò", "đấy");
echo"<pre>";
print_r($car);
echo"</pre>";
rsort($car);
echo"<pre>";
print_r($car);
echo"</pre>";
?>
</body>
</html>