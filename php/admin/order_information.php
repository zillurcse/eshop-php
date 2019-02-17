<?php
include("../database/database.php");
//print $dbmassage;
$item_name=$_POST["item_name"];
$catagory_name=$_POST["catagory_name"];
$catagory_id=$_POST["catagory_id"];

if(isset($_POST["ADD"]))
{
	mysql_query("INSERT INTO `catagory_information`(`item_name`,`catagory_name`,`catagory_id`) VALUE('$item_name','$catagory_name','$catagory_id')");
	if(mysql_affected_rows()>0)
	{
		print("Data INSERT Successfully!!");
	}
	else
	{
		print("Data INSERT UnSuccessfully!!");
	}
}
if(isset($_POST["Edit"]))
{
	mysql_query("REPLACE INTO `catagory_information`(`item_name`,`catagory_name`,`catagory_id`) VALUE('$item_name','$catagory_name','$catagory_id')");
	if(mysql_affected_rows()>0)
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
	mysql_query("DELETE FROM `catagory_information` WHERE catagory_id = ('".$_POST["catagory_id"]."')");
	if(mysql_affected_rows()>0)
	{
		print("Data Delete Successfully!!");
	}
	else
	{
		print("Data Delete UnSuccessfully!!");
	}
}
//<link rel="shortcut icon" href="../../img/stylish-robot-holds-tablet-picture-id511476451.jpg" type="image/x-icon" />
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catagory</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    
  </head>
		<form action="" name="" method="post" >
		<table class="table table-bordered table-hover table-striped col-md-6 col-md-offset-3" style="max-width:900px;" align="center">
		
		<tr align="center" bgcolor="DodgerBlue">
			<td colspan="3"><h1>ORDER INFO</h1></td>
		</tr>
		
		<tr class="active">
			<td>Item Name</td>
			<td>:</td>
			<td>
				<select name="item_name" placeholder="Item Name" class="form-control" style="max-width:650px">
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

		<<tr class="active">
			<td>Catagory Name</td>
			<td>:</td>
			<td>
				<select name="catagory_name" placeholder="Catagory Name" class="form-control" style="max-width:650px">
			<option>Select Catagory</option>
			<?php 
			$sql=mysql_query("SELECT * FROM `catagory_information`");
			while($fetch_item=mysql_fetch_array($sql))
			{
					?>
					<option><?php print $fetch_item['0']?></option>
			
			<?php
			}
			
			?>
			
			</select>
			</td>
			</td>
		</tr>
		
		
		<tr class="active">
			<td>Catagory Id</td>
			<td>:</td>
			<td><input type="text" name="catagory_id" placeholder="Catagory Id" class="form-control" style="max-width:650px;"/></td>
		</tr>
		

		<tr bgcolor="DodgerBlue" align="right">
			<td colspan="3" style="max-width:150px;">
				<input type="submit" name="ADD" class="btn btn-primary" value="ADD" />
				<input type="submit" name="Edit" class="btn btn-primary" value="Edit" />
				<input type="submit" name="Delete" class="btn btn-danger" value="Delete" />
				<input type="submit" value="View"  class="btn btn-success" name="View">

			</td>
		</tr>
	
		</table>
		</form>

		<?php
		if(isset($_POST["View"])){


		?>
		<table class="table table-bordered table-hover table-striped col-md-6 col-md-offset-3">
		      <tr>
		        <td><b>Item Name</b></td>
		        <td><b>Catagory Name</b></td>
		        <td><b>Catagory Id</b></td>
		      </tr>
    
    <?php

     $sql=mysql_query("SELECT * FROM `catagory_information`");
     while ($fetch=mysql_fetch_array($sql)){
      print("<tr>");
      print("<td>".$fetch[0]."</td><td>".$fetch[1]."</td><td>".$fetch[2]."</td>");
      print("</tr>");
    }

    ?>
</table>

<?php
}
?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>