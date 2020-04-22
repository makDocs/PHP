<?php
    $N = 10000; //tedad partab tas
    $K = 10; //tedade vojoh tas

    $f = array();

    for ( $k = 1 ; $k <= $K ; $k++ ) {

        $f[$k] = 0;

    }

    for ( $i = 0 ; $i < $N ; $i++ ) {

        $r = rand(1,10);
        // echo $r . '<br>';
        $f[$r]++;

    }

    $p = array();

    for ( $k = 1 ; $k <= $K ; $k++ ) {

        $p[$k] = $f[$k] / $N;
        echo '<pre>p' . $k . ' = ' . $p[$k] . '</pre><br>';
    }

    

?>