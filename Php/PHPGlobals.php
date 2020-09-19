<?php
/* Super Global Variables */
/*
$GLOBALS
$_SERVER
$_REQUEST
$_COOKIE
$_POST
$_GET
$_FILES
$_ENV
$_SESSION
*/
$num1 = 100;
$num2 = 200;

function divisibleby100(){
    $GLOBALS['result'] = $GLOBALS['num2']/$GLOBALS['num1'];
    
}

divisibleby100();
echo $result;

?>