<?php
trait a{
    public function chap()
    {
        echo "hi";
    }
}

class b{
    use a;
}
$b=new b();
echo $b->chap();