<?php

class Mak{
    function __construct($name)
    {
        echo 'name : '. $name .'<br>';   
    }
    function __destruct()
    {
        echo 'destruct<br>';
    }
    
}
$mak = new Mak("Mohammad ali");












?>