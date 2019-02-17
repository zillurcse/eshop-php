<?php

$selectProduct=mysql_query("SELECT * FROM product_information 
	where item_name='".$_GET["item"]."' and Catagory_name='".$_GET["catID"]."' ");


while($fetch_product=mysql_fetch_array($selectProduct))
	{?>
		
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="background:#f4f4f4;">
			
			<p><img src="../admin/img/<?php print $fetch_product[`product_id`] ?>.jpg"class=" img-responsive img-thumbnail" style="height: 100px; width: 150px;"></p>

			<p>
				Model:<a href="home.php?page=product&id=<?php echo $fetch_product["product_id"] ?>"><?php print $fetch_product[3] ?></a>
			</p>
			<p>
				Price :<?php print $fetch_product[5] ?>

			</p>
		</div>

	<?php		
	}
	?>
