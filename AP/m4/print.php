<?php

$req = $_REQUEST['req'];
$num1 = $_REQUEST['n1'];
$num2 = $_REQUEST['n2'];
// echo $num1 . $req . $num2;
echo "<pre>$num1 $req $num2 = ";
switch($req){
    case '/':
        echo $num1 / $num2;
        break; 
    case '*':
        echo $num1 * $num2;
        break; 
    case '-':
        echo $num1 - $num2;
        break; 
    default :
        echo $num1 + $num2; 
}

echo "</pre>";

