<?php
class MathOprations{

    function add($a,$b){
        echo $a+$b;
    }

    function sub($a,$b){
        echo $a-$b;
    }
    function mul($a,$b){
        echo $a*$b;
    }
}
$math=new MathOprations();
echo $math->add(10,10);
echo"<br>";
echo $math->sub(10,10);
echo"<br>";
echo $math->mul(10,10);
echo"<br>";


?>