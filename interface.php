<?php
interface  ProductionFeatures{

     function productDetails();

     function productFeatures();
}
class Product1 implements ProductionFeatures{
    function productDetails(){
       echo"price 4000, height 5ft <br>";
   
    }
    function productFeatures(){
       echo"ram 10gb camera 5 and many more";
       
    }
   
   
   }
class Product2 extends Product1{


}
$obj1=new Product1();
$obj1->productDetails();
$obj1->productFeatures();
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

$obj2=new Product2();
$obj2->productDetails();
$obj2->productFeatures();
echo"<br>";

?>