<?php

function check_existance($file) {

    $type = 'File';

    if ( is_dir($file) ) {

        $type = 'Directory';
    }

    if ( file_exists($file) ) {

        echo "$type $file <span style='color:#0f0;'>Exists.</span><br>";

        $size = filesize($file);
        echo "$type Size : $size byte(s) <br>";

        if( is_readable($file) ) {

            echo "The $type is readable. <br>";
        } else {

            echo "The $type is not readable. <br>";
        }
        if( is_writable($file) ) {

            echo "The $type is writable. <br>";
        } else {

            echo "The $type is not writable. <br>";
        }
            // echo 'hast';??

    } else {

        echo "$type $file <span style='color:#f00;'>does not Exists.</span><br>";

    }

}

$dir = '/opt/lampp/htdocs/PHP/m6'  . DIRECTORY_SEPARATOR;
$file1 = $dir . 'myFile.txt';
$file2 = $dir . 'demo.txt';

//check_existance($dir);
check_existance($file1);
check_existance($file2);
echo '<pre>';
echo '</pre>';

?>