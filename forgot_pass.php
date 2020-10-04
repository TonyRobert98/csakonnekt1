<!DOCTYPE html>
<html>
<head>
	<title>Login to your account</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family-Roboto|Cougrette|Pacifico:400,700" rel="stylesheet"  >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sign in.css">
</head>
<body>
	<div class="signin-form">
		<form action=""	method="post">
			<div class="form-header">
				<h2>Forgot Password</h2>
				<p>MyChat</p>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="someone@site.com" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Bestfriend name</label>
				<input type="text" class="form-control" name="bf" placeholder="Someone..." autocomplete="off" required>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign in</button>
			</div>
			<?php include("signin_user.php"); ?>
		</form>
		<div class="text-center small" style="color:#674288;">Don't have an account? <a href="signup.php">Create one</a></div>
	</div>
</html>