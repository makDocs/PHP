<?php

function print_var($var_name) {

    global $$var_name;
    echo '<p>$' . $var_name . ' = ' . $$var_name . '</p>';
}

?>