<?php
include("../database/database.php");

$Item_Name=$_POST["item_name"];
$Catagory_name=$_POST["Catagory_name"];
$Brand_Name=$_POST["Brand_Name"];
$Product_Name=$_POST["Product_Name"];
$product_id=$_POST["product_id"];
$Sale_Price=$_POST["sale_price"];
$Product_Details=$_POST["Product_Details"];
$Self_No=$_POST["Self_no"];
$Bar_code=$_POST["Bar_code"];
//echo($dbmassage);

if (isset($_POST["save"]))	
{
	mysql_query("INSERT INTO `product_information` (`item_name`,`catagory_name`,`brand_name`,`product_name`,`product_id`,`sale_price`,`product_ditals`,`self_no`,`bar_code`) VALUE('$Item_Name','$Catagory_name','$Brand_Name','$Product_Name','$product_id','$Sale_Price','$Product_Details','$Self_No','$Bar_code')");
	if (mysql_affected_rows()>0)
	{
		$path="img/$product_id.jpg";
		move_uploaded_file($_FILES["img"]["tmp_name"], $path);

		print("Data INSERT Successfully!!");
	}
	else
	{
		print("Data INSERT UnSuccessfully!!");
	}
	
}

if (isset($_POST["Edit"]))
{
	mysql_query("REPLACE INTO `product_information` (`item_name`,`catagory_name`,`brand_name`,`product_name`,`product_id`,`sale_price`,`product_ditals`,`self_no`,`bar_code`) VALUE('$Item_Name','$Catagory_name','$Brand_Name','$Product_Name','$product_id','$Sale_Price','$Product_Details','$Self_No','$Bar_code')");
	if (mysql_affected_rows()>0)
	{
		print("Data Edit Successfully!!");
	}
	else
	{
		print("Data Edit UnSuccessfully!!");
	}
	
}
if(isset($_POST["Delete"]))
{
	mysql_query("DELETE FROM `product_information` WHERE `product_id`=('".$_POST["product_id"]."')");
	if(mysql_affected_rows()>0)
	{
		print("Delete Successfully");
	}
	else
	{
		print("Delete UnSuccessfully");
	}
}

