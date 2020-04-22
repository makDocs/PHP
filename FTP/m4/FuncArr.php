<?php
$a = array(
    'A' => 70,
    'B' => 77,
    'e' => 2.71,
    'pi' => 3.14,
    'sqrt(-1)' => 'i',
    1 => 'One'
);

$myKeys = array_keys($a);
$myValues = array_values($a);

echo '<pre>';

echo 'isset($a[A]) = ';
var_dump(isset($a['A']));

echo 'array_key_exists(A,$a) = ';
var_dump(array_key_exists('A',$a));

echo 'array_key_exists(a,$a) = ';
var_dump(array_key_exists('a',$a));


echo '$myKeys = ';
print_r($myKeys);
echo '$myValues = ';
print_r($myValues);

echo '</pre>';
echo '////////////';


$cars = array(
    4=>'7',
    0=>"BMW",
    1=>"BENZ",
    2=>'volvo',
    3=>'scania',
    5=>7
);

$index = array_search(7,$cars,true); // strict

echo '<pre>';
var_dump($cars);

echo '$index = ' . $index;

if ( $index !== false ) {
    echo '<h1>Found!</h1>';
} else {
    echo '<h1>Not Found!</h1>';
}


echo '</pre>';

?>