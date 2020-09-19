<h1>PHP Introduction</h1>
<?php
/*echo "hello to PHP world";
echo "<hr color='blue'/>";*/
/*$fact=1;
$n=5;
for($i=1;$i<=$n;$i++)
{
    $fact*=$i;
}
echo "factorial is".$fact;*/
$n1=12;
$flag=1;
for($i=2;$i<$n1;$i++)
{
    if($n1%$i==0){
    
        $flag=0;

    }
}
if($flag==0) {
echo "it is  not prime" ;
}
else
{
    echo "it is prime"; 
}



?>