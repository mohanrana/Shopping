<?php
$res=mysql_connect("localhost","root","");
if(!$res)
{
echo "Not";
}
else
{
mysql_select_db("shopping");
}
?>