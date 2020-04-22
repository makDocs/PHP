<?php

class Student{
    private $a =23;
    private $b =87;

    // Const & Static

    const YEAR = 2020;

    
    public static $stock = 'ali';

    public function average(){
        return ($this->a + $this->b) / 2;
    }
}



$str = new Student();
// echo $str->average()
echo Student::YEAR;
echo Student::$stock;

?>