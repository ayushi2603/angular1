<?php include "conn.php" ?>
<?php
session_start();
$uid = $_SESSION["sid"];
$sql  = "delete from userlogin where userid = $uid";
//echo $sql;
if (mysqli_query($conn,$sql)){
    echo "You have unsubscribed our services, If you want to subscribe again click on 
    <a href='register.htm'> Subscribe </a>";
}

mysqli_close($conn);
?>