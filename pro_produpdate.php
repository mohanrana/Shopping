<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#7DCF23">
<form action="pro_productdesign.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<?php
 include("connection.php");
  $pd_id=$_GET['bid'];
  $query="select *from `tbl_product` where `pd_id`=$pd_id";
  $result=mysql_query($query);
  while($res=mysql_fetch_array($result))
  {
 ?>
 
  <table width="200" border="1">
  <tr>
    <td>Category</td>
    <td>  
	  <?php 

	  $query="select *from tbl_category";
	  
	  $result=mysql_query($query);
	 echo  "<select name='Category'>";
	  while($res1=mysql_fetch_array($result))
	  {
	  echo "<option value='$res1[0]'>$res1[2]</option>";
	  }
	  ?>
	  </select>
    </td>
  </tr>
  <tr>
    <td>ProductName</td>
    <td><input type="text" name="ProductName" value="<?php echo $res[2];?>" /></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><textarea name="Description"><?php echo $res[3];?></textarea></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="Price" value="<?php echo $res[4];?>" /></td>
  </tr>
  <tr>
    <td>Qty In Stock </td>
    <td><input type="text" name="QtyInStock"value="<?php echo $res[2];?>"  /></td>
  </tr>
  <tr>
    <td>Image</td>
    <td><input type="file" name="file" />
	 <img src="upload/<?php echo $res[4];?>" height="122" width="131"  />	<input name='img' type='hidden' value='<?php echo $res[4];?>' /><input name='id' type='hidden' value='<?php echo $res[0];?>' />  </td>
  </td>
  </tr>
  <tr>
    <td><input type="submit" name="ModifyProduct" value="ModifyProduct" /></td>
    <td><input type="submit" name="Cancel" value="Cancel" /></td>
  </tr>
</table>
<?php
  }
  ?>
  
</form>
</body>
</html>
