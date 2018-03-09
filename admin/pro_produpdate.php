<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/bootstrap/fonts/font-awesome.min.css">
    <style type="text/css">
<!--
.style2 {font-size: large}
-->
    </style>
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
                <ul class="nav navbar-nav links">
                    <li role="presentation"><a href="addcategory.php">Add Category</a></li>
                    <li role="presentation"><a href="cat_view.php">View Category</a></li>
                    <li role="presentation"><a href="addproduct.php">Add Product</a></li>
                    <li role="presentation"><a href="product_view.php">View Product</a></li>
					<li role="presentation"><a href="buy.php">Ordered Product</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.jpg" class="dropdown-image"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">Settings </a></li>
                            <li><a href="#">Payments </a></li>
                            <li class="active"><a href="#">Logout </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
	<form action="pro_productdesign.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<?php
 include("connection.php");
  $pd_id=$_GET['bid'];
  $query="select *from `tbl_product` where `pd_id`=$pd_id";
  $result=mysql_query($query);
  while($res=mysql_fetch_array($result))
  {
 ?>
<table class="table">
  <tr>
    <td>Category</td>
    <td>  
	  <?php 

	  $query="select *from tbl_category";
	  
	  $result=mysql_query($query);
	  echo "<select name='Category' class='form-control'>";
	  while($res1=mysql_fetch_array($result))
	  {
	  echo "<option value='$res1[0]'>$res1[2]</option>";
	  }
	  ?>
	  </select> </td>
  </tr>
  <tr>
    <td>ProductName</td>
    <td><input type="text" name="Product" value="<?php echo $res[2];?>" class="form-control"/></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><textarea name="Description" class="form-control"><?php echo $res[3];?></textarea></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="Price" value="<?php echo $res[4];?>" class="form-control"/></td>
  </tr>
  <tr>
    <td>Qty In Stock </td>
    <td><input type="text" name="QtyInStock" value="<?php echo $res[2]; ?>"  class="form-control"/></td>
  </tr>
  <tr>
    <td>Image</td>
    <td><input type="file" name="file" class="form-control"/>
	 <img src="upload/<?php echo $res["pd_image"];?>" height="122" width="131" class="img-responsive" />
	 <input name='img' type='hidden' value='<?php echo $res[4];?>' />
	 <input name='id' type='hidden' value='<?php echo $res[0];?>' />  </td>
  </tr>
  <tr>
    <td><input type="submit" name="ModifyProduct" value="Modify Product" class="btn btn-success"/></td>
    <td><input type="submit" name="Cancel" value="Cancel" class="btn btn-success"/></td>
  </tr>
</table>
<?php
  }
  ?>
  
</form>
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