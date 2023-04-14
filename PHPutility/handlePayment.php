<?php 
session_start();
require_once('config.php');
    $t=time();
    $sql="INSERT INTO `order` (order_date, total_amount,`address`,customer_id) VALUES (NOW(),{$_SESSION["amount"]},{$_POST["address"]},{$_SESSION["user_id"]})";
    $db->exec($sql);
    $last_id = $db->lastInsertId();
    $db->beginTransaction();
    foreach($_SESSION['product'] as $value){
        $svalue=preg_split("/[a-z]+/i", $value);
        $size=preg_replace("/[0-9]+/",'',$value);
        if($size=="XS")$size=1;
        elseif($size=="S")$size=2;
        elseif($size=="M")$size=3;
        elseif ($size="L") $size=4;
        else $size=5;
        $sql="INSERT INTO order_detail (order_id,product_id,quantity,size_id) VALUES ($last_id,$svalue[0],$svalue[1],$size)";
        $db->exec($sql);
        $sql="UPDATE size_product SET quantity=quantity-$svalue[1] WHERE product_id=$svalue[0] AND size_id=$size";
        $db->exec($sql);
    }
    $_SESSION['user_address']=$_POST["address"];
    setcookie("product",json_encode($_SESSION["product"]),time()-3600,"/Group-Project");
    $db->commit();
    unset($_SESSION["product"]);
    header("Location: ../index.php?action=1");
?>