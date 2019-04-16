<?php session_start();
	include 'config.php';
	
	
	//var_dump($_SESSION);
	if(empty($_SESSION['adminCheck'])){
		echo "<script>alert('Sorry, you have no rights to access this page.');</script>";	
		echo '<script>window.location="test1.php"</script>';
	}
	
	
?>




<?php
	// Create database connection
	$db = mysqli_connect("localhost", "root", "", "onlinerestaurent");
	
	// Initialize message variable
	$msg = "";
	
	// If upload button is clicked ...
	if (isset($_POST['upload'])) {
		// Get image name
		$image = $_FILES['image']['name'];
		//echo $image;
		// Get text
		$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
		$description = mysqli_real_escape_string($db, $_POST['description']);
		//echo $image_text;
		// image file directory
		$target = "img/".basename($image);
		//echo $target;
		
		$sql = "INSERT INTO images (images,text,description) VALUES ('$image', 
		'$image_text','$description')";
		
		//echo $sql;
		// execute query
		mysqli_query($db, $sql);
		//$result2 = mysqli_query($db, $sql);
		
		
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
			echo "<script>alert('".$msg."');</script>";
			
			
			
			}else{
			$msg = "Failed to upload image";
			echo "<script>alert('".$msg."');</script>";
		}
	}
	$result = mysqli_query($db, "SELECT * FROM images");
	
	
?>


<?php
	$user_data = mysqli_query($db, "SELECT * FROM user_data");
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/admin.css">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/success.css">
	</head>
	<body>
		<h1>Hello <?php echo $_SESSION['email'];?> </h1>
		<!--<p><?php echo $_SESSION['adminCheck'] ?> </p> -->
		<!--<a href="logout.php" class="admin_logOut">Logout</a> -->
		<a href="logout.php"  class="btn btn-primary admin_logOut">Logout</a>
		<a href="order_details.php"  class="btn btn-primary admin_order_details_btn">Order Details</a>
		
		<br>
		
		<!--slider_upload -->
		
		<div class="slider_upload">
			
			<div class="container">
				<div class="row">
					<h2>Image of Slider
					</h2>
					<table class="tblone">
						<tr>
							<th width="10%">Serial</th>
							<th width="35%">Image View</th>
							<th width="25%">Highlight Caption</th>
							<th width="15%">Description</th>
							<th width="15%">Action</th>
						</tr>
						<?php 
							$i=1;							
							while($row = $result->fetch_assoc()){
								
							?>
							<tr>
								<td><?php echo $i++ ?></td>
								<td><?php echo "<img src='img/".$row['images']."' >"; ?></td>
								<td><?php echo $row['text']; ?></td>
								
								<td><?php echo $row['description']; ?></td>
								<td><a href="update.php?id=<?php echo urlencode($row['id']); ?>">
								Edit</a></td>								
							</tr>
							
							
						<?php } ?>
						
						
					</table>
					
					
					
					<!-- image will go here -->
					
					
					
				</div>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						
					</div>
					<div class="col-md-4">
						<div class="upload_image">
							<h4>Upload the slider</h4>
							<br>
							
							<form method="POST"  enctype="multipart/form-data" >	<!--action="index.php" is croped from here-->
								<input type="hidden" name="size" value="1000000">
								<div>
									<input type="file" name="image">
								</div>
								<div>
									<textarea 
									id="text" 
									cols="40" 
									rows="6" 
									name="image_text" 
									placeholder="Hightlight Caption..."></textarea>
								</div>
								<div>
									<textarea 
									id="text" 
									cols="40" 
									rows="6" 
									name="description" 
									placeholder="description..."></textarea>
								</div>
								<div>
									<button type="submit" name="upload">POST</button>
								</div>
							</form>
							
						</div>
					</div>
					<div class="col-md-4">
						
					</div>
				</div>
			</div>
			
			
			
			
			
			
			
		</div>
		
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					<div class="User_data">
						<h2>User Information</h2>
						<table class="table table-dark table-striped"
						style= " background: #8f86864d;">
							<thead class="black white-text">
								<tr>
									<th scope="col">No</th>
									<th scope="col">Name</th>
									<th scope="col">Email</th>
									<th scope="col">Password</th>
									<th scope="col">Phone Number</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								
								<?php 
									$c=1;							
									while($row = $user_data->fetch_assoc()){
										
									?>
									<tr>
										<td><?php echo $c++ ?></td>
										<td><?php echo $row['name'] ?></td>
										<td><?php echo $row['email'] ?></td>
										<td><?php echo md5($row['password']) ?></td>
										<td><?php echo $row['phone'] ?></td>
										<td><a href="user_update.php?id=<?php echo urlencode($row['id']); ?>">
										Delete</a></td>
										
									</tr>
									
									
								<?php } ?>
							</tbody>
						</table>
						
						
					</div>
				</div>
				
			</div>
		</div>
		
		
		<div>
			<a href="test1.php">Go to Home </a>
		</div>
		
		
		
		
		
		<br>
		<br>
		<br>
		
		
		
		
		
		
		<!--End of slider_upload -->
		
		
		
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
	</body>
</html>










