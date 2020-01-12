<?php
if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
    $id = (int)$_GET["id"];
    include_once "conn.php";
    $sqlSelect = "SELECT * FROM sinhvien WHERE id=$id";
    $stmt = $conn->prepare($sqlSelect);
    $stmt->execute();
// set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $all = $stmt->fetchAll();
    echo "<pre>";
    print_r($all);
    echo "</pre>";
    $user = isset($all[0]) ? $all[0] : 0 ;
} else {
    echo "<br> Không tìm thấy id";
}
if (!isset($user["id"])) {
    echo "<br> Không tìm thấy bản ghi có id tương ứng"; exit;
}
?>

<div class="page-wrap">
    <form name="sinhvien" action="update.php" method="post">

        <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
        <p>
            <label> Họ tên</label>
            <input name="Hoten" type="text" value="<?php echo $user["Hoten"] ?>">
        </p>

        <p>
            <label>Dịa chỉ</label>
            <input name="Diachi" type="text" value="<?php echo $user["Diachi"] ?>">
        </p>
        <p>
            <label>std</label>
            <input name="std" type="text" value="<?php echo $user["std"] ?>">
        </p>
        <p>
            <label>email</label>
            <input name="email" type="email" value="<?php echo $user["email"] ?>">
        </p>

        <p>
            <input type="submit" name="submit" value="Cập nhật data">
        </p>

    </form>
</div>