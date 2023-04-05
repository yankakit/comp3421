<?php
session_start();
setcookie('loggedin', '', time() - 3600); // delete the cookie
session_destroy();
header("Location: ../login.php"); // redirect to login page
exit;
?>