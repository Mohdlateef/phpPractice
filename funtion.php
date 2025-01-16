<?php
function fun1(){
    // fun2(); this is not possible becoz it runs infinite times 

    echo "<h1>hey from fun 1 </h1><br>";
}  
 fun1();

 function fun2()
 {
    fun1();
    echo "funtion inside function <br>";
 }
 fun2();

 function fun3($name,$roll,$sec)
 {
    echo "$name,$roll,$sec <br>";
 }

 fun3("lateef",11,"a");
 fun3("umer",12,"a");
 
 function fun4()
 {
    return "hey are you there";
 }
 $fundata=fun4();
echo "$fundata";


?>