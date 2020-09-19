
<?php include "conn.php" ?>
<?php
$msg = "";
if(isset($_REQUEST["msg"])){
$msg = $_REQUEST["msg"];
}
?>
<div style="text-align:center;"> <?php echo $msg; ?> </div>
<form name = "frmprofile" action ="update.php">
<table border="1" bgcolor="aqua" align="Center" width="40%">
<tr>
<th colspan="2"> Profile Details </th>
</tr> 
<?php 
session_start();
if (isset($_SESSION["sname"])){
$uname = $_SESSION["sname"];
}
else
{
    $msg = "Session Expired please login again";
    header('Location: http://localhost/infoway20/home.php?erromsg='.$msg);
}
$sql = "select userid,username,userpass,useremail,usermobile from 
userlogin where lower(username) = '$uname'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

        $uid = $row["userid"];
        $_SESSION["sid"] = $uid;
       /* $uname = $row["username"];  
        $upass = $row["userpass"];  
        $uemail = $row["useremail"];  
        $umobile = $row["usermobile"];  
*/
        echo "<tr>";
        echo "<td> userid </td><td>".$row["userid"]."</td></tr>";
        echo "<tr><td> username </td><td> <input type='text' name='username' value=".$row["username"].
     " /></td></tr>";
        echo "<tr><td> userpassword </td><td><input type=password name=userpass value=".$row["userpass"] ." /></td></tr>";
        echo "<tr><td> useremail </td><td><input type=email name=useremail value=".$row["useremail"]. "  /></td></tr>";
        echo "<tr><td> usermobile </td><td><input type=number name=usermobile value=" . $row["usermobile"] ." /></td>";
        echo "</tr>";
    }
}

mysqli_close($conn);
?>
<Tr><td>
<button type="submit"> Update Details </button>
</td>
<Td>
<button type="button" onclick="window.location.assign('delete.php')"> Unsubscribe </button>
</td>
</tr>
</table>
</form>