<?php


include("../database/database.php");
session_start();
$session = $_SESSION["session_ids"];
if(isset($_POST["ADD"])){
	$quan = $_POST["qun"];
	$product_id = $_POST["product_id"];
	$resultproduct = mysql_query("SELECT * FROM `product_information` WHERE `product_id`='$product_id'");

	$fetchProduct = mysql_fetch_array($resultproduct);


	if($quan > 0){
		$query = "INSERT INTO `shoping_cart` VALUES('$session','".$fetchProduct["product_id"]."','".$fetchProduct["product_name"]."', '".$fetchProduct["sale_price"]."', '$quan')";

		$result = mysql_query($query);
		if($result){
			$_SESSION["status"] = "Added to cart";
			$location = "home.php?page=product&id=".$product_id;
			print "<script>location='$location'</script>";
		}else{
			$_SESSION["status"] = "Failed";
			$location = "home.php?page=product&id=".$product_id;
			print "<script>location='$location'</script>";
		}
	}


}


?>