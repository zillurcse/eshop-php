				
				<?php

					$selectProduct=mysql_query("SELECT * FROM product_information 
					where item_name='".$_GET["id"]."' ");
					while($fetch_product=mysql_fetch_array($selectProduct))
					{?>
							
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="background:#f4f4f4;">
								
						       <p><img src="../admin/img/<?php print $fetch_product[4] ?>.jpg" style="height: 120px; width: 200px;"></p>

								<p>
									Model:<?php print $fetch_product[3] ?>
								</p>
								<p>
									Price :<?php print $fetch_product[5] ?>

								</p>
							</div>

							

					<?php
				  
					}
				?>
			