<?php
$str1 = "sample text \"ABC\" \\ go \\\\ to next line \nABC \t press Tab key \101 \141 \n";
                

echo '<pre>';
echo $str1;
echo '</pre>';

$n = 10;
//Heredoc
$str2 = <<<MYSTR
        Heredoc
        My sample heredoc
        we have single qoute '
        we have double qoute "
        we have one variable
        for example \$n = $n
        asdsa
        asdsad
        <a href="#">sample link</a>
        asd
        ////////////
MYSTR;

echo '<pre>';
echo $str2;
echo '</pre>';

//Nowdoc
$str3 = <<<'MYSTR'
        Nowdoc
        My sample heredoc
        we have single qoute '
        we have double qoute "
        we have one variable
        for example \$n = $n
        <a href="#">sample link</a>
MYSTR;

echo '<pre>';
echo $str3;
echo '</pre>';


?>