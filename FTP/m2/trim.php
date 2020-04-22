<?php
$txt = '       Welcome to PHP        ';
echo '<pre>';
echo 'without ltrim: ' . $txt; 
echo '<br>';
echo 'with ltrim: ' . ltrim($txt); 
echo '<br>';
echo 'with rtrim: ' . rtrim($txt); 
echo '<br>';
echo 'with trim1: ' . trim($txt); 
echo '<br>';
$txt = "Hello World";
echo 'with trim2: ' . trim($txt,"Hed"); 
echo '</pre>';


?>