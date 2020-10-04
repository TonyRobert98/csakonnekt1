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
	<title>Profile Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/preview.css">
</head>
<!--<style>
	body{
		background-image:linear-gradient(135deg,#485461 0%,#28313b 74%);
		background-repeat: no-repeat;
		height:700px;
	}
	.card{
		background: black;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		max-height:550px;
		max-width: 500px;
		border:2px solid #000;
		margin-top:;
		margin-left:410px;
		text-align: center;
		font-family: arial;
	}
	.card img{
		margin-color:#045a;
		margin-left: 77px;
		max-width:350px;
		height:700px;
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
		margin-left:500px;
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

</style>-->
<body>
	<?php 
		$get_username = $_GET['user_name'];
		$get_user = "select * from users where user_name='$get_username'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['user_name'];
		$user_profile = $row['user_profile'];

		echo "
			<div class='card'>
			<img src='$user_profile'>
			<form method='post' enctype='multipart/form-data'> 
				<!--<label id='update_profile'><i class='fa fa-heart fa-lg' aria-hidden='true'></i>Select Profile
				</label>-->
				<button id='button-profile'>
				<div class='feed'>
				<div class='like1'>
				<i class='fa fa-heart'></i>
				</div>
				<div class='like2'>
				<i class='fa fa-comment'></i>
				</div>
				<div class='like3'>
				<i class='fa fa-share'></i>
				</div>
				</div>
				</button> 
			</form>
			</div><br><br>
		";
	 ?>

</body>
</html>
<?php } ?>