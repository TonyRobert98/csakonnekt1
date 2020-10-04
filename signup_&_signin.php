<?php 
    include("include/connection.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-COMPATIBLE" CONTENT="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style24.css">
	<title>CSA KONNEKT</title>
</head>
    <body>
    	<div class="container" id="container">
    	  <div class="form-container sign-up-container">
    	  	<form action="" method="post">
    	  		<h1>Create Account</h1>
    	  		<h3>To start chatting with your pals register here.</h3>
    		<input type="text" class="input-box" name="user_name" placeholder="Username" autocomplete="off" required>
			<input type="email" class="input-box" name="user_email" placeholder="Email" autocomplete="off" required>
			<input type="password" class="input-box" name="user_pass" placeholder="Enter password" autocomplete="off" required>
			<div class="form-group">
            <label>Country</label>
            <select class="form-control" name="user_country" required>
              <option disabled="">Select a Country</option>
              <option>Rwanda</option>
              <option>Burundi</option>
              <option>Uganda</option>
              <option>DRCongo</option>
              <option>Tanzania</option>
            </select>  
        </div>
        <div class="form_group">
            <label>Gender</label>
            <select class="form-control" name="user_gender" required>
              <option disabled="">Select a Gender</option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select> 
        </div>
    	  		<button name="sign_up">Sign Up</button>
                <?php include("signup_user 2.php"); ?>
    	  	</form>
    	</div>
        ?>
    	<div class="form-container sign-in-container">
    		<form action="" method="post">
    			<h1>Sign in</h1>
    			<h3>Login to CSA KONNEKT</h3>
    			<input type="email" class="input-box" name="email" placeholder="Email" autocomplete="off" required>	
    			<input type="password" class="input-box" name="pass" placeholder="Password" autocomplete="off" required>
    			<div class="small">Forgot password? <a href="forgot_pass.php">Click Here</a></div><br>
    			<button name="sign_in">Sign In</button>
                <?php include("signin_user2.php"); ?>
    		</form>
        </div>
        <div class="overlay-container">
        	<div class="overlay">
        		<div class="overlay-panel overlay-left">
        			<h1>Welcome Back!</h1>
        			<p>
        				To keep connected with us please login with your personal info
        			</p>
        			<button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
        	<h1>Hello,Friend!</h1>
        	<p>Enter your personal details and start journey with us</p>
        	<button class="ghost" id="signUp">Sign Up</button>
        </div>
       </div>
      </div>
     </div>
     <script src="JS/main.js"></script>

</body>
</html>