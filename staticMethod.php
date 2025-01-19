<?php
class Student1{
 static $name="lateef";
    static function marks(){
        echo"we can use static functions without creating object of class";
        self::$name = "umer";
    }
}
Student1::marks();
echo"<br>";
echo Student1::$name;


//static binding

class c1{

    static function f1()
    {
    echo "from c1...";
    }
}

class c2 extends c1{

   static function f1()
    {
    echo "from c2";
    }
}
c1::f1();
c2::f1();
?>