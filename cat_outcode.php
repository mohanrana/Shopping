<?php
include("connection.php");
if((($_FILES["file"]["type"]=="image/gif")
||($_FILES["file"]["type"]=="image/jpeg")
||($_FILES["file"]["type"]=="image/pjpeg"))
&& ($_FILES["file"]["size"]<20000))
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
echo $_FILES["file"]["name"]."already exists";
}
else
{
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
echo "stored in:"."upload/".$_FILES["file"]["name"];
}
}
}
else
{
echo "invalid file";
}


$CaregoryName=$_POST['CategoryName'];
$Description=$_POST['Description'];
$Image=$_POST['Image'];
echo $query="insert into `tbl_category`(`cat_name`,`cat_description`,`cat_image`) values('$CategoryName','$Description','$Image')";
mysql_query($query);
header("Location:addcategory.php");
?>
