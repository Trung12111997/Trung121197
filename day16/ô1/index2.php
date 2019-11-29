<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
         $mobiless=["xi" => "Xiaomi", "sa" => "Samsung","op" => "oppo"];
         $mobiless[4]= "Test";
         echo"<pre>";
          print_r($mobiless);
         echo"<pre>";
         echo "<br>".$mobiless["xi"];
         echo "<br>".$mobiless["sa"];
         echo "<br>".$mobiless["op"];
         echo "<br>".$mobiless["4"];

        foreach($mobiless as $key_mobiless => $value_mobiless){
            echo "<br>".$key_mobiless;
            echo "<br>".$value_mobiless;
            }
?>
</body>
</html>