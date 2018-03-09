<?php
include("connection.php");
session_start();
$uname=$_POST['u'];
$password=md5($_POST['p']);
$i=check($uname,$password);
if($i==-1)
{
header("location:login.php?mass=wrong username");
}
if($i==1)
{
header("location:login.php?mass=wrong password");
}
if($i==2)
{
//setcookie ('abc',$uname,time()+180);

$_SESSION['xyz']=$uname;
header("Location:addcategory.php");
}
function check($u,$p)
{
$q="select * from `tbl_user` where `user_name`='$u' ";
$result=mysql_query($q);
if(mysql_num_rows($result)<1)
{
 return -1;
}
else
{
$res=mysql_fetch_array($result);
if($res['user_password']==$p)
{
 return 2;
}
else
{
 return 1;
}
}
}
?>