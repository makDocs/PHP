<?php

$a = array(123=>2,5,17,16,20,25);
//each($a)

// echo each($a);
while ( list($mykey,$myvalue) = each($a) ) {
    echo $mykey . ' => ' . $myvalue . '<br>';


}


?>