if(isset($_POST["Search"]))
{
	$query=mysql_query("SELECT * FROM `product_information` WHERE `item_name`=('".$_POST["txtSearch"]."')");
	$fetch_data=mysql_fetch_array($query);
	//print_r($fetch_data);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>

<form action="" name="" method="post" enctype="multipart/form-data" >
	<table class="table table-bordered table-hover table-striped col-md-6 col-md-offset-2 col-lg-12 col-md-12 col-sm-6 col-xs-6" style="max-width:900px;" align="center">
		
		<tr class="" align="center">
			<td colspan="3" bgcolor=""><h1><b>Add Product</b></h1></td>
		</tr>
		<tr>
			<td>
				<select name="txtSearch">
					
					<option>Select One</option>
					<?php

					$sql=mysql_query("SELECT * FROM `product_information`");
					while($fetch_info=mysql_fetch_array($sql))
					{

						?>
						<option  value="<?php print $fetch_info[0]?>"><?php print $fetch_info[2]?></option>

						<?php
					}

					?>

				</select>
				<input type="submit" name="Search" value="Search"/>
			</td>
		</tr>
		<tr class="active">
			<td>Item Name</td>
			<td>:</td>
			<td>
				<select name="item_name" onchange="showcat()" placeholder="Item Name" class="form-control itemname" id="itemname"  style="max-width:650px">
					<option>Select Item</option>
					<?php 
					$sql=mysql_query("SELECT * FROM `item_information`");
					while($fetch_item=mysql_fetch_array($sql))
					{
						?>

						<option><?php print $fetch_item['item_name']?></option>
						<?php
					}


					?>
				</select>
			</td>
		</tr>
		<tr class="active">
			<td>Catagory Name</td>
			<td>:</td>
			<td>
				<select name="Catagory_name" onchange="brandname()" id="catname" placeholder="Catagory Name" class="form-control" style="max-width:650px">


				</select>
			</td>
		</td>
	</tr>

	<tr class="active">
		<td>Brand Name</td>
		<td>:</td>
		<td>
			<select name="Brand_Name" id="Brand_Name"  class="form-control" style="max-width:650px">

			</select>
		</td>
	</tr>
	<tr class="active">
		<td>Product Name</td>
		<td>:</td>
		<td><input type="text" name="Product_Name" placeholder="Products Name" class="form-control" style="max-width:650px" value="<?php print $fetch_data[3]?>"/></td>
	</tr>
	<tr class="active">
		<td>Product Id</td>
		<td>:</td>
		<td><input type="text" name="product_id" placeholder="Product Id" class="form-control" style="max-width:650px" value="<?php print $fetch_data[4]?>"/></td>
	</tr>
	<tr class="active">
		<td>Sale Price</td>
		<td>:</td>
		<td><input type="text" name="sale_price" placeholder="Sale Price" class="form-control" style="max-width:650px" value="<?php print $fetch_data[5]?>"/></td>
	</tr>
	<tr class="active">
		<td>Product Ditals</td>
		<td>:</td>
		<td>
			<textarea rows="3" class="form-control" style="max-width:650px" name="Product_Details"  value="<?php print $fetch_data[6]?>"></textarea>
		</td>
	</tr>
	<tr class="active">
		<td>Self No</td>
		<td>:</td>
		<td><input type="text" name="Self_no" placeholder="Enter your Self no" class="form-control" style="max-width:650px"  value="<?php print $fetch_data[7]?>"/></td>
	</tr>
	<tr class="active">
		<td>Bar code</td>
		<td>:</td>
		<td><input type="text" name="Bar_code" placeholder="Barcode" class="form-control" style="max-width:650px" value="<?php print $fetch_data[8]?>"/></td>
	</tr>
	<tr class="active">
		<td>Picture</td>
		<td>:</td>
		<td><input type="file" name="img"></td>
	</tr>
	<tr class="info" align="right">
		<td colspan="3" style="max-width:150px;">
			<input type="submit" name="save" class="btn btn-primary" value="save" />
			<input type="submit" name="Edit" class="btn btn-info" value="Edit" />
			<input type="submit" name="Delete" class="btn btn-danger" value="Delete" />
			<input type="submit" name="View" class="btn btn-success" value="View" />

		</td>
	</tr>
</table>

<?php
if (isset($_POST["View"]))
{
	?>

	<table class="table table-bordered table-hover table-striped col-md-6 col-md-offset-2" style="max-width: 900px">

		<tr class="table table-hover" align="center">
			<td class="info" align="center"><b>Item Name</b></td>
			<td class="info" align="center"><b>Generics Name</b></td>
			<td class="info" align="center"><b>Brand Name</b></td>
			<td class="info" align="center"><b>Product Name</b></td>
			<td class="info" align="center"><b>Product Id</b></td>
			<td class="info" align="center"><b>Sale Price</b></td>
			<td class="info" align="center"><b>Product Ditals</b></td>
			<td class="info" align="center"><b>Self No</b></td>
			<td class="info" align="center"><b>Bar code</b></td>
			<td class="info" align="center"><b>Product Picture</b></td>
		</tr>

		<?php  
		$sql=$fetch=mysql_query("SELECT * FROM `product_information`");
		while ($fetch=mysql_fetch_array($sql)) {
					# code...
			print("<tr>");
			print("<td>".$fetch[0]."</td> <td>".$fetch[1]."</td> <td>".$fetch[2]."</td> <td>".$fetch[3]."</td> <td>".$fetch[4]."</td> <td>".$fetch[5]."</td> <td>".$fetch[6]."</td> <td>".$fetch[7]."</td> <td>".$fetch[8]."</td> <td><img class='img-responsive img-thumbnail' height='80' width='80' src='img/".$fetch[4].".jpg'/></td>");
			print("</tr>");
			?>
			<?php 
		}
		?>

	</table>

	<?php
}
?>

</form>

<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>

<script>
    	//https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js
    	function showcat(){
    		var item_name = $('.itemname').val();
    		var itemchek = "categoryFind";
    		$.ajax({

    			url: 'checkdatahere.php',
    			type: 'POST',
    			data: {item_name: item_name, itemchek: itemchek},
    			success: function(data){
    				$("#catname").html(data);
    			}

    		});

    	}

    	function showcat(){
    		var brandname = $('#Brand_Name').val();
    		var 	 = "categoryFind";
    		$.ajax({

    			url: 'checkdatahere.php',
    			type: 'POST',
    			data: {item_name: item_name, 
    				itemchek: itemchek},
    			success: function(data){
    				$("#catname").html(data);
    			}

    		});

    	}

    	

 

   	function brandname(){


    		var itemname = $('.itemname').val();
    		var catname = $('#catname').val();
    		var brandname = $('#Brand_Name').val();

    		var brandchek = "111";

    		$.post("checkdatahere.php", { itm: itemname,catname:catname,brandchek:brandchek },
    			function(result){
                //if the result is 1
                if(result != 0 )
                {
                    //show that the username is available\
                   //alert(result);
                   $('#Brand_Name').html(result);
                   

               }
               else
               {

               	$('#Brand_Name').html("");
               }


           });

    	}
    </script>
</body>
</html>