<?php
    $arr = array(1 ,1. ,'ali' , 'NULL' , true ,function(){echo 'sdsd';} , [1,2,3]);


    foreach ($arr as $key => $value) {
        echo $key .'  ' . gettype($value) . "\n";
        if(gettype($value) =='object'){
            $value();
        }
    }
    






?>