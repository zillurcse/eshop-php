<?php
include("../database/database.php");
//print $dbmassage;

$ItemName=$_POST["Item_Name"];
$Catagory=$_POST["catagory_name"];
$catagory_id=$_POST["catagory_id"];


if(isset($_POST["save"]))
{
	mysql_query("INSERT INTO `catagory_information`(`item_name`,`catagory_name`,`catagory_id`) VALUE('$ItemName','$Catagory','$catagory_id')");
	if(mysql_affected_rows()>0)
		{
			print("Data INSERT Successfully");
		}
		else
		{
			print("Data INSERT UnSuccessfully");
		}
}

if(isset($_POST["Edit"]))

{
	mysql_query("REPLACE INTO `catagory_information`(`item_name`,`catagory_name`,`catagory_id`) VALUE('$ItemName','$Catagory','$catagory_id')");
	if(mysql_affected_rows()>0)
		{
			print("Data Edit Successfully");
		}
		else
		{
			print("Data Edit UnSuccessfully");
		}
}
if(isset($_POST["Delete"]))

{
	mysql_query("DELETE FROM catagory_information WHERE catagory_id=('".$_POST["catagory_id"]."')");
	if(mysql_affected_rows()>0)
		{
			print("Data Delete Successfully");
		}
		else
		{
			print("Data Delete UnSuccessfully");
		}
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catagorty</title>
     <link href="../../css/bootstrap.min.css" rel="stylesheet">
  </head>
		<form name="catagorytbl" method="post">
		<table class="table table-hovetable table-bordered table-hover table-striped col-md-6 col-md-offset-3" style="max-width:900px;" align="center">
			<tr bgcolor="DodgerBlue">
				<td align="center" colspan="3"><h1>Catagory Information</h1></td>
			</tr>
			
			<tr class="info">
					<td><b>Item Name</b></td>
					<td>:</td>
					<td>


						
<select name="Item_Name" class="form-control"  style="max-width:700PX">
	
	<?php
					$sql=mysql_query("SELECT * FROM `item_information`");
					while($fetch_item=mysql_fetch_array($sql))
					{
				?>
				<option>
							<?php print $fetch_item[1];?>
				</option>

				<?php
						   }
						?>

			</select>

					</td>
			</tr>
			
			<tr class="success">
					<td><b>Catagory Name</b></td>
					<td>:</td>
					<td><input type="text" name="catagory_name" placeholder="Catagory Name"  class="form-control" style="max-width:700PX"/></td>
			</tr>
			<tr class="active">
					<td><b>Catagory Id</b></td>
					<td>:</td>
					<td><input type="text" name="catagory_id" placeholder="Enter Your Catagory Id"  class="form-control" style="max-width:700PX;"/></td>
			</tr>
	
			<tr bgcolor="white">
				<td colspan="3" align="right">
				<input type="submit" name="save" value="Save" class="btn btn-primary" />
				<input type="submit" name="Edit" value="Edit" class="btn btn-primary" />
				<input type="submit" name="Delete" value="Delete" class="btn btn-danger" />
				<input type="submit" name="View" value="View" class="btn btn-success" />
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
			while ($fetch=mysql_fetch_array($sql)) {

				# code...
				print("<tr>");
				print("<td>".$fetch[0]."</td> <td>".$fetch[1]."</td> <td>".$fetch[2]."</td>");
				print("<tr>");
			
			?>



			<?php
			}
		?>
		
	</table>

	<?php
	}
	?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>