<?php
include("connection.php");
$CategoryName=$_POST['CategoryName'];
$Description=$_POST['Description'];
$file=$_POST['img'];
$cat_id=$_POST['id'];
if(isset($_POST['file']))
{
if((($_FILES["file"]["type"]=="image/gif")
||($_FILES["file"]["type"]=="image/jpeg")
||($_FILES["file"]["type"]=="image/pjpeg"))
&& ($_FILES["file"]["size"]<200000))
{
if($_FILES["file"]["error"]>0)
{
echo "return code:" . $_FILES["file"]["error"] . "<br/>";
}
else
{
//echo "uplopad:".$_FILES["file"]["name"]."<br/>";
//echo "type:".$_FILES["file"]["type"]."<br />";
//echo "size:".($_FILES["file"]["size"]/1024);
//echo "tempfile:".$_FILES["file"]["tmp_name"]."<br />";
if(file_exists("upload/".$_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"]."already exists";
}
else
{
 $file=$_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
echo "stored in:"."upload/".$_FILES["file"]["name"];
}
}
}
else
{
echo "invalid file";
}
}
echo $query="update `tbl_category` set `cat_name`='$CategoryName',`cat_description`='$Description',`cat_image`='$file' where `cat_id`='$cat_id'";
mysql_query($query);
header("location:cat_view.php");
?>