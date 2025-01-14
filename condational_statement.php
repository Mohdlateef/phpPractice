<?php
$a=10;
$b=20;

if($a == $b)
{
    echo("a is equal to b");
}
else if($a > $b)
{
    echo "a is greater than b";
}
else {
    echo "a is less than b";
}
//same in switch;
switch (true) { // Use 'true' to evaluate conditions
    case ($a == $b):
        echo "a is equal to b";
        break;
    case ($a > $b):
        echo "a is greater than b";
        break;
    case ($a < $b):
        echo "a is less than b";
        break;
    default:
        echo "Unexpected case";
}
?>