<?php
class Cars
{
    var $wheelCount;
    var $doorCount;

    function carDetails(){
        return "this car has {$this->wheelCount} wheel and has {$this->doorCount} Doors";
    }
}

$bmw = new Cars;
$bmw->wheelCount = 4;
$bmw->doorCount =2;
echo $bmw->carDetails();
