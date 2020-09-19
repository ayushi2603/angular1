<?php
session_start();
$uname = "Guest";
if(isset($_SESSION["sname"])){
    $uname = $_SESSION["sname"];
}
echo "Welcome $uname , ";
?>