<?php 
session_start();
require_once('PHPutility/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<?php require 'PHPutility/linkcss.php'?>
	<!-- Custom CSS -->
	<style>
		.container {
			margin-top: 50px;
		}
		.card-header {
			background-color: #007bff;
			color: #fff;
		}
		.card-body label {
			font-weight: bold;
		}
		.btn-pay {
			background-color: #007bff;
			color: #fff;
			border-radius: 25px;
			padding: 10px 25px;
			font-weight: bold;
			border: none;
			box-shadow: none;
			transition: all 0.3s ease;
		}
		.btn-pay:hover {
			background-color: #0062cc;
			color: #fff;
			box-shadow: none;
		}
		
	</style>
	<link rel="stylesheet" href="css/common.css">
</head>
<body>
		<?php require 'PHPutility/nav.php'; ?>
      <?php require 'PHPutility/offcanvas.php';
	 ?>
	  
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header">
						<h5>Payment Details</h5>
					</div>
					<div class="card-body">
						<form action="handlePayment.php" method="POST">
							<div class="form-group">
								<label for="card-number">Card Number</label>
								<input type="text" class="form-control" id="card-number" placeholder="Enter card number">
							</div>
							<div class="form-group">
								<label for="card-expiry">Expiration Date</label>
								<input type="text" class="form-control" id="card-expiry" placeholder="MM / YY">
							</div>
							<div class="form-group">
								<label for="card-cvv">CVV</label>
								<input type="text" class="form-control" id="card-cvv" placeholder="Enter CVV">
							</div>
							<div class="form-group">
								<label for="card-name">Name on Card</label>
								<input type="text" class="form-control" id="card-name" placeholder="Enter name on card">
							</div>
							<div class="form-group">
								<label for="card-address">Billing Address</label>
								<input type="text" class="form-control" name="address" id="card-address" placeholder="Enter billing address">
							</div>
							<button type="submit" class="btn btn-pay btn-block">Pay Now</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap JS -->

</body>
</html>
