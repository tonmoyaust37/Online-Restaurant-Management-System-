<?php
	$hostname='localhost';
	$user='root';
	$password='';
	$db='onlinerestaurent';
	$connection=mysqli_connect($hostname,$user,$password,$db);
	if(!$connection){
		die('unable to connect '.mysqli_connect_error());
	}
	
	
?>