<?php
function f1()
{
    echo "hey from f1<br>";
}

$a="f1";

function f2($b)
{
    echo $b();
}

f2($a);

?>