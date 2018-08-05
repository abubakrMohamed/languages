<?php
class Car{
    private $door_count = 4;

    public function getValues(Type $var = null)
    {
        echo $this->door_count."<br>";
    }
    public function setValues($var)
    {
        $this->door_count = $var;
    }
}

$car = new Car;
$car -> getValues();
$car->setValues(15);
$car -> getValues();