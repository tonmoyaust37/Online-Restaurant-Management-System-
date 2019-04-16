<?php
	require_once('config.php');
	function checkMail($email){
		global $connection;
		
		$sql="select 1 from user where email='$email'";
		
		$result= mysqli_query($connection,$sql);		
		$count=mysqli_num_rows($result);
		return $count;
	}
	function getPassword($email){
		global $connection;
		$sql = "select * from user where email = '$email'";
		$result= mysqli_query($connection,$sql);
		$data=mysqli_fetch_assoc($result);
		//echo "<pre>";
		//var_dump($data);
		//echo "<pre>";
		return $data['password'];
	}
	
	
	//echo checkMail('admin@admin.com');
	//echo getPassword('admin@admin.com');
?>