<!DOCTYPE html>
<?php 
	session_start();
	include("include/connection.php");
	if(!isset($_SESSION['user_email'])) {
		header("location:signin.php");
	}
	else{ ?>
<html>
<head>
	<title>NAVIGATIOn</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/navbar.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <body>
 	<nav>
 		<div class="logo">
 			<h4>The Nav</h4>
 		</div>
 		<ul class="nav-links">
 			<li>
 				<a href="#">Home</a>
 			</li>
 			<li>
 				<a href="#">About</a>
 			</li>
 			<li>
 				<a href="#">Work</a>
 			</li>
 			<li>
 				<a href="#">Projects</a>
 			</li>
 			
 		</ul>
 		<div class="burger">
 			<div class="line1"></div>
 			<div class="line2"></div>
 			<div class="line3"></div>
 		</div>	
 	</nav>
 	<script src="JS/app.js"></script>
</body>	
</html>
<?php } ?>