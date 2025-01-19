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
?>