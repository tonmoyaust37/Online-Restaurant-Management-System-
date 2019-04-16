<?php
	session_start();	
?>
<?php
	include 'config.php';
	include 'database.php';
	
?>

<?php
	if($_SERVER['REQUEST_METHOD']!="POST"){
		header("location:signup_system.php");
	}
	else{
		$db = new Database();
		
		$Uname  = mysqli_real_escape_string($db->link, $_POST['Uname']);
		$email = mysqli_real_escape_string($db->link, $_POST['email']);
		$password = mysqli_real_escape_string($db->link, $_POST['pwd']);
		$phn_no = mysqli_real_escape_string($db->link, $_POST['phone']);
		if($Uname == '' || $email == '' || $password == ''|| $phn_no == ''){
			$error = "Field must not be Empty !!";
		} 
		
		else {
			$count= checkExitsMail($email);
			if($count==0){
				$query ="INSERT INTO `user_data` (`name`, `email`, `password`, `phone`) 
				VALUES ('$Uname','$email','$password','$phn_no')";				
				$create = $db->insert($query);
				if($create){
					echo "<script>alert('Successfully registered');</script>";	
					echo '<script>window.location="signup_system.php"</script>';
				}
				else{
					echo "<script>alert('Error in input');</script>";	
					echo '<script>window.location="signup_system.php"</script>';
				}
				
			}
			else{
				echo "<script>alert('Dublicate Email!!! Use Another email.');</script>";	
				echo '<script>window.location="signup_system.php"</script>';
				
				
			}
			
			
			
		}
	}
	
	
	function checkExitsMail($email){
		global $connection;
		
		$sql="select 1 from user_data where email='$email'";
		
		$result= mysqli_query($connection,$sql);		
		$count=mysqli_num_rows($result);
		return $count;
	}
	
	
	
?>

