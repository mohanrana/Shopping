<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/main.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: x-large;
	font-weight: bold;
}
.style2 {
	font-size: large;
	font-weight: bold;
}
.style3 {color: #000099}
.style4 {font-size: x-large; font-weight: bold; color: #000099; }
-->
</style>
</head>

<body style="background-image:url(upload/ocean_background_3-wallpaper-1024x576.jpg)"><br><br>
<form action="logindesign.php" method="post">
  <table width="786"  border="0" align="center" bgcolor="#EFA3E8" >
    <tr>
      <td height="39" colspan="4" valign="top" bgcolor="#FFCCFF"><p class="style1">&nbsp;</p>
      <p class="style1 style3">Login with existing account</p></td>
    </tr>
    <tr>
      <td height="22" colspan="4" valign="top"><div align="left" class="style1"></div>
      </p></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCFF">&nbsp;</td>
      <td height="22" bgcolor="#FFCCFF">&nbsp;</td>
      <td bgcolor="#FFCCFF">&nbsp;</td>
      <td bgcolor="#FFCCFF">&nbsp;</td>
    </tr>
    <tr>
      <td width="59" bgcolor="#FFCCFF">&nbsp;</td>
      <td width="132" height="51" bgcolor="#FFCCFF"><span class="style2">User Name </span></td>
      <td width="282" bgcolor="#FFCCFF"><input type="text" name="u" placeholder="Enter user name" />      </td>
      <td width="295" bgcolor="#FFCCFF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#FFCCFF">&nbsp;</td>
      <td height="63" bgcolor="#FFCCFF"><span class="style2">Password</span></td>
      <td bgcolor="#FFCCFF"><input type="password" name="p" placeholder="Enter password"/></td>
      <td bgcolor="#FFCCFF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#FFCCFF">&nbsp;</td>
      <td height="44" bgcolor="#FFCCFF">&nbsp;</td>
      <td bgcolor="#FFCCFF"><?php 
	if(isset($_GET['mass']))
	{
	echo $_GET['mass'];
	}
	?></td>
      <td bgcolor="#FFCCFF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#FFCCFF">&nbsp;</td>
      <td height="26" bgcolor="#FFCCFF">&nbsp;</td>
      <td bgcolor="#FFCCFF">&nbsp;</td>
      <td bgcolor="#FFCCFF"><input type="submit" name="LogIn" value="login" /></td>
    </tr>
  </table>
</form>
<form action="loginregdesign.php" method="post">
<table width="1076" border="0">
  <tr>
    <td width="281" valign="top">&nbsp;</td>
    <td width="60" valign="top">&nbsp;</td>
    <td width="131" valign="top">&nbsp;</td>
    <td width="295">&nbsp;</td>
    <td width="287">&nbsp;</td>
  </tr>
  <tr>
    <td height="39">&nbsp;</td>
    <td bgcolor="#FFCCFF" colspan="3"><span class="style4">Create new account </span></td>
    <td bgcolor="#FFCCFF" colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
    <td bgcolor="#FFCCFF" colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td height="54">&nbsp;</td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
    <td bgcolor="#FFCCFF"><span class="style2">User Name </span></td>
    <td bgcolor="#FFCCFF"><input type="text" name="u" placeholder="Enter User Name" /></td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="61">&nbsp;</td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
    <td bgcolor="#FFCCFF"><span class="style2">Password</span></td>
    <td bgcolor="#FFCCFF"><input type="password" name="p" placeholder="Enter Password" /></td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="75">&nbsp;</td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
    <td bgcolor="#FFCCFF"><input type="submit" name="Insert" value="Submit" /></td>
  </tr>
</table>
</form>
</body>
</html>
