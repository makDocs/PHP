<?php

$a = array (
    1 => 70,
    12 => 80,
    6 => 30,
    9 => 2,
    2 => 9,
    3 => 10,
    0 => 5
);

echo '<pre>';

echo 'Original = ';
print_r($a);

// shuffle($a);
// asort($a); // sortby=>value , order=>low to high, key association=> Yes
// ksort($a); // sortby=>key , order=>low to high, key association=> Yes
// shuffle($a); // sortby=>  , order=> random , key association=> No
natsort($a);


echo 'Sorted = ';
print_r($a);


echo '</pre>';
?>