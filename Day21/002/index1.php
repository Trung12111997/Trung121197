<?php
function tinhchuvihinhtron($r){
    return r*2*3.14;
}
function hello($name){
    echo "<br> Chào ".$name;

}
hello("Tuấn");
$abc="Phiên bản 7";
$abc1="Phiên bản 5";
$php=function() use ($abc,$abc1){
    return"php".$abc.$abc1;
};
//khi gọi hàm ẩn danh thì gioosng như gọi hàm vì lúc này biến nó là 1 hàm
hello($php());