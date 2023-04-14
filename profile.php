<?php 
session_start();
require 'PHPutility/config.php';

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/profile.css">
    <script src="myscripts.js"></script>
    <?php 
        require 'PHPutility/nav.php';
        require 'PHPutility/offcanvas.php';
        require 'PHPutility/linkcss.php';
    ?>
</head>
<html>
<body>
    <div class="content">
        <div class="subcontent mx-auto">
            <div class="uinfo">
                <h3>Personal Information</h3>
                <p>Nickname: <?php echo $_SESSION['nickname'] ?> </p>
                <p>Username: <?php echo $_SESSION['username'] ?> </p>
                <p>Email: <?php echo $_SESSION['email'] ?> </p>
                <p>Address: <?php if(isset($_SESSION['user_address']))echo $_SESSION['user_address'] ?></p>
                <a href="ChangePersonalInform.php">Change Personal Information</a>
                <br><br>
                <a href="ChangePassword.php">Change Password</a>
            </div>
            <div class="order">
                <h3>Order Tracking</h3>
                <br>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Order ID</th>
                        <th scope="col">Order Time</th>
                        <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql="SELECT * FROM `order` WHERE `customer_id`={$_SESSION["user_id"]}";
                            $result=$db->query($sql);
                            $i=1;
                            while($row=$result->fetch(PDO::FETCH_ASSOC)){
                            echo "<tr>
                                <th scope=\"row\">$i</th>
                                <td><a href=\"PaymentHistory.php?record={$row["order_id"]}\">#{$row["order_id"]}</a></td>
                                <td>{$row["order_date"]}</td>
                                <td>{$row["total_amount"]}</td>
                                </tr>";
                                $i++;
                            }
                        ?>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>