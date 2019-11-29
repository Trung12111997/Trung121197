<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$a=array(1,2,23,4,5,6,7,74,3);
$b= array(5.7,4.5,3.4,4.5,2.4);
$c= array("Ngyenvawn a", "nguyenvawn b", "Nguyenvan c");
$d= array(true,false,true,false);
$e= array(1," Nguyễn văn a",1.2,true);
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<pre>";
print_r($b);
echo "</pre>";
echo "<pre>";
print_r($c);
echo "</pre>";
echo "<pre>";
print_r($d);
echo "</pre>";
echo "<pre>";
print_r($e);
echo "</pre>";
foreach ($c as $key => $value){
    echo "<br>".$key ."-" .$value;
}
?>

</body>
</html>