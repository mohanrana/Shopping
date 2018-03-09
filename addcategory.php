<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/main.css" rel="stylesheet">
<link rel="stylesheet" href="main.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style1 {
	font-size: large;
	font-weight: bold;
}
.style2 {
	font-size: medium;
	font-weight: bold;
}
.style4 {font-size: large; font-weight: bold; color: #9933FF; }
-->
</style>
</head>
<body style="background-image:url(image/wallpaper-background-1600x1200.jpg)">
<br>
<table width="90%" border="0" align="center">
  <tr>
    <td width="0%">&nbsp;</td>
    <td width="16%" bgcolor="#CCCCFF"><div align="center"><strong><input type="button" name="Button" value="ADD CATEGORY" class='btn btn-small btn-primary'/></strong></div></td>
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
<form action="catdesign.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="986" border="0" align="center"  bgcolor="#FFC68C">
    <tr>
      <td height="22" colspan="3"><div align="center" class="style1"></div></td>
    </tr>
    <tr>
      <td height="43" bgcolor="#CCCCFF" colspan="3"><div align="center"><span class="style4">ADD CATEGORY</span></div></td>
    </tr>
    <tr>
      <td width="148" height="59" bgcolor="#FFCCFF"><span class="style2">Category Name</span></td>
      <td width="232" bgcolor="#FFCCFF"><input name="CategoryName" type="text" onblur="MM_validateForm('CategoryName','','R');return document.MM_returnValue" /></td>
      <td width="592" bgcolor="#CCCCFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="60" bgcolor="#FFCCFF"><span class="style2">Description</span></td>
      <td bgcolor="#FFCCFF" onfocus="MM_validateForm('Description','','R');return document.MM_returnValue"><textarea name="Description"></textarea></td>
      <td bgcolor="#CCCCFF" onfocus="MM_validateForm('Description','','R');return document.MM_returnValue">&nbsp;</td>
    </tr>
    <tr>
      <td height="69" bgcolor="#FFCCFF"><span class="style2">Image</span></td>
      <td bgcolor="#FFCCFF"><input type="file" name="file" /></td>
      <td bgcolor="#CCCCFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="63" bgcolor="#CCCCFF">&nbsp;</td>
      <td bgcolor="#CCCCFF"><?php  if( isset($_GET['mass']))
	  {
	  echo $_GET['mass'];
	  }
	  
	  ?></td>
      <td bgcolor="#CCCCFF"><input type="submit" name="AddCategory" value="Add Category" class='btn btn-small btn-primary' />
      <input type="reset" name="Cancel" value="Reset" class='btn btn-small btn-primary'/></td>
    </tr>
  </table>
</form>
</body>
</html>
