<?php

class a {
    public $a='ali';
    public $a1='aliiiii1';
    public $a2='aaaali2';
    private $b = "kazemi";
    protected $c = '211';
    public function f1($name)
    {
        return $name;
    }
}

$user = new a();

// var_dump($user);

// var_dump(json_encode($user));// just Publics 

////////////////////////////////////////////////////////



$arr = array(
    array('team'=>'real','score'=>80),
    array('team'=>'barsa','score'=>76),
    array('team'=>'pres','score'=>65),

);

var_dump(json_encode($arr));





?>