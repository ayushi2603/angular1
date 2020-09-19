<style>
a{
    color:blue;
    cursor:pointer;
}
</style>
<?php
session_start();
$uname=$upass=$uemail=$umobile = "";
if(isset($_COOKIE["cname"]))
{
        $uname = $_COOKIE["cname"];
}
if(isset($_SESSION["smobile"]))
{
    $umobile = $_SESSION["smobile"];
}
if(isset($_SESSION["semail"]))
{
    $uemail = $_SESSION["semail"];
}
if(isset($_COOKIE["cpass"]))
{
   $upass = $_COOKIE["cpass"];
}

$message = "Dear <B>$uname</b>, <br/> 
you are successfully registered with our website !
your password : <font color='white'> $upass </font> and confirmation 
details you will soon recieve sms on your registered mobile number 
<b>$umobile</b> and confirmation email
on the registered email id: <b>$uemail</b>"; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection has problems ".mysqli_connect_error());
}
//echo "<Br/> Database connected successfully"

$sql = "Insert into userlogin (username,userpass,useremail,usermobile) 
values ('$uname','$upass','$uemail',$umobile)";

//echo "<Br/> $sql";

if(mysqli_query($conn,$sql)){
    echo $message;
}
else
{
    echo "Error while user registration :". mysqli_error($conn);
    echo "<br/> Please click on back and change the username";
    echo "<a onClick='window.history.back()'> Back </a>";
}

mysqli_close($conn);



// echo "<hr color='blue' size='10'/>";
// echo "Go to login page <a href = 'store.php'> Login </a>";

// session_destroy();
// setcookie("cname","",time()-3600);
// setcookie("cpass","",time()-3600);

?>