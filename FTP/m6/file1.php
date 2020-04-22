<?php



function makedir($dir) {

    if ( !file_exists($dir) ) {

        mkdir($dir, 0777,true);
        
        echo "$dir <span style='color:#0f0'>Created!</span> <br>";


    } else {

        echo "$dir <span style='color:#f00'>Exists!</span> <br>";
    }


}

$path = __DIR__ . DIRECTORY_SEPARATOR;

//$newdir = $path . 'demo';
$newdir = $path . 'demo/1/php/last';

makedir($newdir);

/////////RM//////////

function removedir($dir) {

        if (file_exists($dir)) {

            rmdir($dir);
            echo "$dir <span style='color:#0f0'>Removed!</span> <br>";
        }


}

$path = __DIR__ . DIRECTORY_SEPARATOR;

$olddir = $path . 'demo';

removedir($olddir);

////////////////////



$dir = dirname(__DIR__);

// $files = scandir($dir, SCANDIR_SORT_ASCENDING);
$files = array_diff(scandir($dir),array('.','..'));


echo '<pre>';

echo $dir . '<br>';

print_r($files);

echo '</pre>';
////////////////////////


$dir = dirname(__DIR__);

echo $dir . '<br>';

/********************/

$handle = opendir($dir);

echo $handle . '<br>';

/*********************/

echo readdir($handle) . '<br>';
echo readdir($handle) . '<br>';
echo readdir($handle) . '<br>';
echo readdir($handle) . '<br>';
echo readdir($handle) . '<br>';
echo readdir($handle) . '<br>';

/**********************/

closedir($handle);

?>
