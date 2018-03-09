<?php
include("connection.php");
$id=$_GET['bid'];
session_start();
$sid=session_id();
echo $query="select *from `tbl_cart` where `pd_id`='$id' and `ct_session_id`= '$sid'";
$result=mysql_query($query);
$total_row=mysql_num_rows($result);
if($total_row<=0)
{

echo $q="insert into `tbl_cart` (`pd_id`,`ct_session_id`,`ct_qty`) values('$id','$sid','1')";
//mysql_query($q);
}
else
{
$qty=mysql_fetch_array($result);
$qty1=$qty['ct_qty']+1;
echo $q="update `tbl_cart` set `ct_qty`=$qty1 where  `pd_id`='$id' and `ct_session_id`='$sid'";
}
mysql_query($q);
header("location:cartview.php?bid=".$_GET['bid']);
?>