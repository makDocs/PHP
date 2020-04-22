<?php 
function DelItem($dir) { 
    $files = array_diff(scandir($dir), array('.','..')); 
    echo "<div><b>". var_dump($files) ."</b></div>";
     foreach ($files as $file) { 
       (is_dir("$dir/$file")) ? DelItem("$dir/$file") : unlink("$dir/$file"); 
     } 
     return rmdir($dir); 
} 
echo '<h2>Directory Delete:</h2>';
$dir= dirname(__DIR__) . DIRECTORY_SEPARATOR .'a' ;
DelItem($dir);
?>