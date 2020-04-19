<?php

abstract class Shapes{
    abstract protected function getColor();
    abstract protected function SetColor($a);
    // abstract protected function SetDimensions();
    public function describe()
    {
        return 'This Shapes is "' . $this->getColor() . "' And " . get_class($this);
    }
}
class Triangle extends Shapes {
    private $color = null;
    public function getColor()
    {
        return $this->color;
    }
    public function SetColor($color)    
    {
        $this->color = $color;
    }
}

$triangle = new Triangle();
$triangle->SetColor('red');
echo $triangle->describe();
