<?php
	require_once('function.php');
	session_start();
	//echo $_SERVER['REQUEST_METHOD'];
	if($_SERVER['REQUEST_METHOD']!="POST"){
		header("location:login_system.php");
	}
	else{
		$email= $_POST['email'];
		$password= $_POST['password'];
		//echo "Hello from ".$email;
		
		$count1= checkIfAdmin($email);
		echo $count1;
		if($count1==0){			
			$count= checkExitsMail($email);
			if($count>0){
				$getPass= getMPassword($email);
				if($getPass==$password){
					$_SESSION['email'] = $email;
					header("location:food_menu.php");
				}
				else{
					
					echo "<script>alert('Wrong Password');</script>";
					echo '<script>window.location="login_system.php"</script>';	
					//die("Wrong Password");
				}
			}
			else{
				echo "<script>alert('Wrong Password or Email');</script>";			
				echo '<script>window.location="login_system.php"</script>';	
				
				//die("Wrong Email or Password");
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
	
	function getMPassword($email){
		global $connection;
		$sql = "select * from user_data where email = '$email'";
		$result= mysqli_query($connection,$sql);
		$data=mysqli_fetch_assoc($result);
		//echo "<pre>";
		//var_dump($data);
		//echo "<pre>";
		return $data['password'];
	}
	
	function checkIfAdmin($email){
		global $connection;
		$password= $_POST['password'];
		$sql="select 1 from user where email='$email'";		
		$result= mysqli_query($connection,$sql);		
		$count=mysqli_num_rows($result);
		if($count>0){
			$getPass= getAdminPassword($email);
			if($getPass==$password){
				$_SESSION['email'] = $email;
				$_SESSION['password'] = $password;	
				$_SESSION['adminCheck']='1';
				echo "<script>alert('Welcome Admin');</script>";
				echo '<script>window.location="success.php"</script>';	
			}
			else{
				echo "<script>alert('Wrong Password');</script>";
			}
		}
		
		
		return $count;
		
		
	}
	
	function getAdminPassword($email){
		global $connection;
		$sql = "select * from user where email = '$email'";
		$result= mysqli_query($connection,$sql);
		$data=mysqli_fetch_assoc($result);
		return $data['password'];
	}
	
	
	
	
?>
