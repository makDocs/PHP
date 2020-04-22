<?php

function autoload_MAK($classname){
    $path = "classes/" . $classname . '.php';
    echo $path . '<br>';
    
    if(is_readable($path)){
        require_once ($path);
    }else{
        echo "No Class";
    }
}

spl_autoload_register("autoload_MAK");