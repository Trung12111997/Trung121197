<?php
namespace unities\payment;
include_once "trait/momo.php";
include_once "trait/Napas.php";
use traits\MOmo;
use traits\Napas;
class payment{
    use MOmo;
    use Napas;
    public function demo(){
        echo "<br>".__METHOD__;

    }
}