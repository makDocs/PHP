<?php

    $arr = array(
        0 => 'string',
        3 => true ,
        6 => array(1,2,3,4,5),
        1 => function (){
            echo 'sallam in function ';
            return 'return';
        },
        7=> 12 , 
        86 => 33.45,
        "PI" => 3.14,
        "name" => "mohammadalikazemi"


    );
    echo '<pre>';
    // ADD
    $arr[34] = 'end of Array 1';
    $arr[] = 'end of Array 2';
    $arr[123] = 123;
    $arr[] = 'end of Array3';
    $arr['age'] = 21;
    $arr['e'] = 'e';

    // DELETE
    unset($arr[0]);
    unset($arr['PI']);

    print_r($arr);
    echo  $arr[1]()  . "\n next Line";
    echo '</pre>';

    echo "<pre>//////////////////////\n";
    $a = array (10,20,15,14,18,22,36);
    echo "count(a) =" . count($a);
    echo "\nsum(a) =" . array_sum($a);
    echo '/<pre>';
