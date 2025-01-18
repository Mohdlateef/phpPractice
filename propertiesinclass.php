<?php
class Properties{
public $name="umer";
function getname(){
echo $this->name;
}
function setname(){
    $this->name="lateef";

}

}

// $name=new Properties();

// $name->name="lateef";
// echo $name->name;

$name=new Properties();
$name->setname();
$name->getname();

?>