<?php 
    session_start();
    require_once('config.php');
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        unset($_SESSION['product'][$_POST['index']]); // remove item at index 0
        $_SESSION["product"] = array_values( $_SESSION["product"]);
    }
?>