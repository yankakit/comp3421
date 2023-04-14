<!DOCTYPE html>
<html>
<head>
	<title>Change Personal Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

        .ptxt:hover{color: #333333;} 
		.btn-pay:hover {
			background-color: #0062cc;
			color: #fff;
			box-shadow: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-6 mx-auto">
				<div class="card">
					<div class="card-header">
						<h5>Change Personal Information</h5>
					    </div>
					    <div class="card-body">
						<form>
                        <label>Nickname:</label>
		                <div class="form-group pass_show"> 
                        <input type="text" value="" class="form-control" placeholder="Current Password"> 
                        </div> 
                        <label>Username:</label>
                        <div class="form-group pass_show"> 
                        <input type="text" value="" class="form-control" placeholder="New Password"> 
                        </div> 
						<label>Email:</label>
                        <div class="form-group pass_show"> 
                        <input type="email" value="" class="form-control" placeholder="New Password"> 
                        </div> 
						<label>Address:</label>
                        <div class="form-group pass_show"> 
                        <input type="text" value="" class="form-control" placeholder="New Password"> 
                        </div> 
						<button type="submit" class="btn btn-pay btn-block">Confirm</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html>
