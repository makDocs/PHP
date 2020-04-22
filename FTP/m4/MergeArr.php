<?php

$a = array(1,3,5,7,9,11);

$b = array(2,4,6,8,10,12,14,16,18);

$c = $a + $b;
$d = $b + $a;
$e = array_merge($a,$b);
$f = array_merge($b,$a);

echo '<pre>';

echo '$a = ';
print_r($a);
echo '$b = ';
print_r($b);
echo '$a + $b = ';
print_r($c);
echo '$b + $a = ';
print_r($d);
echo 'array_merge($a,$b) = ';
print_r($e);
echo 'array_merge($b,$a) = ';
print_r($f);
echo '</pre>';

////////////////
echo "////////////////////////////////////////////////";
// OverWrite


$a = array(

    'URL' => 'https://microsoft.com',
    'Name' => 'Bill Gates',
    'Email' => 'bill@msn.com'
);

$b = array(
    'URL' => 'https://www.php.net',
    'username' => 'admin'
);

//$c = $a + $b;
$c = array_merge($b,$a);
echo '<pre>';
echo '$a + $b = ';
print_r($c);
echo '</pre>';




?>