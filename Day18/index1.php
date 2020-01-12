<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
 <pre>
     $_REQUEST= $_POST+$_GET
 </pre>
 <?php
echo "<pre>";
    print_r($_REQUEST);
echo "<pre>";
 ?>
 <form name="abc" action="" method="post">
     <input type="text" value="" name="username">
     <input type="submit" value="Gửi dữ liệu" name="submit">

 </form>

</body>
</html>