
<?php
$a = 10;
$b = 20;
$A1 = calcArea($a,$b);
$A2 = calcArea($a);
$A3 = calcArea();

print_var('A1');
print_var('A2');
print_var('A3');


function print_var($var_name) {

    global $$var_name;
    echo '<p>$' . $var_name . ' = ' . $$var_name . '</p>';
}

function calcArea($w = 1 , $h = null) {

    if (is_null($h)) {

        $h = $w;

    }


    return $w * $h;

}

?>