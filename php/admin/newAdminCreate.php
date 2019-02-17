<?php
include("../database/database.php");

$userid=$_POST["userid"];
$fullname=$_POST["FullName"];
$username=$_POST["UserName"];
$useremail=$_POST["email"];
$userpassword=$_POST["password"];

//echo($dbmassage);
//echo($Replace);
//echo ($del);
print($massage);

if (isset($_POST["Login"]))
{
	mysql_query("INSERT INTO `creatnew_admin` (`user_id`,`full_name`,`user_name`,`user_email`,`password`) VALUE('$userid','$fullname','$username','$useremail','$userpassword')");
	if (mysql_affected_rows()>0)
	{
		$massage="Data INSERT Successfully!!";
	}
	else
	{
		print("Data INSERT UnSuccessfully!!");
	}
	
}

if(isset($_POST["Edit"]))
{
	mysql_query("REPLACE INTO `creatnew_admin` (`user_id`,`full_name`,`user_name`,`user_email`,`password`) VALUE('$userid','$fullname','$username','$useremail','$userpassword')");
	if(mysql_affected_rows()>0)
	{
		$Replace = "Data Replace Successfully!!";
	}
	else
	{
		echo "Data Replace UnSuccessfully!!";
	}
}
if(isset($_POST["Delete"]))
{
	mysql_query("DELETE FROM `creatnew_admin` WHERE `user_id`=('".$_POST["userid"]."')");
	if(mysql_affected_rows()>0)
	{
		$del="Delete Successfully";
	}
	else
	{
		print("Delete UnSuccessfully");
	}
}

if(isset($_POST["search"]))
{
	$query=mysql_query("select * FROM `creatnew_admin` WHERE user_name='".$_POST["txtSearch"]."'");
	$fetch_data=mysql_fetch_array($query);
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
<form action="" name="" method="post" >
	<table class="table table-bordered table-hover table-striped col-md-6 col-md-offset-2" style="max-width:900px" align="center">
		
		<tr bgcolor="DodgerBlue" align="center">
			<td colspan="3"><h1>Admin Penel</h1></td>
		</tr>
		<tr>
			<td>
				<select name="txtSearch">
					
					<option>Select One</option>
					<?php

					$sql=mysql_query("SELECT * FROM creatnew_admin");
					while($fetch_info=mysql_fetch_array($sql))
					{

						?>
							<option  value="<?php print $fetch_info[2]?>"><?php print $fetch_info[1]?></option>

						<?php
					}

					?>

				</select>
				<input type="submit" name="search" value="Search">
			</td>
		</tr>
		<tr class="active">
			<td>User Id</td>
			<td>:</td>
			<td><input type="text" name="userid" placeholder="Type User ID" class="form-control" style="max-width:650px" value="<?php print $fetch_data[0]?>" /></td>
		</tr>
		<tr class="active">
			<td>Full Name</td>
			<td>:</td>
			<td><input type="text" name="FullName" placeholder="Enter your Full Name" class="form-control" style="max-width:650px"  value="<?php print $fetch_data[1]?>"/></td>
		</tr>
		<tr class="active">
			<td>User Name</td>
			<td>:</td>
			<td><input type="text" name="UserName" placeholder="Enter your User Name" class="form-control" style="max-width:650px" value="<?php print $fetch_data[2]?>"/></td>
		</tr>
		<tr class="active">
			<td>User Email</td>
			<td>:</td>
			<td><input type="text" name="email" placeholder="Example@SBIT.Com.BD" class="form-control" style="max-width:650px" value="<?php print $fetch_data[3]?>"/></td>
		</tr>
		<tr class="active">
			<td>User Password</td>
			<td>:</td>
			<td><input type="password" name="password" placeholder="Type User Passward" class="form-control" style="max-width:650px" value="<?php print $fetch_data[4]?>"/></td>
		</tr>
		<tr class="info" align="right">
			<td colspan="3" style="max-width:150px;">
				<input type="submit" name="Login" class="btn btn-primary" value="Login" />
				<input type="submit" name="Edit" class="btn btn-info" value="Edit" />
				<input type="submit" name="Delete" class="btn btn-danger" value="Delete" />
				<input type="submit" name="View" class="btn btn-success" value="View" />
				
			</td>
		</tr>
		
	</table>

	<?php
	if(isset($_POST["View"]))
	{
		?>
		<table class="table table-bordered table-hover table-striped col-md-6 col-md-offset-2" style="max-width: 900px">
			<tr>
				<td><b><i>User ID</i></b></td>
				<td><b><i>Full Name</i></b></td>
				<td><b><i>User Name</i></b></td>
				<td><b><i>User Email</i></b></td>
				<td><b><i>User Password</i></b></td>
			</tr>
			<?php
			$sql=$fetch=mysql_query("SELECT * FROM `creatnew_admin`");
			while ($fetch=mysql_fetch_array($sql)) {
				   	# code...
				print("<tr>");
				print("<td>".$fetch[0]."</td> <td>".$fetch[1]."</td> <td>".$fetch[2]."</td> <td>".$fetch[3]."</td> <td>".$fetch[4]."</td>");
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>