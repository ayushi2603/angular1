<?php

$str="Hello Ayushi";
$str1="Malyaylam";
echo "length of string: " .strlen($str);
echo "</br>reverse of string: " .strrev($str);
echo "</br> word count: " .str_word_count($str);
echo $str1==strrev($str1)?"palindrom ":"not palindrom";



?>