<?php
$txt1 = 'Welcome to PHP ! PHP!';
echo '<p>Original Text : ' . $txt1 . '</p>';
echo '<p>Lower Text : ' . strtolower($txt1) . '</p>';
echo '<p>Upper Text : ' . strtoupper($txt1) . '</p>';
echo '<p>Reverse Text : ' . strrev($txt1) . '</p>';
echo '<p>Word Count : ' . str_word_count($txt1) . '</p>';//4

//$txt6 = str_replace('php','ASP.net',$txt1);
$txt6 = str_ireplace('pHp','ASP.net',$txt1); 
/*
    i => case-insensetive
    harchi peyda kard Change mikone
*/
echo '<p>Replace Text : ' . $txt6 . '</p>';

$pos1 = stripos($txt1, 'To'); //i => case-insensetive
if ( $pos1 === false ) {
    $pos1 = 'Not Found';
}
echo '<h1>Position of "to" : ' . $pos1 . '</h1>';

$pos2 = strpos($txt1, 'php');
if ( $pos2 === false ) {
    $pos2 = 'Not Found';
}
echo '<h1>Position of "asp" : ' . $pos2 . '</h1>';//Not Found


?>