<?php
   require_once('config.php');
// Function to validate cookie and retrieve user information
function validateCookie($db){
 
    
    if(!isset($_COOKIE['loggedin'])) {
        header("Location: ../login.php");
        exit;
    }

    $customerid = $_COOKIE['loggedin'];
    $stmt = $db->prepare("SELECT * FROM econ WHERE customer_id = ?");
    $stmt->execute([$customerid]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$user) {
        header("Location: ../login.php");
        exit;
    }
    
    return $user;
}


?>