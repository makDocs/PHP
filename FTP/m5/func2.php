<?php
/////////GLOBAL////////////
function demo() {
    
    global $x,$y;

    echo "<p> \$x = $x and \$y = $y</p>";

}
echo '<pre>';
$x = 5; //global
$y = 10; //global
demo();

echo "//////////////////////////";

$x1 = 888; //global
$y1 = 1892; //global

function demo2() {
    echo '<p> $x1 = ' . $GLOBALS['x1'] . ' and $y1 = ' . $GLOBALS['y1'] ;
}

demo2();


/////////STATIC///////////

function demoMak() {

    static $x = 0;
    echo $x;
    $x++;

}
demoMak();
echo '<br>';
demoMak();
echo '<br>';
demoMak();
echo '<br>';
demoMak();
echo '<br>';
demoMak();
echo '<br>';

///< EXAMPLE >///

product(5,10);
product(6,11);
product(7,12);
product(8,13); //ok
product(9,14);
product(10,15);

function product($a, $b) {

    static $counter = 0;
    $counter++;

    echo "<p>\$counter = $counter</p>";

    if ($counter > 4) {
        echo '<p style="color:red;">The function call limit exceeded!</p>';
        return;
    }

    $p = $a * $b;
    echo "<p> $a * $b = $p </p>" ;
}

echo '</pre>';
?>