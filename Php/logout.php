<?php
session_start();
session_destroy();
$msg = "Successfully Logout, To browse login again";
header('Location: http://localhost/infoway20/home.php?erromsg='.$msg);
?>