<?php
$base = 2;

$pmin = 0;
$pmax = 10;

$p = $pmin;

echo '<table border="1">';
echo '<tr><th>power</th><th>' . $base . '^ power</th></tr>';
while ( $p <= $pmax ) {

    echo '<tr>';

    echo '<td>' . $p . '</td>';
    
    echo '<td>' . $base ** $p . '</td>';

    echo '</tr>';

    $p++;

}


echo '</table>';
?>