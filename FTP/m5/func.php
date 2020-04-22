<?php
declare(strict_types = 1);// fatal ***
function setDimension(int $minHeight = 50 ,int $minWidth = 100 ) {
    echo "The height is : $minHeight and The height is : $minWidth  <br>";
}
setDimension(350,240);
setDimension(130,120);
setDimension(200);
// setDimension('200');
setDimension(); //Use Default Value
/*
PHP Return Type Declartion
*/

function addNumbers(float $a, float $b) :int {

    return (int)($a + $b);

}
var_dump(addNumbers(1.2,5.3));


////////////

$functionName = 'addNumbers2';
if ( function_exists($functionName) ) {

    echo "<p> function ($functionName) exists. </p>";

} else {

    echo "<p> function ($functionName) does not exists. </p>";

}

///////

$x = 44; //global scope
function demo() {
    $x = 5; //local scope
    echo "<p>variable x inside function is: $x </p>";
}
demo();

echo "<p>variable x outside function is: $x </p>";

echo '</pre>';
?>