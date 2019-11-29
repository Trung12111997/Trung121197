<?php
    function tinhdientichhinhtron($bankinh){
        $dientich= $bankinh*$bankinh*3.14;
        return $dientich;
    }
    $bankinh=4;
    $a=tinhdientichhinhtron(4);
    echo $a;
?>
