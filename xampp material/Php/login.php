<?php
session_start();
$uname = $_REQUEST["username"];
$uname = strtolower($uname);
$upass = $_REQUEST["userpass"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection has problems ".mysqli_connect_error());
}
//echo "<Br/> Database connected successfully"

$sql = "select count(*) as isuserexists from 
userlogin where lower(username) = '$uname' and userpass='$upass'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        if($row["isuserexists"]==1)
        {
            $_SESSION["sname"] = $uname;
            header('Location: http://localhost/xampp material/Php/welcome.php');
        }
        else
        {
            $msg = "Wrong userid and password";
            header('Location: http://localhost/infoway20/home.php?erromsg='.$msg."&username=".$uname);

        }
    }
}

//echo "<Br/> $sql";


mysqli_close($conn);
?>