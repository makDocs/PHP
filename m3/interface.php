<?php

interface Car {
    public function setName($value);
    public function setSpeed($value);
}

class Benz implements Car{
    public $name , $speed ;

    public function setName($value)
    {
        $this->name = $value;
        return true;
    }
    public function setSpeed($value)
    {
        $this->speed = $value;
        return true;
    }
    public function getInfo()
    {
        return "name is " . $this->name . "  And Speed is" . $this->speed;
    }

}

$benz = new Benz();
$benz->setName('S-500');
$benz->setSpeed('300');
echo $benz->getInfo();