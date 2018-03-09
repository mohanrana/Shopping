<?php
include("connection.php");
echo $Category=$_POST['Category'];
echo $Product=$_POST['Product'];
echo $Description=$_POST['Description'];
echo $Price=$_POST['Price'];
echo $QtyInStock=$_POST['QtyInStock'];

if((($_FILES["file"]["type"]=="image/gif")
||($_FILES["file"]["type"]=="image/jpeg")
||($_FILES["file"]["type"]=="image/pjpeg")
||($_FILES["file"]["type"]=="image/jpg")
||($_FILES["file"]["type"]=="image/png"))
&& ($_FILES["file"]["size"]<2000000))
{
if($_FILES["file"]["error"]>0)
{
echo "return code:" . $_FILES["file"]["error"] . "<br/>";
}
else
{
echo "uplopad:".$_FILES["file"]["name"]."<br/>";
echo "type:".$_FILES["file"]["type"]."<br />";
echo "size:".($_FILES["file"]["size"]/1024);
echo "tempfile:".$_FILES["file"]["tmp_name"]."<br />";
if(file_exists("upload/".$_FILES["file"]["name"]))
{
$mass=$_FILES['file']['name'].'already exists';
header("Location:addcategory.php?mass=$mass");
}
else
{
echo $Image=$_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
echo "stored in:"."upload/".$_FILES["file"]["name"];
echo $query="insert into tbl_product(pd_name, pd_description, pd_price, pd_qty, pd_image, cat_id) values('$Product','$Description','$Price','$QtyInStock','$Image','$Category')";
mysql_query($query);
header("location:addproduct.php");
}
}
}
?>