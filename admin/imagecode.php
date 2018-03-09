<?php
$input=md5($_POST['input']);
$abc=$_COOKIE['tncon'];
$input="";
if($input==$abc)
{
echo "matched";
}
else
{
echo "not matched";
}
?>