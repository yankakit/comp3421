<?php
session_start();
session_destroy();
setcookie('loggedin', '', time() - 3600,"/Group-Project"); // delete the cookie
header("Location: ../index.php"); // redirect to login page
exit;
?>