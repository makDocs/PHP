<?php
    $a = 10;
    $b = 20;
    $c = 30;
    
    $name = 'a';
    echo $$name . "\n";
    $arr = array('a','b','c');
    foreach ($arr as $key => $value) {
        echo $key . '  ' . $$value . "\n";
    }

?>