<?php
class Constructordemo{
    public $a=10;
    function __construct($abc){
        $this->a=20;
        echo $abc;
        echo"<br>";
        echo"this fun gets called when you create any object of this calss";
       echo $this->a;
       
    }
}



$obj1=new Constructordemo("what ever we send here we can get this in construct params");


?>