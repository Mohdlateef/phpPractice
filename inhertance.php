<?php
class Auth{
    function login($user){
        echo"Details come from $user";
    }
}

class Student extends Auth{

function getHome(){
    echo "student home page";
}

}

class Teacher extends Auth{
    function getHome(){
        echo "student home page";
    }
}


$student1=new Student();
$student1->login("student");
echo "<br>";

$student1->getHome();
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$teacher1=new Teacher();
$teacher1->login("teacher");
echo "<br>";

$teacher1->getHome();





?>