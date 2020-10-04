<!DOCTYPE html>
<?php 
	session_start();
	include("include/connection.php");
	if (!isset($_SESSION['user_email'])) {
		# code...
		header("location:signin.php");
	}
 ?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta http-equiv="X-UA-COMPATIBLE" CONTENT="ie=edge">
    <link rel="stylesheet" href="CSS/welcome.css">
	<title>Welcome to CSA KONNEKT</title>
</head>
<body>
<form method="">
<h1>Welcome to CSA KONNEKT!</h1>
<?php 
	$user = $_SESSION['user_email'];
	$get_user = "select * from users where user_email='$user'";
	$run_user = mysqli_query($con,$get_user);
	$row = mysqli_fetch_array($run_user);

	$user_name = $row['user_name'];

	echo "
	<p>Hello $user_name,</p>
	";
 ?>
<p>the CSA KONNEKT is a good way to connect to the CSA students and Teachers where Students they are knowing updates of the school,chatting,entertaining and also getting the documents including class works in holidays that were sent via whatsapp or other websites.CSAK is the good way of sending works or other documents to the students or a group of students.Also on CSAK,students may help each other to work out works which may be difficult.</p>
<p>Now enjoy website and tell me what to be improved in the "Developer Comment corner" for improvements</p>
<p>"La science sans conscience n'est qu'une ruine de l'ame"</p>

</form>
	<p>@Copyright Tony Robert 2020.<p>
		<div class="animation">
			<div class="box-area">
			<ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>	
			</div>
			<h3>About the developer</h3>
			<div class="about">
			<p>For some information you can visit me on these website.</p>
			</div>
<div class="social">
	<ul class="button">
		<li class="area"><a target="_blank" class="circle" href="https://facebook.com"><i class="fa fa-facebook-f fa-lg"></i></a></li>
		<li class="area"><a class="circle" href="www.twitter.com"><i class="fa fa-twitter fa-lg"></i></a></li>
		<li class="area"><a class="circle" href="www.instagram.com/tonyquano98"><i class="fa fa-instagram fa-lg"></i></a></li>
		<li class="area"><a class="circle" href="www.linkedin.com"><i class="fa fa-linkedin fa-lg"></i></a></li>
		<li class="area"><a class="circle" href="www.gmail.com/tonyquano98@gmail.com"><i class="fa fa-youtube fa-lg"></i></a></li>
		<li class="area"><a class="circle" href="www.whatsapp.com/0781934493/Tony Robert"><i class="fa fa-whatsapp fa-lg"></i></a></li>
		<li class="area"><a class="circle" href="www.google.com/tonyquano98@gmail.com"><i class="fa fa-google fa-lg"></i></a></li>
	</ul>
	</div>
	</div>
	<?php 
		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['user_name'];
	echo"
		<div class='continue'>
		<button type='submit' class='progress' name='style'><a href='home.php?user_name=$user_name'>Progress</a></button>
		</div>
	";	
 ?>					
</body>			
</html>
