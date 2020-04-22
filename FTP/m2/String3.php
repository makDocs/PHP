<?php

$n = 10;
$char = 50;

printf('The number is: %d', $n);
echo '<br>';
printf('The number is: %f', $n);
echo '<br>';
printf('The number is: %b', $n);
echo '<br>';
printf('The number is: %x', $n);
echo '<br>';
printf('The number is: %c', $char);
echo '<br>';


$txt = sprintf('The number is: %f', $n);
var_dump($txt);


/////////////////////////////////////////////////
echo "<pre> \n \n \n \n </pre>";
date_default_timezone_set('Asia/Tehran');


echo date('h:i:sa');
echo '<br>';
$hour = date('H');
// echo $hour;

if ( $hour > 4 && $hour <= 10 ) {
    echo 'Good morning';
}
if ( $hour > 10 && $hour <= 14 ) {
    echo 'Nice day! ';
}
if ( $hour > 14 && $hour <= 17) {
    echo 'Good afternoon!';
}
if ( $hour > 17 && $hour <= 19 ) {
    echo 'Good evening';
}
if ( $hour > 19 && $hour <= 24 ) {
    echo 'Good night!';
}

?>