<!DOCTYPE html>
<?php 
	session_start();
	include("find_friends_function.php");
	if(!isset($_SESSION['user_email'])) {
		header("location:signin.php");
	}    
	else{ ?>
<html>
<head>
	<title>Search For Friends</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/find_people.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark" href="#">
		<a href="navbar-brand" href="#">
			<?php 
				$user = $_SESSION['user_email'];
				$get_user = "select * from users where user_email='$user'";
				$run_user = mysqli_query($con,$get_user);
				$row = mysqli_fetch_array($run_user);

				$user_name = $row['user_name'];
				$user_profile = $row['user_profile'];
				?>		
				<?php 
						if (isset($_GET['user_name'])) {
						 		# code...
						 		global $con;
						 		$get_username = $_GET['user_name'];
						 		$get_user = "select * from users where user_name='$get_username'";

						 		$run_user = mysqli_query($con,$get_user);
						 		$row_user = mysqli_fetch_array($run_user);
						 		$username = $row_user['user_name'];
						 		$user_profile_image = $row_user['user_profile'];
						 	}
				echo"<a class='navbar-brand' href='../home.php?user_name=$user_name'>MyChat</a>";
				echo"				
				<div class='profile'>
				<a class='navbar-brand' href='../Profile.php?user_name=$user_name'>MyProfile</a>
				</div>
				";
			 ?>
		</a>	 
			 <ul class="navbar-nav">
			 	<li><a style="color:white;text-decoration:none;font-size:20px"; href="../account_settings.php">Setting</a></li>
			 </ul>
		</a>	
	</nav><br>
	<div class="row">
		<div class="col-sm-4">		
		</div>
		<div class="col-sm-4">
			<form class="search_form" action="">
				<input type="text" name="search_query" placeholder="search Friends" autocomplete="off" required>
				<button class="btn" type="submit" name="search_btn">Search</button>
			</form>
		</div>
		<div class="col-sm-4">		
		</div>
	</div><br><br>
	<?php search_user(); ?>
</body>
</html>
<?php } ?>