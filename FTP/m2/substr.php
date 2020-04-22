<?php
$txt = 'Welcome to PHP Programming Course!';

$txt2 = substr($txt,5,4);//start  to final txt
echo '<h1>substr($txt,5,4) '. $txt2 . '</h1>';

$txt3 = substr($txt,5); //be bad
echo '<h1>'. $txt3 . '</h1>';

$txt4 = substr($txt,5,-5);
echo '<h1>'. $txt4 . '</h1>';

$txt5 = substr($txt,5,0);
echo '<h1>'. $txt5 . '</h1>';

?>