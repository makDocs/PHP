<?php

echo '<pre>';
$x = 33;
$y = 32;

function variableGlobalFunction (){
    global $x,$y;
    echo "$x  ,  $y \n";
    echo $GLOBALS['x'] . '  ' . $GLOBALS['y'] . "\n";

    $GLOBALS['c'] = $GLOBALS['x'] + $GLOBALS['y'];
}

variableGlobalFunction();
echo $c;


// $_REQUEST['name'];

echo '</pre>';
