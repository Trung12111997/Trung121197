<?php
function tinhchuvihinhtron($r){
    return r*2*3.14;
}
function hello($name){
    echo "<br> Chào ".$name;

}
hello("Tuấn");
$php=function(){
    return"php";
};
//khi gọi hàm ẩn danh thì gioosng như gọi hàm vì lúc này biến nó là 1 hàm
hello($php());