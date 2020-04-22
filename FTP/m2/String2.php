<?php
$txt = 'welcome to php programming course!';
// for($i=0;$i<strlen($txt);$i++){
//     echo "$txt[$i] \n";
// }
$arr = str_split($txt,2);//array
echo '<pre>';
print_r($arr);
echo '</pre>';

/////////////////////

$result = explode(' ', $txt); //string To array


echo '<pre>';

print_r($result);

echo '</pre>';


$arr = array(
    'fname'=>'Mohammad Ali',
    'lname'=>'Kazemi',
    'age'=>21,
    'UNI'=>'Semnan',
    10=>'MAK',
    1=>'text10',
    4=>'text1',
    3=>'text2',

);

var_dump(implode(" ", $arr )); // array To String
/////////////////////////////////////////////////

/*

strcpm

0 => str1 and str2 are equal

> 0  => str1 > str2

< 0  => str1 < str2

*/

echo strcasecmp('hello world!','Hello world!');
echo '<br>';

echo strcmp('Hello world!','Hello');
echo '<br>';

echo strcmp('Hello world!','Hello world! PHP');
echo '<br>';

/////////////////////


echo strstr("Hollo mr Mohammad !" , 'mr');

?>