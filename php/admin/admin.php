<?php

session_start();
//print $_SESSION["logstatus"];
if($_SESSION["logstatus"]==true)
{

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
      <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="" style="">
<?php //background-image: url(img/wallpaper.jpg); height:100vh; background-size:cover;background-attachment:fixed; ?>
  
<table width="1190" height="1022" border="1" bordercolor="" align="center" class="table table-bordered table-hover table-striped col-lg-12 col-md-12 col-sm-6 col-xs-6 col-md-offset-1" style="max-width: 1100px">
  <tr>
    <td height="" colspan="2" bgcolor="" class="btn-success" align="left"><b><h2>Skill Based Information Technology</h2></b><br /> Welcome to Mr. <?php print $_SESSION["userName"]; ?>  Administrator</td>
  </tr>
  <tr>
    <td height="10px" colspan="" bgcolor="" class="btn-warning"><a href="../login/Login.php"> <h5 class="btn btn-danger">Logout</h5></a> </td>
    <td align="right" class="btn-info"><h5 class="btn btn-primary" ><a href="../user/home.php" style="color: #fff">View Home Page</a></h5></td>
  </tr>
  <tr>
    <td width="221" height="743" valign="top"><table width="103%" height="204" border="1">
      <tr>
        <td align="center"><a href="newAdminCreate.php" target="frmAdminBody"><b>NEW ADMIN</b></a></td>
      </tr>
     <tr>
        <td align="center"><a href="item_information.php" target="frmAdminBody">ITEM INFORMATOION</a></td>
      </tr>
      <tr>
        <td align="center"><a href="catagory_information.php" target="frmAdminBody">CETAGORY INFORMATOION</a></td>
      </tr>
      <tr>
        <td align="center"><a href="brand_information.php" target="frmAdminBody">BRAND INFORMATOION</a></td>
      </tr>
      <tr>
        <td align="center"><a href="order_information.php" target="frmAdminBody">ORDER INFORMATOION</a></td>
      </tr>
      <tr>
        <td align="center"><a href="Addprduct.php" target="frmAdminBody">ADD PRODUCT</a></td>
      </tr>
      
    </table></td>
    <td valign="top"><iframe name="frmAdminBody" height="100%" width="100%"></iframe></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="" class="btn-success" height="" align="right"><b> © <a href="http://www.sbit.com.bd">Zillur Rahman</a>. All Rights Reserved.</b></td>
  </tr>
</table>
<?php
}
else
{
  print "<h1>You Can Not Authorize to see this page <br><a href='../login/Login.php'>Please Login</a></h1>";
}


?>

</body>
</html>