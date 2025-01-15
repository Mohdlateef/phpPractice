<?php
$num=11;
echo "befor condition<br>";
if($num==10)
{
    goto jump;
}

$name="abc";
echo $name;
echo"<br>";

jump:
echo "i was jumped here";



?>
