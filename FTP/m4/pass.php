<?php

$source = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ[]/.*&^$@!#><"%~;|';

$pass = substr( str_shuffle($source) , 0, 12);
// echo str_shuffle($source);

echo 'Random Password is : ' . $pass;



?>