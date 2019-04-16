
	
	<?php 	
	include "config.php";
	include "database.php";
?>

<?php 
	$id = $_GET['id'];
	$db = new Database();
	$query = "DELETE FROM transaction WHERE id=$id";
	$deleteData = $db->delete($query);
	header("location:order_details.php");
?>


