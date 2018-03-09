<?php
include("connection.php");
$id=$_GET['bid'];
$s="delete from `tbl_product` where `tbl_product`.`pd_id`=$id";
mysql_query($s);
header("Location:product_view.php");
?>