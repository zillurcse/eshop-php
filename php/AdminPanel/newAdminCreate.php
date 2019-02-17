<?php
include("../database/database.php");

$userid=$_POST["userid"];
$fullname=$_POST["FullName"];
$username=$_POST["UserName"];
$useremail=$_POST["email"];
$userpassword=$_POST["password"];
$address=$_POST["address"];
echo($massage);

if (isset($_POST["save"]))
{
	mysql_query("INSERT INTO `userinfo`(`UserID`,`FullName`,`UserName`,`UserEmail`,`UserPassword`,`Address`) VALUES('$userid','$fullname','$username','$useremail','$userpassword','$address')");
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
	mysql_query("REPLACE INTO `userinfo`(`UserID`,`FullName`,`UserName`,`UserEmail`,`UserPassword`,`Address`) VALUES('$userid','$fullname','$username','$useremail','$userpassword','$address')");
	if(mysql_affected_rows()>0)
	{
		echo "Data Replace Successfully!!";
	}
	else
	{
		echo "Data Replace UnSuccessfully!!";
	}
}
if(isset($_POST["Delete"]))
{
	mysql_query("DELETE FROM `userinfo` WHERE `userid`='".$_POST["userid"]."'");
	if(mysql_affected_rows()>0)
	{
		print("Delete Successfully");
	}
	else
	{
		print("Delete UnSuccessfully");
	}
}

if(isset($_POST["search"]))
{
	$query=mysql_query("select * FROM `userinfo` WHERE UserName='".$_POST["txtSearch"]."'");
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
		<form action="" name="" method="post" >
		<table class="table table-hover" style="max-width:600px;" align="center">
		
		<tr bgcolor="DodgerBlue" align="center">
			<td colspan="3"><h1>Admin Penel</h1></td>
		</tr>
		<tr>
			<td>
				<select name="txtSearch">
					
					<option>Select One</option>
						<?php

							$sql=mysql_query("select * from userinfo ");
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
			<td><input type="text" name="userid" placeholder="Type User ID" class="form-control" style="max-width:350px;" value="<?php print $fetch_data[0]?>" /></td>
		</tr>
		
		
		<tr class="active">
			<td>Full Name</td>
			<td>:</td>
			<td><input type="text" name="FullName" placeholder="Enter your Full Name" class="form-control" style="max-width:350px;"  value="<?php print $fetch_data[1]?>"/></td>
		</tr>
		
		
		<tr class="active">
			<td>User Name</td>
			<td>:</td>
			<td><input type="text" name="UserName" placeholder="Enter your User Name" class="form-control" style="max-width:350px;" value="<?php print $fetch_data[2]?>"/></td>
		</tr>
		
		
		<tr class="active">
			<td>User Email</td>
			<td>:</td>
			<td><input type="text" name="email" placeholder="Example@SBIT.Com.BD" class="form-control" style="max-width:350px;" value="<?php print $fetch_data[3]?>"/></td>
		</tr>
		
		
		<tr class="active">
			<td>User Password</td>
			<td>:</td>
			<td><input type="password" name="password" placeholder="Type User Passward" class="form-control" style="max-width:350px;" value="<?php print $fetch_data[4]?>"/></td>
		</tr>
		
		
		<tr class="active">
			<td>Address</td>
			<td>:</td>
			<td><input type="text" name="address" placeholder="Enter your Address" class="form-control" style="max-width:350px;" value="<?php print $fetch_data[5]?>"/></td>
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
			if(isset($_POST["View"]))
			{
			?>
			<table class="table table-hover">
				<tr>
					<td><b><i>User ID</i></b></td>
					<td><b><i>Full Name</i></b></td>
					<td><b><i>User Name</i></b></td>
					<td><b><i>User Email</i></b></td>
					<td><b><i>User Password</i></b></td>
					<td><b><i>Address</i></b></td>
				</tr>
				<?php
				   $sql=$fetch=mysql_query("SELECT * FROM `userinfo`");
				   while ($fetch=mysql_fetch_array($sql)) {
				   	# code...
				   	print("<tr>");
				   	print("<td>".$fetch[0]."</td> <td>".$fetch[1]."</td> <td>".$fetch[2]."</td> <td>".$fetch[3]."</td> <td>".$fetch[4]."</td> <td>".$fetch[5]."</td>");
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