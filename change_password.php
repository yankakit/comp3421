<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
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
        .pass_show{position: relative} 

        .pass_show .ptxt { 
            position: absolute; 
            top: 50%; 
            right: 10px; 
            z-index: 1; 
            color: #f36c01; 
            margin-top: -10px; 
            cursor: pointer; 
            transition: .3s ease all; 
        } 

        .pass_show .ptxt:hover{color: #333333;} 
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
						<h5>Change Password</h5>
					    </div>
					    <div class="card-body">
						<form>
                        <label>Current Password</label>
		                <div class="form-group pass_show"> 
                        <input type="password" value="" class="form-control" placeholder="Current Password"> 
                        </div> 
                        <label>New Password</label>
                        <div class="form-group pass_show"> 
                        <input type="password" value="" class="form-control" placeholder="New Password"> 
                        </div> 
		                <label>Confirm Password</label>
                        <div class="form-group pass_show"> 
                        <input type="password" value="" class="form-control" placeholder="Confirm Password"> 
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
   <script> 
    $(document).ready(function(){
    $('.pass_show').append('<span class="ptxt">Show</span>');  
    });
  

    $(document).on('click','.pass_show .ptxt', function(){ 

    $(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

    $(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

    });  
</script>
</body>
</html>
