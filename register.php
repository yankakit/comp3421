<?php
require_once('PHPutility/config.php');

if(isset($_POST['register'])) {
    // get input values from form
    $customerid = $_POST['customerid'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash the password

    // check if user with same login ID or email already exists in database
    $stmt = $db->prepare("SELECT * FROM customer WHERE username = ? OR email = ?");
    $stmt->execute([$customerid, $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user) {
        // user already exists
        $msg = "User with same login ID or email already exists.";
    } else {
        // insert new user into database
        $stmt = $db->prepare("INSERT INTO customer (username, nickname, email, passwd) VALUES (?, ?, ?, ?)");
        $stmt->execute([$customerid, $nickname, $email, $password]);
        $msg = "User registered successfully. Please <a href='login.php'>login</a> to continue.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/common.css">
    <?php require 'PHPutility/linkcss.php'?>
</head>
<body>
<?php require 'PHPutility/nav.php'; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">User Registration</div>

                <div class="card-body">
                    <?php if(isset($msg)) { ?>
                    <div class="alert alert-<?php echo $user ? 'danger' : 'success'; ?>" role="alert">
                        <?php echo $msg; ?>
                    </div>
                    <?php } ?>

                    <form method="POST" action="register.php">
                        <div class="form-group">
                            <label for="customerid">Login ID</label>
                            <input type="text" class="form-control" name="customerid" required>
                        </div>

                        <div class="form-group">
                            <label for="nickname">Nick Name</label>
                            <input type="text" class="form-control" name="nickname" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <button type="submit" name="register" class="btn btn-primary">Register</button>
                    </form>

                    <div class="mt-3">
                        Already have an account? <a href="login.php">Login here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
