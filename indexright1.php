<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/main.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/bootstrap/fonts/font-awesome.min.css">
</head>

<body bgcolor="#99CCFF">
<form id="form1" name="form1" method="post" action="">
  <table class="table table-bordered">
    <tr>
		
	<?php
include("connection.php");
session_start();
$s_id=session_id();
$query="select * from `tbl_cart` where `ct_session_id`='$s_id'";
$result=mysql_query($query);
$total=0;
$st=0;
 while($res=mysql_fetch_array($result))
{
$query1="SELECT * 
FROM  `tbl_product` where pd_id='".$res['pd_id']."'";

$result1=mysql_query($query1);
$res1=mysql_fetch_array($result1);
$m=($res1['pd_price']*$res['ct_qty']);
    $total=$total+$m;
	$st=$total;
 ?>
      <td>Name</td>
      <?php  echo"
    <td>$res1[2]</td>";?>
    </tr>
    <tr>
      <td>UnitPrice</td>
      <?php  echo"
    <td>$res1[4]</td>";?>
    </tr>
    <tr>
      <td>Quantity</td>
      <?php  echo"
    <td>$res[3]</td>";?>
    </tr>
   
    <tr>
      <td>Total</td>
      <td><?php echo $m?></td>
    </tr>
  <?php 
  }
  ?>
  </table>
  
  <table class="table table-bordered">
    <tr>
      <td>SubTotal</td>
      <td><?php echo $st?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p><a href="cartview.php">
    <input type="button" name="Button" value="Cart View" class='btn btn-small btn-primary'/>
    </a>
  </p>
  <p>

  </p>
</form>
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>