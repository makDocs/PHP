<?php
$a = '1337e0' ;


echo '$a = ' . $a . '<br>';

echo 'isset = ' . isset($a) . '<br>';
echo 'empty = ' . empty($a) . '<br>';
echo 'is_int = ' . is_int($a) . '<br>';
echo 'is_float = ' . is_float($a) . '<br>';
echo 'is_numeric = ' . is_numeric($a) . '<br>';
/*
is_numeric
    فقط عدد
    42 or "42" or "123e0'
*/
echo 'is_string = ' . is_string($a) . '<br>';
echo 'is_array = ' . is_array($a) . '<br>';
echo 'is_bool = ' . is_bool($a) . '<br>';
echo 'is_null = ' . is_null($a) . '<br>';


$a = 'NULL';
$condition = is_null($a);
if(  $condition  ){
    echo "That is True condition";
}else{
    echo "That is False condition";
}

?>