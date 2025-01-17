<?php
$arr=["ele1","ele2","ele3","ele4"];

print_r( $arr);
echo "<br>";

array_push($arr,"ele5");
print_r( $arr);
echo "<br>";
array_pop($arr);
print_r( $arr);
echo "<br>";
array_splice($arr,2);
print_r( $arr);
echo "<br>";
?>