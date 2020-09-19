<?php

function grosssal($basicsal){

    $hra = $basicsal*0.14;
    $ta = $basicsal*0.22;
    $da = $basicsal*0.26;
    echo "Salary : " . $basicsal . "<Br/>";
    echo "TA : " . $ta . "<Br/>";
    echo "DA : " . $da . "<Br/>";
    echo "HRA : " . $hra . "<Br/>";

    return ($basicsal + $hra + $ta + $da);
}
$salary = 10000;
echo "Gross Salary for ". $salary . " is " . grosssal($salary);


?>