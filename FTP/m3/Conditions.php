<?php
    $d = date('N'); //1 => Monday , 7 => Sunday
    $today = '';

    switch($d) {
        case 1:
            $today = 'Monday';
            break;
        case 2:
            $today = 'Tuesday';   
            break;
        case 3:
            $today = 'Wednesday';   
            break;
        case 4:
            $today = 'Thursday';   
            break;
        case 5:
            $today = 'Friday';   
            break;  
        case 6:
            $today = 'Saturday';   
            break;
        /*
        case 7:
            $today = 'Sunday';   
        */
        default:
            $today = 'Sunday';                        


    }

    echo "<h1>$today</h1>";



    //////////////
    //  ???

    $age = 18.5;

    $result = ( $age > 18 ) ? 'Votable' : 'Too young';

    echo $result;



?>