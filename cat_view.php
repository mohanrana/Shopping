<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/main.css" rel="stylesheet">
<link rel="stylesheet" href="main.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body style="background-image:url(image/wallpaper-background-1600x1200.jpg)">
<br>
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
	  <center><table width="978" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000"><td width="145">
  <tr bgcolor="#CCCCFF"><br>
    <td><div align="center"><strong>Category Name</strong></div></td>
    <td width="259"><div align="center"><strong>Description</strong></div></td>
    <td width="272"><div align="center"><strong>Image</strong></div></td>
	<td width="158"><div align="center"><strong>Modify</strong></div></td>
	<td width="132"><div align="center"><strong>Delete</strong></div></td>
	
  </tr>
  <?php
  include("connection.php");
  $query="select *from `tbl_category`";
  $result=mysql_query($query);
  while($res=mysql_fetch_array($result))
  {
  echo"<tr>
    <td>$res[2]</td>
    <td>$res[3]</td>
	<td><img src='upload/$res[4]' height='100' width='100'> </td>
    <td><a href='pro_cateupdate.php ? bid=$res[0]'>Modify</a></td>
    <td><a href='cat_delete.php ? bid=$res[0]' >Delete</a></td>
	
  </tr>";
  }
  ?>
 </table>
      <p>&nbsp;</p>
      <form action="addcategory.php" method="post">
<input name="AddCategory" type="submit" value="Add Category" class='btn btn-small btn-primary' />
</form>
</body>
</html>
