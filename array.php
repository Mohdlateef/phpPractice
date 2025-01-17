<?php
$arr=["apple",10,"mango",11];

for($i=0;$i<count($arr);$i++)
{
    echo $arr[$i];
    echo "<br>";

}
$users=["user1",23,true,"user2",23,true,"user4",24,false];
foreach($users as $x)
{
  echo $x;
  if($x===true)
  {
    echo "<br>";
  }
}

?>