<?php
class Example{

    function f1()
    {
        echo "hey from fi from parent";
        echo "<br>";
    }
}

class Child extends Example{
    function f1()
    {
        echo "hey fom child ";
    }
}

$obj=new Example();
$obj->f1();
$obj2=new Child();
$obj2->f1();

?>