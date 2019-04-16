<?php
	session_start();	
?>


<?php
	if(!empty($_SESSION['email'])){
		echo "<script>alert('You are already logged in');</script>";
		echo '<script>window.location="test1.php"</script>';
	}
?>

<?php
	include 'header2.php';
?>


<div class="sign_up ">
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">	
				<div class="sign_up_text">
					<h1>Sign Up</h1>
				</div>
				<form class="" action="signup.php" method="post">			
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="Uname" required="">
						
						
					</div>
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" name="email" required="">
					</div>
					
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" name="pwd" required="">
					</div>
					<div class="form-group">
						<label for="phone">Phone Number:</label>
						<input type="tel" class="form-control" name="phone" required="">
					</div>
					
					<button type="submit" class="btn btn-info">Submit</button>
				</form>							
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</div>


<?php
	include 'footer.php';
?>


