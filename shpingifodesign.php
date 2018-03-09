<?php
include("connection.php");
session_start();
$sid=session_id();
 $FirstName=$_POST['FirstName'];
 $LastName=$_POST['LastName'];
 $Address1=$_POST['Address1'];
 $Address2=$_POST['Address2'];
 $PhoneNumber=$_POST['PhoneNumber'];
 $State=$_POST['State'];
 $City=$_POST['City'];
 $ZipCode=$_POST['ZipCode'];
 $dt=date('Y-m-d');
 $query="insert into `tbl_shpinfo`(`firstName`, `LastName`, `Address1`, `Address2`, `Phone No`, `State`, `City`, `Zipcode`,`session_id`) values('$FirstName','$LastName','$Address1','$Address2','$PhoneNumber','$State','$City','$ZipCode','$sid')";
mysql_query($query);
mysql_query("INSERT INTO `outline`.`buy` (`ID`, `date_a`, `session_a`) VALUES (NULL, '$dt', '$sid');");
header("location:orderview.php?bid=$sid");
?>