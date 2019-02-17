<?php
$sql=mysql_query("SELECT * FROM `product_information` WHERE `product_id`='".$_GET["id"]."'");
$fetch=mysql_fetch_array($sql);

?>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: 	#F0FFFF">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color: 	#F0FFFF">
				<img src="../admin/img/<?php print $fetch[4] ?>.jpg" class="img-responsive img-thumbnail" style="height: 220px; width: 100%" /> 
					
				
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color: 	#F0FFFF">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>Product Name:</td>
							<td>
								<?php print $fetch[3] ?>
							</td>
						</tr>
						<tr>
							<td>Product Price:</td>
							<td><?php print $fetch[5] ?></td>
						</tr>
						<tr>
							<td>Stock:</td>
							<td><?php print $fetch[7] ?></td>
						</tr>
						<tr>
							<td>Detials:</td>
							<td><?php print $fetch[6] ?></td>
						</tr>
						<tr>
							<td colspan="2">
								<?php
									if($_SESSION["status"]){
										echo $_SESSION["status"];
									}
								?>
							</td>
						</tr>
						<tr bgcolor="white" align="right">
							<td colspan="2" style="max-width:150px;">
								<form  method="post" action="add_to_cart.php" class="form-inline" >
									<input type="text" class="form-control" name="qun" />
									<input type="hidden" name="product_id" value="<?php  echo $_GET["id"]; ?>">
									<input type="submit" name="ADD" class="btn btn-success" value="Add To Cart" />
								</form>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
				
			</div>
			
		
