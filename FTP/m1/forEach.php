<?php

$array_expression = ['javascript','html','css', 10];
foreach ($array_expression as $key => $value){
    echo $key . '  ' . $value . "\n";
}

echo "\n///////////////////\n\n";

print_r(($array_expression)); // for array

echo "\n///////////////////\n\n";

var_dump($array_expression); //for all
?>