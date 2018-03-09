<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
//Calculate 60 days in the future
//seconds * minutes * hours * days + current time
$inTwoMonths = 60 + time(); 
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths); 
?>
</body>
</html>
