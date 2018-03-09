<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/main.css" rel="stylesheet">
<link rel="stylesheet" href="main.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: large;
	font-weight: bold;
}
-->
</style>
</head>

<body style="background-image:url(image/wallpaper-background-1600x1200.jpg)">
<table width="90%" border="0" align="center">
  <tr>
    <td width="0%">&nbsp;</td>
    <td width="16%" bgcolor="#CCCCFF"><a href="addcategory.php">
	<div align="center"><strong>
	<input type="button" name="Button" value="ADD CATEGORY" class='btn btn-small btn-primary'/></strong></div></a></td>
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
</table>
	<br>  
<center>
<table width="984" height="43" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFE1C4">
  <td width="135" height="2"></td>
  <tr>
      <td height="39" bgcolor="#CCCCFF"><div align="center" class="style1">Product Name</div></td>
    <td width="238" bgcolor="#CCCCFF"><div align="center" class="style1">Description</div></td>
    <td width="126" bgcolor="#CCCCFF"><div align="center" class="style1">Price</div></td>
    <td width="199" bgcolor="#CCCCFF"><div align="center" class="style1">Image</div></td>
    <td width="150" bgcolor="#CCCCFF"><div align="center" class="style1">Modify</div></td>
    <td width="122" bgcolor="#CCCCFF"><div align="center" class="style1">Delete</div></td>
  </tr>
    <?php
  include("connection.php");
  $query="select * from `tbl_product`";
  $result=mysql_query($query);
   while($res=mysql_fetch_array($result))
  {
  echo"<tr>
    <td>$res[2]</td>
    <td>$res[3]</td>
	<td>$res[4]</td>
	<td><img src='upload/$res[6]' height='100' width='100'> </td>
    <td><a href='pro_produpdate.php ? bid=$res[0]'>Modify</a></td>
    <td><a href='product_delete.php ? bid=$res[0]' >Delete</a></td>
	
  </tr>";
  }
  ?>
</table>
</body>
</html>
