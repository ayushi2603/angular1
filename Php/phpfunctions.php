<?php
/* string functions */
$str1 = "MalayalaM";
$str = "Hello World !!";
echo  $str;
echo "<Br/> Length of string " . strlen($str) ;
echo "<Br/> Count of words " . str_word_count($str) ;
echo "<Br/> Reverse String " . strrev($str) . "<br/>" ;
echo  $str1 == strrev($str1)? "Palindrome" : "not Palindrome";
//echo  $str == strrev($str);
echo "<Br/> Position of World " . strpos($str,"World"); 
echo "<Br/> Replace World with Universe " . str_replace("World","Universe",$str); 
echo "<Br/> uppercase " . strtoupper($str);
echo "<Br/> lowercase " . strtolower($str);
echo "<Br/> trimming of spaces " . strlen(trim($str));
echo "<Br/> Repeat string " . str_repeat("Good Morning,", 2);
//echo "<Br/> string split " . 
//print_r(str_split("Banana,Kiwi,Grapes",3));
echo "<Br/> Find string inside string " . strchr($str,"World");
echo "<Br/> compare string inside string " . strcmp("MalayalaM",$str);
echo "<Br/> string slicing using substr " . substr($str,4,6);

/* Math Functions */
echo "<Br/> PI : ". pi() ;
echo "<Br/> Minimum Value: ". min(18,30,15,20,29,13,12,80,60) ;
echo "<Br/> Minimum Value: ". max(10,30,15,20,29,13,12,80,60) ;
echo "<Br/> Absolute Value: ". abs(min(10,-30,15,20,29,13,12,80,60));
echo "<Br/> Square root of 16: ". sqrt(16);
echo "<Br/> Round upto 2 decimals: ". round(16.34949,2);
echo "<Br/> Round up: ". round(16.5);
echo "<Br/> Round down: ". round(16.3);
echo "<BR/> Random number: " . rand(10,100);
echo "<Br/>" . is_int(10);
$x = "10"
$x = int($x);












?>
