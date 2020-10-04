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
				echo"<a class='navbar-brand' href='home.php?user_name=$user_name'>MyChat</a>";
				echo"				
				<div class='profile'>
				<a class='navbar-brand' href='Profile.php?user_name=$user_name'>MyProfile</a>
				</div>
				";
			 ?>
		</a>	 
			 <ul class="navbar-nav">
			 	<li><a style="color:white;text decoration:none;font-size:20px"; href="account_settings.php">Setting</a></li>
			 </ul>
		</a>	
	</nav><br>