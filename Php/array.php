<?php
/*$chocolate_price= array("coffee bite"=>1,"ferrraho"=>180);
$chocolate_price["dairy milk"]=125;
$chocolate_price["kitkat"]=110;


krsort($chocolate_price);
foreach($chocolate_price as $name => $price)
{
    echo "</br>" .$name. " cost:" .$price. "Rs";
}*/
$state= array(" MadhyaP</br>","UttarP</br>","Maharashtra</br>","CentralG</br>","Kerala</br>","Rajasthan</br>");

sort($state);
print_r ($state);

echo"</br>";
echo $str="I am happy with PHP";
echo "</br>reverse of this is:</br>" .strrev($str);
echo"</br>";
$course_name=array("java"=>12000,"php"=>30000);
$course_name["c"]=22000;
$course_name["c++"]=24000;
$course_name["angular"]=20000;
foreach($course_name as $name=>$fees)
{
    echo "</br>" .$name."fees".$fees."Rs";
}



?>