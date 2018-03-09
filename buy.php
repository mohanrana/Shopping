<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/main.css" rel="stylesheet">
<link rel="stylesheet" href="main.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: large}
.style2 {font-size: large; font-weight: bold; }
-->
</style>
</head>

<body style="background-image:url(image/wallpaper-background-1600x1200.jpg)"><br>
<table width="90%" border="0" align="center">
  <tr>
    <td width="0%">&nbsp;</td>
    <td width="16%" bgcolor="#CCCCFF"><a href="addcategory.php">
	<div align="center"><strong><input type="button" name="Button" value="ADD CATEGORY" class='btn btn-small btn-primary'/></strong></div></a></td>
    <td width="16%" bgcolor="#CCCCFF"><a href="cat_view.php">
    <input type="button" name="Button" value="VIEW CATEGORY" class='btn btn-small btn-primary' /></a></td>
    <td width="16%" bgcolor="#CCCCFF"><a href="addproduct.php">
        <input type="button" name="Button" value="ADD PRODUCT" class='btn btn-small btn-primary'/>
   </a></td><td width="16%" bgcolor="#CCCCFF"><a href="product_view.php">
     <input type="button" name="Button2" value="VIEW PRODUCT" class='btn btn-small btn-primary'/></a>
    <td width="16%" bgcolor="#CCCCFF"><a href="buy.php">
      <input type="button" name="Button3" value="ORDERED PRODUCT" class='btn btn-small btn-primary'/>
    </a><a href="buy.php"></a> </td>
    <td width="0%">&nbsp;</td>
  </tr>
</table><br>
	 <form id="form1" name="form1" method="post" action="buydesign.php">
    <center><table width="985" border="1" bgcolor="#FFC6AA"><td width="183">
    
      <tr>
      <td height="24" bgcolor="#CCCCFF"><div align="center" class="style2">Item Name</div></td>
      <td width="239" bgcolor="#CCCCFF"><div align="center" class="style2">Quantity</div></td>
      <td width="164" bgcolor="#CCCCFF"><div align="center" class="style2">Date</div></td>
  <td width="167" bgcolor="#CCCCFF"><div align="center" class="style2">Order Date </div></td> 
    <td width="198" bgcolor="#CCCCFF"><div align="center" class="style1"><strong>Confirmation</strong></div></td>
    </tr>
   <?php
include("connection.php");
$query="select *from `buy`";
$result=mysql_query($query);
$total=0;
 while($res=mysql_fetch_array($result))
  {
  
 $query1="SELECT * 
FROM  `tbl_cart` where ct_session_id='".$res['session_a']."'";
$result1=mysql_query($query1);
 while($res1=mysql_fetch_array($result1))
 {

$query2="SELECT * 
FROM  `tbl_product`  where pd_id='".$res1['pd_id']."'";
$result2=mysql_query($query2);
$res2=mysql_fetch_array($result2);

echo"<tr>
    <td>$res2[2]</td>
    <td>$res1[3]</td>
	<td>$res[1]</td>
	<td>$res1[5]
	
	<input name='id' type='hidden' value='$res1[0]' />
	<input name='sid' type='hidden' value='$res1[4]' />
	<input type='hidden' name='Order Date' VALUE='$res[1]'/>
	</td>
	<td><input type='submit' value='Order Confirmation.' name='dd'></td>
	</tr>";

 }
 
   }?>
   </table>
  
</form>
<p>&nbsp;</p>
</body>
</html>
