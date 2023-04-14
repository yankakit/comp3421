<?php
require_once('PHPutility/config.php');
session_start();

// Check if user is already logged in
if(isset($_COOKIE['loggedin'])) {
    $customerid = $_COOKIE['loggedin'];
    
    // Retrieve user information from database
    $stmt = $db->prepare("SELECT * FROM customer WHERE username = ?");
    $stmt->execute([$customerid]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user) {
        $_SESSION["user_id"]=$user["customer_id"];
        $_SESSION["username"]=$user["username"];
        $_SESSION["email"]=$user["email"];
        $_SESSION["nickname"]=$user["nickname"];
        if(isset($_COOKIE["product"])) $_SESSION["product"]=$_COOKIE["product"];
        header("Location: index.php");
        exit;
    }
}
if(isset($_POST['login'])) {
    // get input values from form
    $customerid = $_POST['customerid'];
    $password = $_POST['password'];

    // retrieve user from database based on login ID
    $stmt = $db->prepare("SELECT * FROM customer WHERE username = ?");
    $stmt->execute([$customerid]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user) {
        // verify password
        if(password_verify($password, $user['passwd'])) {
            // password is correct, set cookie and redirect to home.php
            setcookie('loggedin', $user['username'], time()+3600);
            $_SESSION["user_id"]=$user["customer_id"];
            $_SESSION["username"]=$user["username"];
            $_SESSION["email"]=$user["email"];
            $_SESSION["nickname"]=$user["nickname"];
            header('Location: index.php');
            exit;
        } else {
            // password is incorrect
            $msg = "Incorrect password.";
        }
    } else {
        // user not found
        $msg = "User with login ID '$customerid' not found.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
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
                <div class="card-header">User Login</div>

                <div class="card-body">
                    <?php if(isset($msg)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $msg; ?>
                    </div>
                    <?php } ?>

                    <form method="POST" action="login.php">
                        <div class="form-group">
                            <label for="customerid">Login ID</label>
                            <input type="text" class="form-control" name="customerid" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </form>

                    <div class="mt-3">
                        Don't have an account? <a href="register.php">Register here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
