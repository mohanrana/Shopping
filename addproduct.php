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
.style2 {
	font-size: x-large;
	font-weight: bold;
}
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
</table>
<form action="pro_productdesign.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <center> <table width="975" border="0" bgcolor="#FFC6AA"><td width="95">
 
    <tr>
      <td height="22" colspan="4"><div align="center" class="style2">
        <div align="left"></div>
      </div></td>
    </tr>
    <tr>
      <td height="59" bgcolor="#CCCCFF">&nbsp;</td>
      <td bgcolor="#CCCCFF" colspan="2"><span class="style2">ADD PRODUCT </span></td>
      <td bgcolor="#CCCCFF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCFF">&nbsp;</td>
      <td width="208" bgcolor="#CCCCFF">&nbsp;</td>
      <td width="133" bgcolor="#CCCCFF">&nbsp;</td>
      <td width="521" bgcolor="#CCCCFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="40" bgcolor="#CCCCFF">&nbsp;</td>
      <td bgcolor="#CCCCFF"><input type="text" name="Product" placeholder="Product Name"/></td>
      <td bgcolor="#CCCCFF">&nbsp;</td>
      <td bgcolor="#CCCCFF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCFF">&nbsp;</td>
      <td bgcolor="#CCCCFF"><textarea name="Description" placeholder="Description"></textarea></td>
      <td bgcolor="#CCCCFF">&nbsp;</td>
      <td bgcolor="#CCCCFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="40" bgcolor="#CCCCFF">&nbsp;</td>
      <td bgcolor="#CCCCFF"><input type="text" name="Price" placeholder="Price"/></td>
      <td bgcolor="#CCCCFF">&nbsp;</td>
      <td bgcolor="#CCCCFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="38" bgcolor="#CCCCFF">&nbsp;</td>
      <td bgcolor="#CCCCFF"><input type="text" name="QtyInStock" placeholder="Quantity"/></td>
      <td bgcolor="#CCCCFF">&nbsp;</td>
      <td bgcolor="#CCCCFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="44" bgcolor="#CCCCFF">&nbsp;</td>
      <td bgcolor="#CCCCFF"><span class="style1"><?php 

	  include("connection.php");
	  $query="select *from tbl_category";
	  
	  $result=mysql_query($query);
	 echo  "<select name='Category'>";
	  while($res=mysql_fetch_array($result))
	  {
	  echo "<option value='$res[0]'>$res[2]</option>";
	  }
	  ?>
      </span></td>
      <td bgcolor="#CCCCFF"></select>
      <span class="style1">Category</span></td>
      <td bgcolor="#CCCCFF"><input type="file" name="file" /></td>
    </tr>
    <tr>
      <td height="143" bgcolor="#CCCCFF">&nbsp;</td>
      <td bgcolor="#CCCCFF" colspan="2"><?php
	  if(isset($_GET['mass']))
{
	  echo $_GET['mass'];}
	  ?></td>
      <td bgcolor="#CCCCFF"><input type="submit" name="AddProduct" value="Add Product" class='btn btn-small btn-primary' />&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" name="Cancel" value="Reset" class='btn btn-small btn-primary'/></td>
    </tr>
  </table>
</form>
</body>
</html>
