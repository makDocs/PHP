<?php
include "autoload.php";

$user= new Users();
$car= new Car();

echo $car->model;
echo "</br>";
echo $user->name;
