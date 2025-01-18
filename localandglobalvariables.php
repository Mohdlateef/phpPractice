<?php
$var1="global";

function fun1(){

    $var1="local";
    echo $var1;
}

fun1();
const var2="12";
$var2="33";
echo var2;
echo $var2;
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

define("var3","keh");
//here you can understand global 
// function fun2(){
// define("var3","change value");
// }

// fun2();


function fun3($var2){
    // global $var2;
$var2=1;
    echo $var2;
}
fun3($var2);

echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";


function fun4(){
    global $var2;
    echo $var2;
}
fun4();
?>