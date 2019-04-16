<?php 	
	include "config.php";
	include "database.php";
?>

<?php 
	$id = $_GET['id'];
	$db = new Database();
	$query = "DELETE FROM user_data WHERE id=$id";
	$deleteData = $db->delete($query);
	header("location:success.php");
?>



<a href="success.php">Go Back</a>