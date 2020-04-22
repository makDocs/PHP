<?php
$a = array(10,20,30);

//$b = array(10,20,30);
$b[] = 10;
$b[] = 20;
$b[] = 30;
echo '<pre>';
echo '$a = ';
var_dump($a);
echo '<br>';
echo '$b = ';
var_dump($b);
echo '<br>';
echo '$a == $b =>';
var_dump($a == $b);
echo '<br>';
echo '$a != $b =>';
var_dump($a != $b);
echo '<br>';
echo '$a === $b =>';
var_dump($a === $b);
echo '<br>';
echo '$a !== $b =>';
var_dump($a !== $b);
echo '<br>';
echo '</pre>';

echo "<pre>////////////////////</pre>";

$a = array(10,20,30);

$b = array(
    1 => 20,
    0 => 10,
    2 => 30,
);

echo '$a == $b =>';
var_dump($a == $b);
echo '<br>';

echo '$a === $b =>';
var_dump($a === $b);
echo '<br>';
?>