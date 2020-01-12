<?php
class student{
public function getInfo(){
    echo "<br>".__METHOD__;
}
}
class  teacher{

}
class  Cours{

}
//cacsch 1
$nam= new student();
$nam->getInfo();
$hieu= new  teacher();
$php = new Cours();
//cách 2
$classname1="student";
$nam=new $classname1();
$method1="getInfo";
$nam= new $method1();
print_r($nam);
