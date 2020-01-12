<?php
if(isset($_POST["action"])){
    if($_POST["action"] == "edit"){

    }
    elseif ($_POST["action"] =="delete"){

    }
    else{
        $bookFields=["book_name","book_intro","book_thumbnail","book_images","book_price","book_sell","book_author","book_publisher","created","updated","book_hit","book_buy","book_status","book_desc"];
        $bookFieldsNotQuote = ["book_hit", "book_buy", "book_status", "book_price", "book_sell"];
        $data = [];
        foreach ($bookFields as $fieldName){
            if(isset($_POST[$fieldName])){
                if(!in_array($fieldName,$bookFieldsNotQuote)){
                    $data[$fieldName] = "'".$_POST[$fieldName]."'";
                } else{
                    $data[$fieldName] = $_POST[$fieldName];
                }
            }else{
                if ($fieldName == "created" || $fieldName == "updated") {
                    if (!in_array($fieldName, $bookFieldsNotQuote)) {
                        $data[$fieldName] = "'".date("Y-m-d H:i:s")."'";
                    } else {
                        $data[$fieldName] = date("Y-m-d H:i:s");
                    }
                }
            }
        }
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        $fieldsSQL = implode(',', $bookFields);
        $fieldsValue = implode(",", $data);
        echo "<br>" . $fieldsSQL;
        echo "<br>" . $fieldsValue;
        $sqlInsert = "INSERT INTO books($fieldsSQL) VALUES ($fieldsValue)";
        echo "<br>" . $sqlInsert;
        $insertFlag = $conn->query($sqlInsert);
        var_dump($insertFlag);
        die;

    }


}

?>
<!--id ( khóa chính ) int-->
<!--book_name ( tên sách ) varchar-->
<!--book_intro ( giới thiệu ngắn ) varchar-->
<!--book_thumbnail ( ảnh đại diện ) text-->
<!--book_images ( các ảnh của sách ) text-->
<!--book_price ( giá niêm yết ) int-->
<!--book_sell ( giá bán ) int-->
<!--book_author ( tên tác giả ) varchar-->
<!--book_publisher ( nhà xuất bản ) varchar-->
<!--created ( thời gian tạo ) TIMESTAMP-->
<!--updated ( thời gian sửa ) TIMESTAMP-->
<!--book_hit ( số lần đọc ) int-->
<!--book_buy ( số lượt bán thành công ) int-->
<!--book_status ( trạng thái cuốn sách ) int-->
<!--book_desc ( mô tả ) text-->
