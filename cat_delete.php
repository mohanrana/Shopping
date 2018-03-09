<?php
include("connection.php");
echo $id=$_GET['bid'];
echo $s="delete from `tbl_category` where `tbl_category`.`cat_id`=$id";
mysql_query($s);
header("Location:cat_view.php");
?>