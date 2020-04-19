<?php

class Person{
    
    private $arr = array(); 

    public function __set($name, $value)
    {
        $this->arr[$name] = $value;
    }
    function __get($name)
    {
        return $this->arr[$name];
    }
}

$phone = new Person();

$phone->color = "Red";

echo "Color : " . $phone->color;










?>