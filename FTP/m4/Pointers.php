<?php
//Pointers in Array

$a = array(3,5,7,12,17,20,22,50);

echo '<pre>';

echo 'current = ' . current($a);

echo '<br>';

while ( ($item=current($a)) !== false ) {

    echo $item;
    echo '<br>';
    next($a);

}

echo '<br>';

echo 'current = ' . current($a) . '<br>';

reset($a);

echo 'current after reset = ' . current($a) . '<br>';

while ( current($a) !== false ) {

    echo key($a) . ' => ' . current($a);
    echo '<br>';
    next($a);

}

echo '<br>';

echo 'current = ' . current($a) . '<br>';

end($a);

echo 'current after end = ' . current($a) . '<br>';

while ( current($a) !== false ) {

    echo key($a) . ' => ' . current($a);
    echo '<br>';
    prev($a);

}
echo '</pre>';

?>