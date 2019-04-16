<?php
	session_start();
	include 'config.php';
	include 'header2.php';
	include 'database.php';
?>
<?php

	
	//echo "your total is ".$total;
	//print_r($_SESSION["shopping_cart"] );
	//echo sizeof($_SESSION["shopping_cart"]);
	
	
	
	
	
?>


<?php
	
	
	?>


<?php
	if(!empty($_SESSION["shopping_cart"]))
	{
		$name='';
		$quantity='';
		$price='';
		
		
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			
			
			$name.= $values["item_name"]."<br>";
			$quantity.=$values["item_quantity"]."<br>";
			$price.=$values["item_price"]."<br>";
			
			
		}
		
	}
	//echo $name;	
	//echo "<br>";	
	//echo $quantity;	
	//	echo "<br>";	
	//	echo $price;
	
	
	
	
	
?>	



<h3>Order Details</h3>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th width="40%">Item Name</th>
			<th width="20%">Quantity</th>
			<th width="20%">Price</th>
			<th width="20%">Total</th>
			
		</tr>
		<?php
			if(!empty($_SESSION["shopping_cart"]))
			{
				$total = 0;
				
				foreach($_SESSION["shopping_cart"] as $keys => $values)
				{
				?>
				<tr>
					<td><?php echo $values["item_name"]; ?></td>
					<td><?php echo $values["item_quantity"]; ?></td>
					<td>$ <?php echo $values["item_price"]; ?></td>
					<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
					
				</tr>
				<?php
					$total = $total + ($values["item_quantity"] * $values["item_price"]);
				}
			?>
			
			<tr>
				<td colspan="3" align="right">Total</td>
				<td align="right">$ <?php echo $total;						
					
				?></td>
				<td></td>
			</tr>
			<?php
			}
		?>
		
	</table>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="order-details">
				<h3>Enter order details: </h3>
				<form method="POST">
					<label for="location">Enter your location:</label>
					<input type="text" class="form-control" name="location" required="">
					<label for="name">Enter your Phone Number:</label>
					<input type="phone" class="form-control" name="phone" required="">
					<button type="submit"  name="order" class="btn btn-info">Confirm Order</button>
				</form>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>


<?php
	$db = new Database();
	if (isset($_POST['order'])) {
		$location = $_POST['location'];
		$phone = $_POST['phone'];
		$email=$_SESSION['email'];
		$t_price=$total;
		
		
		
		$sql= "INSERT INTO `transaction` (`email`, `item_list`, `item_quanity`, `item_price`, `location`, `phone`, `price`) VALUES ('$email', '$name', '$quantity', '$price', '$location', '$phone', '$t_price')";
		
		
		
		
		$create = $db->insert($sql);
		
		unset($_SESSION['shopping_cart']);
		echo '<script>alert("Order Received")</script>';
		echo '<script>window.location="food_menu.php"</script>';
		
		
		
		
	}
	
?>


<?php
	include 'footer.php';
?>




