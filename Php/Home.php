<?php
$error_msg = "";
$uname = "";
if(isset($_REQUEST["erromsg"])){
    $error_msg = $_REQUEST["erromsg"];
}
if(isset($_REQUEST["username"])){
    $uname = $_REQUEST["username"];
}
?>
<div style="text-align:center;
padding:10px;background-color: brown; color:white;border:1px solid red">
<div style="background-color:red;color:white;"><?php echo $error_msg; ?></div>
    <form name="frmlogin" action="login.php">
    <div style="padding:10px;">
    <label> username : </label>
    <input type="text" name="username" value="<?php echo $uname; ?>" />
    </div>
    <div style="padding:10px;">
        <label> userpass : </label>
        <input type="password" name="userpass" />
    </div>
    <div style="padding:10px;">
        <button type="submit"> Login </button>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="register1.html">New User?</a>
    </div>
    
</form>
</div>