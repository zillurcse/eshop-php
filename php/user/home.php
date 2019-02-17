<?php
session_start();
$session = session_id();
$_SESSION["session_ids"] = $session;
include("../database/database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Feni Shopeing</title>
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="../../img/header.jpg" type="image/x-icon" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	

	<div class="container-fluid" style="background:	#fff;">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" background:#262729;"; id="top-menu">
			
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="height:; background:	#262729; color:#fff;">
				<p style="margin-top:10px; font-family:'Courier New', Courier, monospace; font-size:16px; font-weight:bold;"><h4>WellCome to Online Shop..!!</h4>
				</p>

			</div>
			
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6" style="height:; background:	#262729; color:#fff;">
				<p style="margin-top:10px; font-family:'Courier New', Courier, monospace; font-size:16px; font-weight:bold;">
				</p>
				<span>
					<?php 
					echo "Today iS: ".date("d/m/Y");
					echo "<br>";
					date_default_timezone_set('Asia/Dhaka');
					echo "Today iS Time: ".date("h:i:sa");
					?>
				</span>

			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="height:; background:	#262729; color:#fff;">
				
			</div>
			
			
			<div class="col-lg-1 col-md-1 col-sm-6 col-xs-6" style="height:; background: #262729; color:#fff;"> 
				<p style="margin-top:10px; font-family:'Courier New', Courier, monospace; font-size:16px; font-weight:bold; text-decoration: none;"><a href="../login/Login.php" class="btn btn-info btn-sm" ><b style="color: #fff">Login</b></a></p>


			</div>
			
			<div class="col-lg-1 col-md-1 col-sm-6 col-xs-6" style="height:; background:	#262729; color:#fff;">
				<p style="margin-top:10px; font-family:'Courier New', Courier, monospace; font-size:16px; font-weight:bold;"><a href="../admin/newAdminCreate.php" class="btn btn-sm btn-success"><b style="color: #fff">Create new</b></a></p>

			</div>

		</div>


		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:	#262729;">
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="height:; background:#262729; color:#fff;">
				<p style="margin-top:10px; font-family:'Courier New', Courier, monospace; font-size:16px; font-weight:bold;">

					<tr class="active">
						<td>
							<input type="text" name="search" placeholder="Enter Search"  style=""/>
							<input type="submit" name="search" value="search" class="btn btn-sm btn-warning" />
						</td>
					</tr>

				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="height:; background:#262729; color:#fff;">
					<p style="margin-top:10px; font-family:'Courier New', Courier, monospace; font-size:16px; font-weight:bold;"><h3>YOUR ONLINE SHOP</h3></p>

					
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="height:60px; background:#		262729; color:#fff;">
					<p style="margin-top:10px; font-family:'Courier New', Courier, monospace; font-size:16px; font-weight:bold;">

						<tr class="active">
							<td>
								
							</td>
						</tr>
					</p>

				</div>

				<div class="w3-bar w3-black w3-card btn-success">
					<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
					<a href="home.php?page=sub_home" class="w3-bar-item w3-button w3-padding-large"><b>HOME</b></a>
					<a href="home.php?page=about" class="w3-bar-item w3-button w3-padding-large w3-hide-small">About Us</a>
					<a href="home.php?page=contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT US</a>
					<a href="home.php?page=sub_home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PAGE</a>
					<a href="home.php?page=sub_home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SERVICE</a>
					<a href="home.php?page=sub_home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">NEWS</a>
					<a href="home.php?page=sub_home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SHOPE</a>
					<a href="home.php?page=cart" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CART</a>
					<div class="w3-dropdown-hover w3-hide-small">
						<button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
						<div class="w3-dropdown-content w3-bar-block w3-card-4">
							<a href="#" class="w3-bar-item w3-button">TOUR</a>
							<a href="#" class="w3-bar-item w3-button">Extras</a>
							<a href="#" class="w3-bar-item w3-button">Media</a>
						</div>
					</div>
					<input type="text" name="search" placeholder="Search Box" class="w3-bar-item w3-button w3-padding-large w3-hide-small" />
					<a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
				</div>
			</div>

		</div>

		<div class="container" style="max-height: 450px; max-width: 100%">

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="../../img/body-img/shoponline-banner2.png" alt="Los Angeles" style="width:100%;">
					</div>

					<div class="item">
						<img src="../../img/body-img/best-states-for-online-shopping-1-800x500.jpg" alt="Chicago" style="width:100%;">
					</div>

					<div class="item">
						<img src="../../img/body-img/onlineshopping.jpg" alt="New york" style="width:100%;">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" background:#fff;">

		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style=" background:	#3861f3; color:#fff;">

			<?php
			$sql=mysql_query("SELECT * FROM `item_information`");
			while($fetch_item=mysql_fetch_array($sql))
			{
				?>


				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-bordered table-hover table-striped" style=" background: #fff; color:#000; margin-top:2px;">
					<h4><a href="home.php?page=item&id=<?php print $fetch_item[1];?>"><?php print $fetch_item[1];?></a></h4>
				</div>

				<?php

				$selectCat=mysql_query("SELECT * FROM catagory_information where item_name='$fetch_item[1]'");
				while($fetch_cat=mysql_fetch_array($selectCat))
				{
					?>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-bordered table-hover table-striped" style=" background:#fff; color:#000;height:30px;">
						<a href="home.php?page=cat&item=<?php print $fetch_item[1];?>&catID=<?php print $fetch_cat[1];?>"><?php print $fetch_cat[1];?></a>
					</div>

					<?php
				}

			}
			?>


		</div>


		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style=" background:#fff; color:#000;">

			<?php

			if(isset($_GET["page"]))
			{
				switch($_GET["page"])
				{

					case "sub_home":
					{
						include("sub_home.php");
					}
					break;


					case "about":
					{
						include("about.php");
					}
					break;

					case "contact":
					{
						include("contact.php");
					}
					break;
					case "item":
					{
						include("item.php");
					}
					break;
					case "cat":
					{
						include("cat.php");
					}
					break;
					case 'cart': 
					{
						include('shopping_cart.php');
					}
					break;

					case "product":
					{
						include("product_detials.php");
					}
					break;

					default:
					{
						include("body.php");	
					}

				}	

			}
			else
			{

				include("body.php");
			}

			?>

		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #262729; color: #fff ">

		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="background-color: #262729; color: #fff ">
			<h4>YOUR ONLINE SHOP LOGO</h4>

		</div>

		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="background-color: #262729; color: #fff ">

			<h4>RELATED TAGS</h4>
			<p><tr><td><a href="#">BOOK ITEM</a></td></tr></p>
			<br>
			<p><tr><td><a href="#">LAPTOP ITEM</a></td></tr></p>
			<p><tr><td><a href="#">DESKTOP ITEM</a></td></tr></p>
			<p><tr><td><a href="#">MOUSE ITEM</a></td></tr></p>
			<br>
			<p><tr><td><a href="#">MONITOR ITEM</a></td></tr></p>
			<p><tr><td><a href="#">TELEViISON ITEM</a></td></tr></p>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="background-color: #262729; color: #fff ">

			<h4>MY ACCOUNT</h4>
			<p><tr><td><a href="#">MY ACCOUNT</a></td></tr></p>
			<p><tr><td><a href="#">Login</a></td></tr></p>
			<p><tr><td><a href="#">My Cart</a></td></tr></p>
			<p><tr><td><a href="#">Safe shopping</a></td></tr></p>
			<p><tr><td><a href="#">Privacy Policy</a></td></tr></p>
			<p><tr><td><a href="#">Discount</a></td></tr></p>
			<p><tr><td><a href="#">Advanced Search</a></td></tr></p>
			<p><tr><td><a href="#">Contact Us</a></td></tr></p>

		</div>

		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="background-color: #262729; color: #fff ">
			<h4>CONTACT US</h4>
			<p>
				Head Office
				<br><br>
				Hazi Fazal Master Lane,Yusup Tower 1st Flor,Nearby Grand Hoque Tower Mizan Road,Feni.
				<br><br>
				House # 535, Avenue # 5,
				<br><br>
				Road # 8, Feni Polytechnic Institute, Feni
				<br><br>
				Phone:+8801865664628

			</p>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #040404; color: #fff ">

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color: #040404; color: #fff ">
			© <a href="http://www.sbit.com.bd">Zillur Rahman</a>. All Rights Reserved.

		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color: #040404; color: #fff ; padding: 0px; margin: 0px">

			<a href="#"><img src="../../img/1.png" class='img-responsive img-thumbnail' style="height: 50px ;width: 100px" align="right"></a>
		</div>
	</div>

</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>