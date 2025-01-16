<?php
// fun1()  this will work properly
function fun1(){
echo "fun1 is called <br>";
// fun2(); this will not work 
    function fun2()
    {
 echo "fun2 is called <br>";
    }
fun2();
echo "but after this <br>";

}
fun1();
fun2();


?>