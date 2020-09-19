<form action="success.php">
<table style="color:white" align="center" bgcolor="gray" width="50%" border="1">
<tr>
    <th colspan="2" bgcolor="tomato"> Registration Preview </th>
</tr>

<?php
session_start();
//$uname = $_GET["txtuname"];
//$uname = $_POST["txtuname"];
$uname = $_REQUEST["username"];
$upass = $_REQUEST["userpass"];
$uemail = $_REQUEST["email"];
$umobile = $_REQUEST["txmobile"];
$ugender = isset($_REQUEST["rdogender"])?$_REQUEST["rdogender"]:"";

    if ($ugender=="M"){
    $gender = "Male";
    }
    elseif($ugender=="F")
    {
    $gender = "Female";
    }
    else
    {
    $gender = "No gender set";
    }
    

$ueducation = isset($_REQUEST["chkedu"])?$_REQUEST["chkedu"]:"";
$uedu = "";
foreach($ueducation as $e){
    $uedu .=  $e . ",";
}
$uedu = substr($uedu,0,strlen($uedu)-1);

$udob = isset($_REQUEST["dtdob"])?$_REQUEST["dtdob"]:"";
$ucountry = isset($_REQUEST["selcountry"])?$_REQUEST["selcountry"]:"";
$uhobbies = isset($_REQUEST["selhobbies"])?$_REQUEST["selhobbies"]:"";

$uhobby = "";
foreach($uhobbies as $h){
    $uhobby .=  $h . ",";
}
$uhobby = substr($uhobby,0,strlen($uhobby)-1);

/*$udob = date_create($udob);
$curr_date = date('Y-m-d');
$diff=date_diff($curr_date,$udob);
*/

/* cookies and session */
setcookie("cname",$uname,time()+3600);
setcookie("cpass",$upass,time()+3600);
$_SESSION["smobile"] = $umobile;
$_SESSION["semail"] = $uemail;

echo "<tr><td> Username : </td><td>". $uname . "</td></tr>";
echo "<tr><td> Userpassword : </td><td>". $upass . "</td></tr>";
echo "<tr><td> Useremail : </td><td>". $uemail . "</td></tr>";
echo "<tr><td> Usermobile : </td><td>". $umobile . "</td></tr>";
echo "<tr><td> Usergender : </td><td>". $gender . "</td></tr>";
echo "<tr><td> Usereducation : </td><td>". $uedu . "</td></tr>";
echo "<tr><td> Userdob : </td><td>". $udob . "</td></tr>";
echo "<tr><td> Usercountry : </td><td>". $ucountry . "</td></tr>";
echo "<tr><td> Userhobbies : </td><td>". $uhobby. "</td></tr>";
?>
<tr>
    <td align="right"> <button type="Submit" > Confirm </button> </td>
    <td> <button type="button" onclick="window.history.back()"> Change/Back </button> </td>
</tr>
</table>
</form>