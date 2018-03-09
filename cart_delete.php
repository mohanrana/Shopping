
<?php
include("connection.php");
echo $id=$_GET['bid'];
session_start();
$sid=session_id();
$s="delete from `tbl_cart` where `pd_id`=$id and `ct_session_id`='$sid'";
mysql_query($s);
header("Location:cartview.php");
?>