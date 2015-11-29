<?php
session_start();
session_destroy();
$_SESSION = Array();//Reinitalize the global section variable
//delete the cookie
header("Location: signIn.php");
?>
