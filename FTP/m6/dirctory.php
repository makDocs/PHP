<?php

/* File Constant */

echo '<pre>__FILE__' . __FILE__  . "<br>";
echo __DIR__  . "<br>";
echo dirname(__FILE__) . "<br>" ;
echo dirname(__DIR__) . "<br>";
echo basename(__FILE__) . "<br>";
echo basename(__DIR__) . "<br>";
echo '<br>';

$myPathInfo1 = pathinfo(__FILE__ , PATHINFO_BASENAME);
echo $myPathInfo1  . "<br>";

$myPathInfo = pathinfo(__FILE__);
print_r($myPathInfo);
echo '<br>';
echo $myPathInfo['extension'];


echo '</pre>';


/*
pathinfo(path, options)


*/
?>