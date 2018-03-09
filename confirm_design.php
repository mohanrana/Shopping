<?php
  include("connection.php");
  
  //echo $id=$_GET['bid'];
   $id=$_POST['id'];
   $sid=$_POST['sid'];
   $OrderDate=date('y-m-d');
   $s="update tbl_cart  set ct_date='$OrderDate' where ct_session_id='$sid'";
  mysql_query($s);
   $q="select * from `tbl_shpinfo`where `session_id`='$sid'";
echo" <table width='200' border='1'>";
 $result=mysql_query($q);
 while($res=mysql_fetch_array($result))
 {
 
  echo"<tr>
      <td>FirstName</td>
      <td><input type='text' name='FirstName' value='$res[1]'/></td>
    </tr>
    <tr>
      <td>LastName</td>
      <td><input type='text' name='LastName' value='$res[2]'/></td>
    </tr>
    <tr>
      <td>Address1</td>
      <td><textarea name='Address1'>$res[3]</textarea></td>
    </tr>
    <tr>
      <td>Address2</td>
      <td><textarea name='Address2'>$res[4]</textarea></td>
    </tr>
    <tr>
      <td>PhoneNumber</td>
      <td><input type='text' name='PhoneNumber'value='$res[5]' /></td>
    </tr>
    <tr>
      <td>Province/State</td>
      <td><input type='text' name='State' value='$res[6]'/></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input type='text' name='City'value='$res[7]'/></td>
    </tr>
    <tr>
      <td>Postal/ZipCode</td>
      <td><input type='text' name='ZipCode'value='$res[8]' /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
    </tr>";
	}
 ?>
  </table>
  <form action="buy.php"method="post">
  <input type="submit"name="OK"Value="OK" /></form>
    