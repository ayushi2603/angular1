<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection has problems ".mysqli_connect_error());
}
//echo "connection available";
?>