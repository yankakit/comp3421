<?php 
session_start();
require 'PHPutility/config.php';
require 'PHPutility/nav.php';
require 'PHPutility/linkcss.php';
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/profile.css">
    <script src="myscripts.js"></script>
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
                <p>Address: </p>
                <a href="#">Change Personal Info</a>
                <br><br>
                <a href="#">Change Password</a>
            </div>
            <div class="order">
                <h3>Order Tracking</h3>
                <h10>Total Order: 5</h10>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Order ID</th>
                        <th scope="col">Order Time</th>
                        <th scope="col">Payment Amount</th>
                        <th scope="col">Payment method</th>
                        <th scope="col">Products</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>