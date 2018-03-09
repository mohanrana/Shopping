<?php
require_once"class.php";
if($_POST)
{
$val=new p();
$val1=$_POST['Name'];
$val->validate_regreg($val1);
}
?>