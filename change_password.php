<!DOCTYPE html>
<?php 
session_start();
include ('include/connection.php'); 
include ('include/header.php');
	if (!isset($_SESSION['user_email'])) {
		# code...
		header("location:signin.php");
	}
	else{ ?>
<html>
<head>
	<title>Change Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x:hidden;
		background-image:linear-gradient(135deg,#485461 0%,#28313b 74%);
		background-repeat: no-repeat;
		height:658px;
	}
	input[placeholder]{
		background-color:transparent;
		color:#000;
	}
	.form-control{
		background-color:transparent;
		color:#000;
		border-color:#000;
	}
	.table-bordered{
		border:3px solid #000;
	}
	.active{
		color:#000;
	}
	.btn{
		border:1px solid #000;
		background:transparent;
	}
	.btn:hover{
		background-color:#2196f3;
		color:#fff;
	}
	
</style>
<body>
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<form action="" method="post" enctype="multipart/form-data">
				<table class="table table-bordered table-hover">
					<tr style="border:3px solid #000;" align="center">
						<td style="border:3px solid #000;" colspan="6" class="active"><h2>Change Password</h2></td>
					</tr>
					<tr style="border:3px solid #000;">
						<td style="font-weight:bold;border:3px solid #000;">Current Password</td>
						<td style="border:3px solid #000;">
							<input type="password" name="current_pass" id="mypass" class="form-control" required placeholder="Current Password">
						</td>
					</tr>
					<tr style="border:3px solid #000;">
						<td style="font-weight:bold;border:3px solid #000;">New Password</td>
						<td style="border:3px solid #000;">
							<input type="password" name="u_pass1" id="mypass" class="form-control" required placeholder="New Password">
						</td>
					</tr>
					<tr style="border:3px solid #000;">
						<td style="font-weight:bold;border:3px solid #000;">Confirm Password</td>
						<td style="border:3px solid #000;">
							<input type="password" name="u_pass2" id="mypass" class="form-control" required placeholder="Confirm Password">
						</td>
					</tr>
					<tr style="border:3px solid #000;" align="center">
						<td colspan="6">
							<input type="submit" name="change" value="Change" class="btn btn-info">
						</td>
					</tr>
				</table>
			</form>
			<?php 

			if (isset($_POST['change'])) {
				# code...
				$c_pass = $_POST['current_pass'];
				$pass1 = $_POST['u_pass1'];
				$pass2 = $_POST['u_pass2'];

				$user = $_SESSION['user_email'];
				$get_user = "select * from users where user_email='$user'";
				$run_user = mysqli_query($con,$get_user);
				$row = mysqli_fetch_array($run_user);

				$user_password = $row['user_pass'];

				if ($c_pass !== $user_password) {
					# code...
					echo"
					 <div class='alert alert-danger'>
					 <strong>Your Old password didn't match</strong>
					 </div>
					";
				}

				if ($pass1 != $pass2) {
					# code...
					echo"
					 <div class='alert alert-danger'>
					 <strong>Your New password didn't match with confirm password</strong>
					 </div>
					";	
				}

				if ($pass1 >9 AND $pass2 >9) {
					# code...
					echo"
					 <div class='alert alert-danger'>
					 <strong>Use 9 or more than 9 characters</strong>
					 </div>
					";
				}
				 if ($pass1 == $pass2 AND $c_pass == $user_password) {
				 	# code...
				 	$update_pass = mysqli_query($con, "UPDATE users SET user_pass='$pass1' WHERE user_email='$user'");
				 	echo"
					 <div class='alert alert-danger'>
					 <strong>Your Password is Changed</strong>
					 </div>
					";	
				 }
				}
			 ?>
		</div>
		<div class="col-sm-2">
		</div>
	</div>
</body>
</html>
<?php } ?>