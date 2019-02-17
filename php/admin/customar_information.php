<?php
include("../database/database.php");
//print $dbmassage;
$Customar_id=$_POST["Customar_id"];
$Customar_name=$_POST["Customar_name"];
$Customar_phone=$_POST["Customar_phone"];
$Customar_email=$_POST["Customar_email"];
$password=$_POST["password"];
$con_password=$_POST["con_password"];
$Customar_address=$_POST["Customar_address"];

if(isset($_POST["ADD"]))
{
	mysql_query("INSERT INTO `customar_information`(`customar_id`,`customar_name`,`customar_phone`,`customar_email`,`password`,`con_password`,`customar_address`) VALUE('$Customar_id','$Customar_name','$Customar_phone','$Customar_email','$password','$con_password','$Customar_address')");
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
	mysql_query("REPLACE INTO `customar_information`(`customar_id`,`customar_name`,`customar_phone`,`customar_email`,`password`,`con_password`,`customar_address`) VALUE('$Customar_id','$Customar_name','$Customar_phone','$Customar_email','$password','$con_password','$Customar_address')");
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
	mysql_query("DELETE FROM `customar_information` WHERE Customar_id=('".$_POST["Customar_id"]."')");
	if(mysql_affected_rows()>0)
	{
		print("Data Delete Successfully!!");
	}
	else
	{
		print("Data Delete UnSuccessfully!!");
	}
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customar info</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../img/stylish-robot-holds-tablet-picture-id511476451.jpg" type="image/x-icon" />
  </head>
		<form action="" name="" method="post" >
		<table class="table table-hover" style="max-width:600px;" align="center">
		
		<tr align="center" bgcolor="DodgerBlue">
			<td colspan="3"><h1>CUSTOMART INFO</h1></td>
		</tr>
		
		<tr class="active">
			<td>Customar Id</td>
			<td>:</td>
			<td><input type="text" name="Customar_id" placeholder="Customar id" class="form-control" style="max-width:350px;"/></td>
		</tr>
		
		
		<tr class="active">
			<td>Customar Name</td>
			<td>:</td>
			<td><input type="text" name="Customar_name" placeholder="Customar Name" class="form-control" style="max-width:350px;"/></td>
		</tr>
		
		<tr class="active">
			<td>Customar Phone</td>
			<td>:</td>
			<td><input type="text" name="Customar_phone" placeholder="Customar Phone" class="form-control" style="max-width:350px;"/></td>
		</tr>
		<tr class="active">
			<td>Customar Email</td>
			<td>:</td>
			<td><input type="text" name="Customar_email" placeholder="Example@noyan.com.bd" class="form-control" style="max-width:350px;"/></td>
		</tr>
		
		<tr class="active">
			<td>Password</td>
			<td>:</td>
			<td><input type="Password" name="Password" placeholder="Password" class="form-control" style="max-width:350px;"/></td>
		</tr>
		
		
		<tr class="active">
			<td>Confirm Password</td>
			<td>:</td>
			<td><input type="password" name="con_password" placeholder="Confirm Passward" class="form-control" style="max-width:350px;"/></td>
		</tr>
		<tr class="active">
			<td>Customar Address</td>
			<td>:</td>
			<td>
				<textarea name="Customar_address" rows="5" class="form-control" style="max-width: 350px"></textarea>

			</td>
		</tr>
		
		<tr class="active">
			<td>Picture</td>
			<td>:</td>
			<td><input type="file" name="address" placeholder="" class="form-control" style="max-width:350px;"/></td>
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
		<table class="table table-hover">
		     	 <tr>
				        <td><b>Customar Id</b></td>
				        <td><b>Customar Name</b></td>
				        <td><b>Customar Phone</b></td>
				        <td><b>Customar Email</b></td>
				        <td><b>Password</b></td>
				        <td><b>Confirm Password</b></td>
				        <td><b>Customar Address</b></td>
		      	 </tr>
    

    <?php

     $sql=mysql_query("SELECT * FROM `customar_information`");
     while ($fetch=mysql_fetch_array($sql)){
      print("<tr>");
      print("<td>".$fetch[0]."</td><td>".$fetch[1]."</td> <td>".$fetch[2]."</td><td>".$fetch[3]."</td> <td>".$fetch[4]."</td><td>".$fetch[5]."</td><td>".$fetch[6]."</td>");
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