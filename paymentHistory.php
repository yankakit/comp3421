<?php
session_start();
require 'PHPutility/config.php';
    // Get the customer's orders from the database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping History</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/paymentRecord.css">
</head>
<body>
<?php require 'PHPutility/nav.php'; ?>
<?php require 'PHPutility/offcanvas.php'; ?>
<?php require 'PHPutility/linkcss.php'; ?>

<div class="content">
    <div class="subcontent">
        <?php if(isset($_GET["record"])){ 
                $sql="SELECT * FROM `order` WHERE order_id={$_GET["record"]}";
                $result=$db->query($sql);
                $row=$result->fetch(PDO::FETCH_ASSOC);
            ?>
            <div class="uinfo">
                <h1><?php echo "#".$row["order_id"]; ?></h1>
                <p>Payment Date: <?php echo $row["order_date"]; ?> </p>
                <p>Total Price: <?php echo $row["total_amount"]; ?> </p>
                <p>Address: <?php echo $row["address"]; ?> </p>
            </div>
        <?php 
            $sql="SELECT a.quantity,a.size_id,b.product_name,b.price,b.image FROM order_detail a INNER JOIN product b ON a.product_id=b.product_id WHERE a.order_id={$_GET["record"]}";
            $result=$db->query($sql);
            echo "<h2>Products:</h2>";
            while($row=$result->fetch(PDO::FETCH_ASSOC)){
                echo "<li class=\"list-group-item d-flex justify-content-between align-items-center historyGroup\">
                    <div class=\"productItemInfo\">
                        <h5>{$row['product_name']}</h5>
                        <p>size: {$row["size_id"]}</p>
                        <p>quantity: {$row["quantity"]}</p>
                        <p>Price:{$row['price']}</p>
                    </div>
                    <img src=\"{$row['image']}\" width=\"100px\">
                </li>";
            }
        ?>
        </div>
        <?php }?>

</div>
    
    
</body>
</html>