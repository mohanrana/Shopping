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

<body>
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
      <?php
  include("connection.php");
   $pd_id=$_GET['bid'];
   $query="select *from `tbl_product` where `pd_id`=$pd_id";
   $result=mysql_query($query);
  echo "<table class='table table-bordered'>";	
  while($res=mysql_fetch_array($result))
    {
 echo"<tr>
 <td><center><strong>Photo</strong></center></td>
    <td><center><strong>Product Name</strong></center></td>
	<td><center><strong>Product Price</strong></center></td>
	<td><center><strong>Buy Product</strong></center></td>
 </tr>
 <tr>
  <td><center><img src='admin/upload/$res[6]' width='700' height='500' class='img-responsive'></center></td>
    <td><center> $res[2]</center></td>
	<td><center>$res[4]</center></td>
	<td><a href='tblcart.php?bid=$pd_id'><center>Buy</center></a></td>
	</tr>";
	}
 ?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>