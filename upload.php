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
	<title>Change Profile Picture</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<!--<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		background-image:linear-gradient(135deg,#485461 0%,#28313b 74%);
		background-repeat: no-repeat;
		height:658px;
	}
	.card{
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		max-width: 400px;
		border:2px solid #000;
		margin:auto;
		text-align: center;
		font-family: arial;
	}
	.card img{
		margin-color:black;
		margin-left: 70px;
		width:250px;
		height:250px;
	}
	.title{
		background-color:linear-gradient(135deg,#485461 0%,#28313b 74%);
		color: grey;
		font-size: 18px;
	}

	button{
		border:none;
		outline:0;
		display:inline-block;
		padding: 9px;
		color:white;
		background-color: #000;
		text-align: center;
		cursor: pointer;
		width:100%;
		font-size: 18px;
	}
	#update_profile{
		position: absolute;
		cursor: pointer;
		padding: 10px;
		border-radius: 4px;
		color:white;
		background-color: #000;
	}
	label{
		padding:7px;
		display: table;
		color:#fff;
	}
	input[type="file"]{
		display: none;
	}

</style>
<body>
	<?php 
		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['user_name'];
		$user_profile = $row['user_profile'];

		echo "
			<div class='card'>
			<img src='$user_profile'>
			<h1>$user_name</h1>
			<form method='post' enctype='multipart/form-data'>
				<label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i>Select Profile
				<input type='file' name='u_image' size='60'>
				</label>
				<button id='button-profile' name='update'>&nbsp&nbsp&nbsp<i class='fa fa-camera' aria-hidden='true'>Update Profile</button></i>  
			</form>
			</div><br><br>
		";

		if (isset($_POST['update'])) {
			# code...
			$u_image = $_FILES['u_image']['name'];
			$image_tmp = $_FILES['u_image']['tmp_name'];
			$random_number = rand(1,100);

			if($u_image==''){
				echo "<script>alert('Please select profile')</script>";
				echo "<script>window.open('upload.php','_self')</script>";
				exit();
			}else{
				move_uploaded_file($image_tmp, "images/$u_image.$random_number");

				$update = "update users set user_profile='images/$u_image.$random_number' where user_email='$user'";

				$run = mysqli_query($con, $update);

				if ($run) {
					# code...
					echo"<script>alert('Your Profile is Updated!')</script>";
					echo "<script>window.open('upload.php','_self')</script>";
				}
			}
		}
	 ?>

</body>
</html>
<?php } ?>