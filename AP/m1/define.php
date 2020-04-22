<?php

/*
    Define( name , value , case-Incensitive);

    قابلیت تغییر ندارند
    global هستند

*/

define('NAME','mohmammad ali',true);
echo NAME ; // "mohammad ali"
echo name ; // "mohammad ali" => true 

// for Global Define
function text(){
    echo NAME; // "mohammad ali"
}