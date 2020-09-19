<?php include "conn.php" ?>
<?php
session_start();
$uid = $_SESSION["sid"];
$uname = $_REQUEST["username"];
$upass = $_REQUEST["userpass"];
$uemail = $_REQUEST["useremail"];
$umobile = $_REQUEST["usermobile"];
$sql = "update userlogin set username = '$uname', userpass = '$upass', useremail = '$uemail' , 
usermobile = $umobile where userid = $uid";

//echo $sql;

mysqli_query($conn,$sql);

$_SESSION["sname"] = $uname;

header('Location: http://localhost/infoway20/profile.php?msg=user details updated successfully');

mysqli_close($conn);
?>