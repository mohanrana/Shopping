<?php
include("connection.php");
echo $CategoryName=$_POST['CategoryName'];
echo $Description=$_POST['Description'];
if((($_FILES["file"]["type"]=="image/gif")
||($_FILES["file"]["type"]=="image/jpeg")
||($_FILES["file"]["type"]=="image/pjpeg"))
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
echo $query="insert into `tbl_category`(`cat_name`,`cat_description`,`cat_image`) values('$CategoryName','$Description','$Image')";
mysql_query($query);
header("location:addcategory.php");
}
}
}
else
{
echo "invalid file";
}

?>