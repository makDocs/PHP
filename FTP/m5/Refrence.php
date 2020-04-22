<?php
include_once('./function.php');

$a = 10;
$b = $a;
$c =& $a; //reference 

echo '<pre><p>before:</p>';
print_var('a');
print_var('b');
print_var('c');

$b++;
$c++;
$a++;


echo '<p>after:</p>';
print_var('a');
print_var('b');
print_var('c');

///////////////////
echo "///////////////////////\n";
$a1 = 10;

print_var('a1');

increment($a1);

print_var('a1');

// pass or call by reference
function increment(&$a1) {

        $a1++;
        echo "value after increment : $a1";

}

echo "</pre>";
// for ($i=0; $i <100 ; $i++) { 
//         require_once("./function.php");
// }

?>