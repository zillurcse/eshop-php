				<?php
					$sql=mysql_query("SELECT * FROM `item_information`");
					while($fetch_item=mysql_fetch_array($sql))
					{

					?>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" background:#3861f3; color:#000; margin-top:2px;">

							<h3><?php print $fetch_item[1];?></h3>
							
				</div>

				<?php

					$selectProduct=mysql_query("SELECT * FROM product_information where item_name='$fetch_item[1]' order by rand()");
					//print "select * from product_information where item_name='$fetch_item[1]'";
					while($fetch_product=mysql_fetch_array($selectProduct))
					{?>
							
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="background:#f4f4f4;">
								
						       <p>

							
						       	<img src="../admin/img/<?php print $fetch_product[4] ?>.jpg" style="height: 120px; width: 200px;">

						       </p>

								<p>
									<a href="home.php?page=product&id=<?php print $fetch_product[4] ?>">  Model:<?php print $fetch_product[3] ?></a>
								</p>
								<p>
									Price :<?php print $fetch_product[5] ?>

								</p>
							</div>

							

					<?php
				    }

					}
				?>
			