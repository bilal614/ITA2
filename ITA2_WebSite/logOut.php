<?php
session_start();
session_destroy();
$_SESSION = Array();//Reinitalize the global section variable
//delete the cookie - implemented latter
header("Location: signIn.php");
?>
