<?php
 final class School{
function f1()
{
    ECHO"from f1 from school";
}


}
$obj1=new School();
$obj1->f1();
// class student extends School{
//     function f2(){
//     echo "it does not possible becoz we are using final keyword";
//     }
// }


class School2{
    
public $a=10;
final function f1()

{
    ECHO"from f1 from school";
}
 }
class student extends School2{
    public $a=20;
    // function f1(){
    // echo "it does not possible becoz we are using final keyword";
    // }
}
?>