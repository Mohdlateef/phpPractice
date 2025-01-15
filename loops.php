<?php
$num=10;
for($i=0;$i<=10;$i++)//for loop;
{
    echo $i;
    echo "<br>";
}
echo "break <br>";
 //break
 for($i=0;$i<=10;$i++)
{
    if($i==4)
    {
        break;
    }
    echo $i;
    echo "<br>";
}
//continue
echo "continue <br>";

for($i=0;$i<=10;$i++)
{
    if($i==3)
    continue;
    echo $i;
    echo "<br>";
}

echo "nested loop <br>";

for ($i=0;$i<=10;$i++)
{
    for($j=0;$j<=$i;$j++)
    {
        echo $j;

    }
    echo "<br>";
}


echo "while <br>";
while($num>0)
{
    echo $num;
    $num--;
    echo "<br>";
}

echo "do while <br>";

do{
    echo"do runs atleast once if the condition is false <br>";
    $num++;
}while($num==13);


?>

