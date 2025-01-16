<?php
function fun1(){
    // fun2(); this is not possible becoz it runs infinite times 

    echo "<h1>hey from fun 1 </h1><br>";
}  
 fun1();

 function fun2()
 {
    fun1();
    echo "funtion inside function ";
 }
 fun2();
?>