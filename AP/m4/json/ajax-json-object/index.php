<?php
class users{
   protected $name="hassan";
    public $family="khosrojerdi";
    public $city="Tehran";
}
$obj=new users();
$json=json_encode($obj);
echo $json;