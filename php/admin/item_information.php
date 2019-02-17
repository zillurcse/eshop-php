<?php 
include 'data.php';
?>

<?php
error_reporting(0); 
$stu = new student();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 		//$item_id = $_POST['item_id'];
	$item_name = $_POST['item_name'];
	$insertdata = $stu->insertItem($item_id,$item_name);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 		//$item_id = $_POST['item_id'];
	$item_name = $_POST['item_name'];
	$insertdata = $stu->UpdateItem($item_id,$item_name);
}

?>

<?php 
if (isset($insertdata)) {
	echo $insertdata;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>item</title>
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="../../img/stylish-robot-holds-tablet-picture-id511476451.jpg" type="image/x-icon" />
</head>
<form action="" name="" method="post" >
	<table class="table table-bordered table-hover table-striped col-md-6 col-md-offset-3" style="max-width:900px;" align="center">
		
		<tr align="center" bgcolor="DodgerBlue">
			<td colspan="3"><h1>ITEM INFO</h1></td>
		</tr>
		
		
		<tr class="active">
			<td>Item Name</td>
			<td>:</td>
			<td><input type="text" name="item_name" placeholder="Item Name" class="form-control" style="max-width:650px;"/></td>
		</tr>
		
		<tr bgcolor="white" align="right">
			<td colspan="3" style="max-width:150px;">
				<input type="submit" name="ADD" class="btn btn-primary" value="ADD" />
				<input type="submit" value="View"  class="btn btn-success" name="View">

			</td>
		</tr>

	</table>
</form>

<?php
if(isset($_POST["View"])){


	?>

		
			<form action="" method="post">
				<table class="table table-bordered table-hover table-striped col-md-6 col-md-offset-3 form-control">
					<tr>
						<th width="7%">Serial</th>
						<th width="73%">Attandance Date</th>
						<th width="20%">Action</th>

					</tr>
					<?php 
					$stu = new student();

					$get_student = $stu->getStudents();
					if ($get_student) {
								# code...
						$i = 0;
						while ($value = $get_student->fetch_assoc()) {
									# code...
							$i++;

							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td></td>
								<td>
									<input type="submit" name="view" class="btn btn-sm btn-success" value="Edit">
									<input type="submit" name="delete" class="btn btn-sm btn-danger" value="Delete">
								</td>

							</tr>
						<?php 	} } ?>

					</table>
		
				</form>
	<?php
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>