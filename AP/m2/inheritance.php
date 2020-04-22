<?php

class Person{
    private $name;
    public $age;
    protected $phone;
    public function Tack ($msg)
    {
       echo "\n$msg\n";
    }
    public function Wack ()
    {
        echo "\nWacking\n";
    }
    public function Eat ()
    {
        echo "\nEating\n";
    }
    public function Seter($name,$age,$phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }
    public function Geter()
    {
        return [$this->name,$this->age,$this->phone];
    }
}
class Mohammadali extends Person{
    private $ProrammingL = "Node JS & (PHP)";
    public function setPhone()
    {
        $this->phone ='0920202020202020' ;
    }
    public function GetPL()
    {

        return [$this->Geter(),$this->ProrammingL];
    }

}


$person = new Mohammadali() ;
$person->Seter('Mohammad Ali Kazemi',21,'091221332');
$person->setPhone();
var_dump($person->Geter());
$person->Wack();
$person->Tack('Hello world !');
$person->Eat();
var_dump($person->GetPL());