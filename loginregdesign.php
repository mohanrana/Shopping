<?php
include("connection.php");
$username=$_POST['u'];
$password=md5($_POST['p']);
$query="INSERT INTO tbl_user(user_name, user_password) values('$username','$password')";
mysql_query($query);
?>