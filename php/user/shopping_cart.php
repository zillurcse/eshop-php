<table class="table table-bordered table-hover table-striped">
	<thead>
		<tr>
			<th class="text-center btn-success" colspan="6">Your Cart</th>
		</tr>
		<tr>
			<th>Sl.</th>
			<th>Product name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total Price</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$query = "SELECT * FROM `shoping_cart` WHERE session_id='".$_SESSION["session_ids"]."'";
		$shopping_cart = mysql_query($query);
		$x = 0;
		while($fetch_cart = mysql_fetch_array($shopping_cart)){
			$x++;
			?>
			<tr>
				<td><?php echo $x; ?></td>
				<td><?php echo $fetch_cart["product_name"]; ?></td>
				<td><?php echo $fetch_cart["product_price"]; ?></td>
				<td><?php echo $fetch_cart["product_qun"]; ?></td>
				<td><?php echo $fetch_cart["product_price"] * $fetch_cart["product_qun"]; ?></td>
				<td>
					<button  type="submit" class="btn btn-sm btn-danger" name="delete">Delete</button>
				</td>
			</tr>
			<?php
		}
		?>
	</tbody>
</table>