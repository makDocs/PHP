<?php

class Phone{
    private $barnd = '' , $name  , $color , $sold  ;
    public static $stock = 100;
    const YEAR = 2018;
    const TYPE = 'SmartPhone';
    function __construct()
    {
        echo '<pre>constructor';
    }
    function __destruct()
    {
        echo '</pre>';
    }
    public function SeterValue($brand,$name,$color,$sold){
        $arr = array('brand','name','color');
        foreach ($arr as $key => $value) {
            $this->$value = $$value; 
        }
        $this->sellInfo($sold);
    }
    public function infoPhone (){
        $arr = array('brand','name','color','sold');
        foreach ($arr as $key => $value) {
            echo $key+1 . " $value is ". $this->$value . '<br>'; 
        }
        echo Phone::$stock .'<br>';
    }
    public function sellInfo($a){
        Phone::$stock -=$a;
        echo 'Phone::$stock' . Phone::$stock ;
        $this->sold += $a;
    }


    public function getNameClass()
    {
        echo "This class is " . get_class($this);// This class is Phone
    }

}


$phone1 = new Phone();
$phone1->SeterValue('Samsung','S8','blue',20);
$phone2 = new Phone();
$phone2->SeterValue('Samsung','J7 Prime','red',34);
$phone3 = new Phone();
$phone3->SeterValue('Apple','X','black',12);
$phone4 = new Phone();
$phone4->SeterValue('Apple','5s','green',45);
$phone5 = new Phone();
$phone5->SeterValue('Samsung','S3','pink',73);

$phones = array('phone1','phone2','phone3','phone4','phone5');
foreach ($phones as $key => $value) {
    echo '<br><h1>' . ($key+1) ." $value </h1>";
    $$value->infoPhone();
    echo '<br>';
}
// $phone1->infoPhone();


if($phone1 instanceof Phone){
    echo 'Its a Phone';
}
