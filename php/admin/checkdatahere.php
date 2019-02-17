<?php
include("../database/database.php");

	if(isset($_POST["itemchek"])){
		$item_name = $_POST["item_name"];
		$query = "SELECT `catagory_name` FROM `catagory_information` WHERE `item_name`='$item_name'";
		$result = mysql_query($query);
		print "<option>Select one</option>";
		while($fetch = mysql_fetch_array($result)){
			echo "<option>".$fetch["catagory_name"]."</option>";
		}
	
	}

	if(isset($_POST["brandchek"])){
		$item_name = $_POST["item_name"];
		$query_brand = "SELECT `catagory_name` FROM `brand_information` WHERE `catagory_name`='$Brand_Name'";
		alert($query_brand);
		$result = mysql_query($query_brand);
		print "<option>Select one</option>";
		while($fetch = mysql_fetch_array($result)){
			echo "<option>".$fetch["brand_name"]."</option>";
		}
	
	}
?>