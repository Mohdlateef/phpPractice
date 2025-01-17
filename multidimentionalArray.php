<?php
$arr=[
    [1,"user1","abc@gamil.com"],
    [2,"user2","def@gamil.com"],
    [3,"user3","ghi@gamil.com"],
    [4,"user4","jkl@gamil.com"],
    [5,"user5","mno@gamil.com"]
];

    for($i=0;$i<count($arr);$i++)
    {
        for($j=0;$j<count($arr[$i]);$j++)
        {
            echo $arr[$i][$j];

        }
        echo"<br>";
    }

 //put this data in table in html

 echo "<table border=1>";
 echo "<thead><th>Sno</th>
 <th>name</th>
 <th>email</th>
 </thead>";

 for($i=0;$i<count($arr);$i++)
    {
        echo"<tr>";
        for($j=0;$j<count($arr[$i]);$j++)
        {
            echo "<td>",$arr[$i][$j],"</td>";

        }
        echo"<tr>";

    }

    "</table>";


    //multi dimensational assocative array

    $arr2=[
        ["name"=>"abc","age"=>10,"isactive"=>"ture"],
        ["name"=>"def","age"=>11,"isactive"=>"ture"],
        ["name"=>"ghi","age"=>12,"isactive"=>"ture"],
        ["name"=>"jkl","age"=>13,"isactive"=>"false"]

    ];


    foreach ($arr2 as $x)
    {
        foreach($x as $key=>$data)
        {
            echo $key,":",$data;
        }
        echo"<br>";
    }

?>