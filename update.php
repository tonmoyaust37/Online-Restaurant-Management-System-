<?php 	
	include "config.php";
	include "database.php";
?>

<?php 
	$id = $_GET['id'];
	$db = new Database();
	$query = "SELECT * FROM images WHERE id= $id";
	$getData = $db->select($query)->fetch_assoc();
	
	if(isset($_POST['submit'])){
		//$image  = mysqli_real_escape_string($db->link, $_POST['name']);
		$hightCap = mysqli_real_escape_string($db->link, $_POST['hightCap']);
		$description = mysqli_real_escape_string($db->link, $_POST['description']);
		if($hightCap == '' || $description == ''){
			$error = "Field must not be Empty !!";
			} else {
			$query = "UPDATE images
			SET			
			text = '$hightCap',
			description = '$description'
			WHERE id = $id";
			
			$update = $db->update($query);			
			header("location:success.php");
		}
	}
?>
<?php
	if(isset($_POST['delete'])){
		//$file_Path = $getData['name'];
		
		$sql= "select images from images where id=".$id;
		$getImage = $db->select($sql)->fetch_assoc();		
		$file_Path= "img/".$getImage['images'];		
		unlink($file_Path);
		$query = "DELETE FROM images WHERE id=$id";
		$deleteData = $db->delete($query);
		header("location:success.php");
	}
?>


<?php 
	if(isset($error)){
		echo "<span style='color:red'>".$error."</span>";
	}
?>




<?php 
	$sql= "select images from images where id=".$id;
	$getImage = $db->select($sql)->fetch_assoc();
	echo "<img src='img/".$getImage['images']."' >";
	
?>




<form action="update.php?id=<?php echo $id;?>" method="post">
	<table>
		<tr>
			<td>Hightlighted Caption</td>
			<td><input type="text" name="hightCap" 
			value="<?php echo $getData['text'] ?>"/></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" name="description"
			value="<?php echo $getData['description'] ?>"/></td>
		</tr>
		
		
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Update"/>
				
				<input type="submit" name="delete" Value="Delete" />
			</td>
		</tr>
		
	</table>
</form>
<a href="success.php">Go Back</a>