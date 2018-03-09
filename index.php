<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/bootstrap/fonts/font-awesome.min.css">
</head>

<body style="background-image:url(image/watermark.jpg); background-attachment:fixed;">
    <nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><a class="navbar-brand navbar-link" href="#">Uryo<span>Shopping</span> </a></div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
            </div>
        </div>
    </nav>
<div class="container">
<table class="table table-bordered" bgcolor="#CCCCCC">
  <tr>
    <td height="106" colspan="3"><img src="image/banner.jpg" width="100%"height="100%" class="img-responsive"/> </img></td>
  </tr>
  <tr>
    <td width="14%" valign="top" bgcolor="#FFFFFF"><?php include("cattbl.php"); ?></td>
    <td width="65%" valign="top" bgcolor="#FFFFFF"><div align="center"></div>
      <div align="center">
        <?php
include("connection.php");
$rowsPerPage=6;
$pagenum=1;
if(isset($_GET['page']))
{
$pagenum=$_GET['page'];
}
$offset=($pagenum-1)* $rowsPerPage;
$link2=mysql_select_db("shopping");
if(isset($_GET['bid']))
{
$catid=$_GET['bid'];
$query = "select * from  `tbl_product` where `cat_id`='$catid' limit $offset, $rowsPerPage" ;
}
else
{
$query = "select * from  `tbl_product` limit $offset, $rowsPerPage" ;
}
$result = mysql_query($query);
$total_records = mysql_num_rows($result);
$num_cols=3;
$num_rows=ceil($total_records/$num_cols);
$num = 0;
echo "<table class='table table-bordered'>";
for($rows=0; $rows < $num_rows; $rows++)
{
echo "<tr>";
for($cols=0; $cols < $num_cols; $cols++)
{
echo "<td align='center' valign='top' width='157' height='206' >";
if($num < $total_records)
{
$id=mysql_result($result, $num, "pd_id");
$title = mysql_result($result, $num, "pd_name");
$description = mysql_result($result,$num,"pd_price");
$image=mysql_result($result,$num,"pd_image");
echo "<img src='admin/upload/$image'  width='250' height='160' class='img-responsive'>";
echo "<a href='pagedesign.php?bid=$id'>$title</a><br>";
echo "Price: $description";
echo  "</td>";
}
else
{
//echo "<td align='center' valign='top'>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
}
$num++;
}

echo"</tr>";
}

echo"</table class='table table-bordered'>";

?>
<?php
$query="select count(*) as `numrows` from `tbl_product`";
$result=mysql_query($query)or die('error,query failed');
$row=mysql_fetch_array($result);
$numrows=$row['numrows'];
$maxPage=ceil($numrows/$rowsPerPage);
$self=$_SERVER['PHP_SELF'];
$pageNum="";
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
    </div></td>
    <td width="30%" valign="top" bgcolor="#FFFFFF"><?php include("indexright1.php");?></td>
  </tr>
</table>
</table>
</div>
    <footer>
      <div class="row">
        <div class="col-md-4 col-sm-6 footer-navigation">
            <h3><a href="#">Uryo<span>Shopping</span></a></h3>
          </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p>Shimla, India(HP) </p>
                </div>
                <div><span class="fa fa-phone footer-contacts-icon"></span>
                    <p class="footer-center-info email text-left">+91 9459004124 </p>
              </div>
          </div>
            <div class="clearfix visible-sm-block"></div>
      </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>