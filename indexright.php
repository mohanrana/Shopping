<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<form id="form1" name="form1" method="post" action=""><table width="600" border="1">
  <tr>
    <td>Item</td>
    <td>UnitPrice</td>
    <td>Quantity</td>
    <td>Total</td>
	 <?php
include("connection.php");
session_start();
$s_id=session_id();
$query="select * from `cart` where `ct_session_id`='$s_id'";
$result=mysql_query($query);
$total=0;
 while($res=mysql_fetch_array($result))
  {
  $m=($res['pd_price']*$res['ct_qty']);
    $total=$total+$m;
  echo"<tr>
    <td>$res[5]</td>
	<td>  <input type='text' name='textfield' VALUE='$res[3]'/></td>
	<td>$m</td>
	    </tr>";

  
  

 }?>
 
    <td>&nbsp;</td>
    </tr>
  <tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Total</td>
    <td><input type="text" name="textfield2"value="<?php echo $total; ?>" /></td>
    <td><p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
  
		</table>

  <p>
    <label></label>
  </p>
</form>
</body>
</html>
