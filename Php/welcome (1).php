
<style>
ul{
    list-style:none;

}

li{
    float:right;
}

a{
    padding:10px;
}
</style>

<ul>
<li> <a href="logout.php"> Logout </a> </li> 
<li> <a href = "profile.php"> Profile </a> </li>
</ul>
<?php
session_start();

//$uname = "Guest";
if(isset($_SESSION["sname"])){
    $uname = $_SESSION["sname"];
}
echo "Welcome $uname , ";

?>
