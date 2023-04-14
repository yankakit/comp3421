<?php
session_start();
require 'PHPutility/config.php';
// Get input values from the form


if(isset($_POST['submit'])) {


  // Get input values from the form

  $password = $_POST['password'];

  if (isset($_SESSION['customer_id'])) {
    // Retrieve user information from database
    $stmt = $db->prepare("SELECT * FROM customer WHERE id = ?");
    $stmt->execute([$_SESSION['customer_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
  }

  $sql = "UPDATE customer SET passwd  = :password WHERE username = :username";
  $stmt = $db->prepare($sql);

  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':username', $_SESSION['username']);
  $stmt->execute();
  if ($stmt->execute()) {
    $message = "Information updated successfully!";
  } else {
    $error = "Error updating information: " . $stmt->errorInfo()[2];
  }

  



}





?>

<!DOCTYPE html>
<html>
<head>
  <title>Change Personal Information</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/common.css">
  <style>
    .container {
      margin-top: 50px;
      width:50% !important;

    }
    .form-group {
      width:100% !important;
      margin-bottom: 25px;
    }
    .form{
      width:500px;
      border:6px solid black;
    }
    .error-message {
      color: red;
      margin-top: 10px;
    }
    .success-message {
      color: green;
      margin-top: 10px;
    }

  </style>
</head>
<body>
<?php require 'PHPutility/nav.php'; ?>
<?php require 'PHPutility/announcement.php'; ?>
<?php require 'PHPutility/linkcss.php'; ?>
  <div class="container">
    <h1>Change Personal Information</h1>
    <?php if(isset($error)) { ?>
      <p class="error-message"><?php echo $error; ?></p>
    <?php } ?>
    <?php if(isset($message)) { ?>
      <p class="success-message"><?php echo $message; ?></p>
    <?php } ?>
    <form method="post" action="">
      
      <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" name="password" value="">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Update Information</button>
    </form>
  </div>
    </body>

</html>
