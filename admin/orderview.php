<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#7DCF23">

<form name="form1" method="post" action="index.php">


<?php

include("connection.php");
session_start();
echo "<br><br><br>";
echo "<p align='center'><font color='red'  face='Times New Roman, Times, serif' size='+2' style='border-top-style:solid'> CLIENT COINFIRMATION</font><p>";
echo"<table width='50%' height='100%' border='3' cellpadding='0' cellspacing='0'align='center' >";
echo "<tr> <td><p align='center' >Thanks for shopping;You Have done shopping successfully........<br>
Your ORDER Number is:</p></td></tr><br><br><br><br>";
echo"</table>";
   $id=$_GET['bid'];
 session_destroy();
?>
<p align="center"><input name="Ok" type="Submit"value="Ok" width="100%"></p>

</form>

</body>
</html>

