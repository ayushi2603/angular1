<form action="success.php">
    <table style="color:white" align="center" bgcolor="gray" width="50%" border="1">
<tr>
    <th colspan="2" bgcolor="tomato"> Registration Preview </th>
</tr>

<?php
//$uname = $_GET["txtuname"];
//$uname = $_POST["txtuname"];
$uname = $_REQUEST["username"];
$upass = $_REQUEST["userpass"];
$uemail= $_REQUEST["email"];
$umobile= $_REQUEST["txmobile"];
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


echo "<Tr><td> Username : </td><td>". $uname . "</td></tr>";
echo "<Tr><td> Userpassword : </td><td>". $upass . "</td></tr>";
echo "<Tr><td> EmailId: </td><td>". $uemail . "</td></tr>";
echo "<Tr><td> Mobile: </td><td>". $umobile . "</td></tr>";
echo "<Tr><td> Usergender : </td><td>". $gender . "</td></tr>";
echo "<Tr><td> Usereducation : </td><td>". $uedu . "</td></tr>";
echo "<Tr><td> Userdob : </td><td>". $udob . "</td></tr>";
echo "<Tr><td> Usercountry : </td><td>". $ucountry . "</td></tr>";
echo "<Tr><td> Userhobbies : </td><td>". $uhobby. "</td></tr>";

?>
</table>
</form>