<!DOCTYPE html>
<?php 
	session_start();
	include('include/connection.php');
	include('include/header.php');
	if (!isset($_SESSION['user_email'])) {
		# code...
		header("location:signin.php");
	}
	else{ 
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/profile.css">
	<title>CSAK-Profile</title>
</head>
<body style="background:linear-gradient(145deg,,#485461 0%,#28313b 74%);">
	<?php 
		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['user_name'];
		$user_cover_pic = $row['cover_pic'];
		$user_profile = $row['user_profile'];
		echo "
		<div class='cover'>
		<img src='$user_cover_pic'>
		</div>
		";
		echo"
		<div class='card'>
		<img src='$user_profile'>
		</div>
		";
	 ?>
</body>
</html>
<?php } ?>