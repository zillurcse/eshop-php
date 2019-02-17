<?php
session_start();
include("../database/database.php");

$x=$_POST["textname"];
$y=$_POST["txtPassword"];

unset($_SESSION["userName"]);
unset($_SESSION["logstatus"]);


$sql=mysql_query("SELECT * FROM `creatnew_admin` WHERE `user_name`='$x' AND `password`='$y'");
$fetch=mysql_fetch_array($sql);
//print "<pre>";
//print_r($fetch);


if(isset($_POST["login"]))
  if(!empty($x) || ($y)){
     if($x==$fetch[2] && $y==$fetch[4])
    {
       $_SESSION["userName"]=$fetch[1];
       $_SESSION["logstatus"]=true;
       
       print "<script>location='../admin/admin.php'</script>";
    }
    else
    {
      print "Unsuccessfully!";
    }

    
  }
  else
  {
     echo("<span style='color:red'>Please file Up your user name or Password..!</span>");
    
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
    <table class="table table-bordered table-hover table-striped col-md-6 col-md-offset-3" style="max-width:600px;" align="center">
    
    <tr align="center" bgcolor="DodgerBlue">
      <td colspan="3"><h1>Login Penel</h1></td>
    </tr>
    
    <tr class="active">
      <td>Email</td>
      <td>:</td>
      <td><input type="text" name="textname" class="form-control" id="inputEmail3" placeholder="User Name"></td>
    </tr>
    
    
    <tr class="active">
      <td>Password</td>
      <td>:</td>
      <td><input type="password" name="txtPassword" class="form-control" id="inputPassword3" placeholder="Password"></td>
    </tr>
    
    <tr bgcolor="white" align="right">
      <td colspan="3" style="max-width:150px;">
        <button type="submit" name="login" class="btn btn-primary">Login</button>
        <button type="submit" name="Create" class="btn btn-success"><a href="../admin/newAdminCreate.php" style="color: #fff">Create New</a></button>

      </td>
    </tr>
  
    </table>
  </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>