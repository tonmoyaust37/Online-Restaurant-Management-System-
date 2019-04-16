<?php
	session_start();
	include 'header2.php';
	$db = mysqli_connect("localhost", "root", "", "onlinerestaurent");
	$order_data = mysqli_query($db, "SELECT * FROM transaction");
	
?>

<div class="container">
	<div class="row">
		
		<div class="col-md-12">
			<div class="User_data">
				<h2>Order Information</h2>
				<table class="table table-dark table-striped"
				style= " background: #000;">
					<thead class="black">
						<tr>
							<th scope="col">No</th>
							<th scope="col">Email</th>
							<th scope="col">Item</th>
							<th scope="col">Quantity</th>
							<th scope="col">Price</th>
							<th scope="col">Location</th>
							<th scope="col">Phone Number</th>
							<th scope="col">Total price</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						
						<?php 
							$c=1;							
							while($row = $order_data->fetch_assoc()){
								
							?>
							<tr>
								<td><?php echo $c++ ?></td>
								<td><?php echo $row['email'] ?></td>
								<td><?php echo $row['item_list'] ?></td>
								<td><?php echo $row['item_quanity'] ?></td>
								<td><?php echo $row['item_price'] ?></td>
								<td><?php echo $row['location'] ?></td>
								<td><?php echo $row['phone'] ?></td>
								<td><?php echo $row['price'] ?></td>
								<td><a href="order_update.php?id=<?php echo urlencode($row['id']); ?>">
								Clear</a></td>
								
								
							</tr>
							
							
						<?php } ?>
					</tbody>
				</table>
				
				
			</div>
		</div>
		
	</div>
</div>



<?php
	
	include 'footer.php';
	
?>