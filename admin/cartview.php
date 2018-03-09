<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/main.css" rel="stylesheet">
<link rel="stylesheet" href="main.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body style="background-image:url(image/wallpaper-background-1600x1200.jpg)">
<br>
<form id="form1" name="form1" method="post" action="">
<table width="981" border="0" align="center" bgcolor="#CCCCFF">
  <tr>
    <td height="51" bgcolor="#6666FF">&nbsp;</td>
    <td bgcolor="#6666FF">&nbsp;</td>
    <td bgcolor="#6666FF">&nbsp;</td>
    <td bgcolor="#6666FF">&nbsp;</td>
    <td bgcolor="#6666FF">&nbsp;</td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="54" height="44" bgcolor="#CCCCFF"><div align="center"><strong>Item</strong></div></td>
    <td width="108" bgcolor="#CCCCFF"><div align="center"><strong>Unit Price</strong></div></td>
    <td width="133" bgcolor="#CCCCFF"><div align="center"><strong>Quantity</strong></div></td>
    <td width="660" bgcolor="#CCCCFF"><div align="left"><strong>Total</strong></div></td>
    <td width="10" bgcolor="#CCCCFF">&nbsp;</td>
    </tr>
  <tr>
  <?php
include("connection.php");
session_start();
$s_id=session_id();

$query="select * from `tbl_cart` where `ct_session_id`='$s_id'";
$result=mysql_query($query);
$total=0;
 while($res=mysql_fetch_array($result))
  {
  $query1="SELECT * 
FROM  `tbl_product` where pd_id='".$res['pd_id']."'";

$result1=mysql_query($query1);
$res1=mysql_fetch_array($result1);
  
  $m=($res1['pd_price']*$res['ct_qty']);
    $total=$total+$m;
  echo"<tr>
    <td><img src='upload/$res1[6]'height='100'width='100'><input name='id' type='hidden' value='$res[1]'><br>$res1[2]</td>
    <td>$res[5]</td>
	<td>  $res[3]</td>
	<td>$m</td>
	    <td><a href='cart_delete.php ? bid=$res[0]' >Delete</a>
		</tr>";
		}
 ?>
  <tr>
    <td bgcolor="#CCCCFF">&nbsp;</td>
    <td bgcolor="#CCCCFF">&nbsp;</td>
    <td bgcolor="#CCCCFF"><div align="center"><strong>Total</strong></div></td>
    <td bgcolor="#CCCCFF"><input type="text" name="textfield2"value="<?php echo $total; ?>" /></td>
    <td bgcolor="#CCCCFF"><p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
  <tr>
    <td height="102" bgcolor="#CCCCFF">&nbsp;</td>
    <td bgcolor="#CCCCFF">&nbsp;</td>
    <td bgcolor="#CCCCFF">&nbsp;</td>
    <td bgcolor="#CCCCFF"><input type="reset" name="clear" value="Reset" class='btn btn-small btn-primary'/>
	&nbsp&nbsp&nbsp&nbsp <a href="index.php">
	<input type="button" name="Button" value="Continue Shopping" class='btn btn-small btn-primary'/></a>
	&nbsp&nbsp&nbsp&nbsp <a href="shpingifo.php">
      <input name="Button" type="button" value="Proceed To Checkout" class='btn btn-small btn-primary'/></a></td>
	
  <td bgcolor="#CCCCFF">	</td>
    </tr>
  </table>

  
</form>
</body>
</html>
