<?php
	session_start();
	if(!empty($_SESSION['email']) && empty($_SESSION['fromMainPage'])){
		echo "<script>alert('You are already logged in');</script>";	
		echo '<script>window.location="test1.php"</script>';	
	}
	if(!empty($_SESSION['email'])&& !empty($_SESSION['fromMainPage'])){
	echo "<script>alert('You are Logging Out in');</script>";	
		echo '<script>window.location="logout.php"</script>';
	}
?>

<?php
	include 'header.php';
?>



<div class="login_page">	
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>				
			<div class="col-md-6" style="margin-top:100px;">
				<h2 style="text-align:center;">Log In</h2>
				
				<form action="login.php" METHOD="POST">
					
					<input class="form-control" type="email" name ="email" placeholder="Email">
					<br>
					<input class="form-control" type="password" name="password" placeholder="Password">
					<br>
					<button type="submit" class="btn btn-info">Login</button>
					
					<a class="btn btn-info float-right" href="signup_system.php">Sign Up</a>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
		
	</div>						
</div>

<?php
	include 'footer.php';
?>
