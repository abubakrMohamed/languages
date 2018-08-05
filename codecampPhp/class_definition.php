<?php
// include_once("person.php");
class car //extends Person
{
    public function greetings()
    {
            
    }
    protected function greetings0()
    {
            
    }
    private function greetings1()
    {
            
    }
    public function greetings2()
    {
            
    }
    
}

// $available_classes = get_declared_classes();
// foreach ($available_classes as $key => $value) {
//     echo $key ."=>". $value ."<br>";
// }

$available_method = get_class_methods("car");
foreach ($available_method as $key => $value) {
    echo $key ."=>". $value ."<br>";
}