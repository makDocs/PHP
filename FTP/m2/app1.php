<?php

$str = 'Welcome to PHP Programming Course!';

$first = strpos($str, ' ');
$second = strpos($str, ' ', $first + 1);//from first+1 to end

$start = $first + 1;
$length = $second - $first - 1;
$word = substr($str, $start, $length);

echo '<p>'.$str.'</p>';
echo 'First: '.$first;
echo '<br/>';
echo 'Second: '.$second;
echo '<br/>';
echo 'Word: '.$word;
echo '<br/>';



?>