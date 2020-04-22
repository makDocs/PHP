<?php
$arr = ['string', 12, 33.2, true, 0, 1, [1, 2, 3]];

// print_r($arr);
// echo  $arr[6][0];
// var_dump($arr);

foreach ($arr as $key => $value) {
    if (gettype($value) == 'array') { //is_array($value)
        foreach ($value as $key2 => $value2) {
            echo "($key2 <==> $value2)";
        }
    } else {
        echo "\n" . $key . ' <=> ' . $value . " " ;
    }
    echo  " TYPE =>  " . gettype($value) . " \n ";
}
