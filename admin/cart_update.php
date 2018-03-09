
//<?php
//include("connection.php");
//echo $id=$_GET['bid'];
////$Item=$_POST['Item'];
////$Image=$_POST['Image'];
//$Quantity=$_POST['Quantity'];
//echo $s="update `cart` set `ct_qty`='$Quantity' where `pd_a`=$id";
////mysql_query($s);
////header("Location:cartview.php");
//?>
<?php
include("connection.php");
echo $id=$_GET['bid'];
session_start();
$sid=session_id();
$s="update `tbl_cart` set `pd_id`=$id and `ct_session_id`='$sid'";
mysql_query($s);
header("Location:cartview.php");
?>