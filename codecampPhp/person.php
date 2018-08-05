<?php
class Person {

    var $name = "";
    var $surName = "";
    var $age = "";
    public static $hairColor = "أسود";

    public function __construct()  {

    }

    public function sayHello() {
        echo $this->name .' '. $this->surName .' '. self::$hairColor ."<br>";
    }
  
}

Person::$hairColor = "Brown";
$abubakr = new Person();
$abubakr->age = 35;
$abubakr->name = "أبوبكر";
$abubakr->surName = "محمد";
$abubakr->sayHello();

$omer = new Person();
$omer->age = 30;
$omer->name = "عمر";
$omer->surName = "ناصر";
$omer->sayHello();

$available_classes = get_declared_classes();
foreach ($available_classes as $key => $value) {
    echo $key ."=>". $value ."<br>";
}