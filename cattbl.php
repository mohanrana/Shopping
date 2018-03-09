<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/bootstrap/fonts/font-awesome.min.css">
</head>

<body><form action="" method="post">
<table class="table table-bordered">
  <tr>       
  <td  ><div align="center"><font color="#000000">Category Name </font></div></td>
  </tr>
  <?php
  include("connection.php");
  $query="select *from `tbl_category`";
  $result=mysql_query($query);
  while($res=mysql_fetch_array($result))
  {
  echo" <tr>
   <td><a href='index.php?bid=$res[0]'> $res[2]</a></td>
     </tr> ";
  }
  ?>
</table>
</form>
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>