<?php 
	include("../database/database.php");

	$session_id=$_POST["session_id"];
	$product_id=$_POST["product_id"];
	$product_name=$_POST["product_name"];
	$product_price=$_POST["product_price"];
	$product_qun=$_POST["product_qun"];
	$product_details=$_POST["product_details"];

	if(isset($_POST["submit"]))
		mysql_query("INSERT INTO `shoping_cart`(`session_id`,`product_id`,`product_name`,`product_price`,`product_qun`,`product_details`) VALUES('$session_id','$product_id','$product_name','$product_price','$product_qun','$product_details')");
	if(empty($session_id) || empty($product_id) || empty($product_name) || empty($product_price) || empty($product_qun) || empty($product_details)){
		
			print("Please Fill Up your Filled..!");	
		}
		else{
		if(mysql_affected_rows()>0)
		{
			print("DATA SUBMIT SUCCESS....!!");
		}
		else
		{
			print("DATA SUBMIT UNSUCCESS....!!");
		}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shoping Cart</title>
	 <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<form action="" method="post">
	<div class="container-fluid">
		<div class="col-md-6 col-md-offset-3">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<h2>Shoping Cart</h2>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<p><h4>Session_id</h4></p>
				<input type="text" name="session_id" placeholder="" class="form-control"/>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<p><h4>product_id</h4></p>
				<input type="text" name="product_id" placeholder="" class="form-control"/>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<p><h4>product_name</h4></p>
				<input type="text" name="product_name" placeholder="" class="form-control"/>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<p><h4>product_price</h4></p>
				<input type="text" name="product_price" placeholder="" class="form-control"/>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<p><h4>product_qun</h4></p>
				<input type="text" name="product_qun" placeholder="" class="form-control"/>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<p><h4>product_details</h4></p>
				<input type="text" name="product_details" placeholder="" class="form-control"/>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<tr align="right"">
					<td>
						<input type="submit" name="submit" class="btn btn-success" value="Submit"  />
					</td>
				</tr>
		</div>
		</div>
</div>
</form>
	
</body>
</html>