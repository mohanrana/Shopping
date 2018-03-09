<?php
include("connection.php");
$query="select * from `tbl_cart`";
$result=mysql_query($query);
 while($res=mysql_fetch_array($result))
  {
  echo"<tr>
    <td>$res[0]<br></td>
    <td>$res[1]<br></td>
	<td>$res[2]<br></td>
	  </tr>";
  }
 
?>