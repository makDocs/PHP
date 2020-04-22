<?php

$arr1 =array(
    0=>1,
    "a"=>'salam',
    2=>22,
    3=>'bye',
    "4"=>true,
    "array"=>array(1,23,4,[5,67,2]),
    6=>[1,34],
    "PI"=>3.14

);
$arr2 = array(
    0=>123,
    11=>'salam',
    2=>12.42,
    32=>NULL,
    84=>'123'
);

echo '<pre>';

echo "array_keys arr1";
var_dump(array_keys($arr1));// array

echo "\n\n array_values arr1 ";
var_dump(array_values($arr1));
// echo gettype(array(1));
 
///////SEARCH/////////
echo "///////SEARCH/////////\n";
// print_r($arr1);
// $index = array_search(999,$arr1) ;
// // Bug
// if($index !=false){
//     echo 'index is = ' . $index . '<br>value ';
//     echo $arr1[$index] ;
// }else{
//     echo 'Not Found';
// }
//
$index = array_search('123',$arr2,1) ;
if($index !== false){
    echo 'index is = ' . $index . '<br>value ';//84
    echo $arr2[$index] ;
}else{
    echo 'Not Found';
}
////////SORT//////////
echo "\n////////SORT////////// \n";
ksort($arr2);
print_r($arr2);


echo '</pre>';
