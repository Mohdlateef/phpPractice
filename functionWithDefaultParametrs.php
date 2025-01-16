<?php
function fruit ($name, $sec="a")
{
    echo "$name $sec<br>";
}

fruit("lateef","b");
fruit("umer");

function f1($a=10,$b)
{
    echo $a+$b;
}
f1(20,10);
?>