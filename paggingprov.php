<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#7DCF23"><table width="600" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCFF">
    <td>categoryName</td>
    <td>description</td>
    <td>image</td>
        <td>Delete</td>
	 <td>modify</td>
  </tr>
  <?php
include("connection.php");
$rowsPerPage=2;
$pageNum=1;
if(isset($_GET['page']))
{
$pageNum=$_GET['page'];
}
$offset=($pageNum-1)* $rowsPerPage;
$query="select * FROM `tbl_product`"."LIMIT $offset,$rowsPerPage";
$result=mysql_query($query) or die('error,query failed');
  while($res=mysql_fetch_array($result))
  {
  echo"<tr>
     <td>$res[2]</td>
    <td>$res[3]</td>
    <td><img src='upload/$res[4]' height='100' width='100'> </td>
    <td><a href='pro_cateupdate.php ? bid=$res[0]'>Modify</a></td>
    <td><a href='cat_delete.php ? bid=$res[0]' >Delete</a></td>
	
    </tr>";
  }
  ?>
</table>
<?php
//include("connection.php");

$query="select count(*) as `numrows` from `tbl_product`";
$result=mysql_query($query)or die('error,query failed');
$row=mysql_fetch_array($result);
$numrows=$row['numrows'];
$maxPage=ceil($numrows/$rowsPerPage);
$self=$_SERVER['PHP_SELF'];
$nav="";
for($page=1;$page<=$maxPage;$page++)
{
if($page==$pageNum)
{
 $nav.=" $page ";
}
else
{
$nav.=" <a href=\"$self?page=$page\">$page</a> ";

}

}
//echo $nav;
$prev="";
$first="";
if($pageNum>1)
{
$page=$pageNum-1;
$prev="<a href=\"$self?page=$page\">[Prev]</a>";
$first="<a href=\"$self?page=1\">[First Page]</a>";
}
else
{
//$prev="$nbsp;";
//$first="$nbsp;";
}
$next="";
$last="";
if($pageNum<$maxPage)
{
$page=$pageNum+1;
$next="<a href =\"$self?page=$page\">[Next]</a>";
$last="<a href=\"$self?page=$maxPage\">[Lastpage]</a>";
}
else
{
//$next='$nbsp;';
//$last='$nbsp;';
}
echo $first.$prev.$nav.$next,$last;
?>
</body>
</html>
