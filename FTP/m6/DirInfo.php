<?php
    function dirInfo($path){
        $dir = dirname($path);
        $handle = opendir($dir);
        // echo $handle . '<br>';

        echo '<pre><h2>Directory Contents:</h2>';
        echo '<ul>';
        while (($item = readdir($handle)) !== false ) {
            if ( in_array($item , array('.','..'))) {
                continue;
            }
            $fullpath = $dir . DIRECTORY_SEPARATOR . $item;
            $type = is_dir($fullpath) ? "Directory" : "File";
            echo "<li><b>$item</b> ($type)</li>";
        }
        echo '</ul></pre>';
        closedir($handle);
    }

    dirInfo(__FILE__);

    ////////////////////////////



    //$files = glob('*.php');
    //$files = glob('*.txt');
    //$files = glob('a*6.*');
    //$files = glob('demo');
    $files = glob('*');

    echo '<pre>';

    var_dump(($files));

    echo '</pre>';

?>
