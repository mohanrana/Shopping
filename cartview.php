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
<form id="form1" name="form1" method="post" action="">

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="95%" class="table">
  <tr>
    <td width="51" height="44" bgcolor="#FFFFFF"><strong>Item</strong></td>
    <td width="108" bgcolor="#FFFFFF"><strong>Unit Price</strong></td>
    <td width="134" bgcolor="#FFFFFF"><strong>Quantity</strong></td>
    <td width="573" bgcolor="#FFFFFF"><strong>Total</strong></td>
    <td width="140" bgcolor="#FFFFFF"><strong>Delete</strong></td>
    </tr>
  <tr>
  <?php
include("connection.php");
session_start();
$s_id=session_id();

$query="select * from `tbl_cart` where `ct_session_id`='$s_id'";
$result=mysql_query($query);
$total=0;
 while($res=mysql_fetch_array($result))
  {
  $query1="SELECT * 
FROM  `tbl_product` where pd_id='".$res['pd_id']."'";

$result1=mysql_query($query1);
$res1=mysql_fetch_array($result1);
  
  $m=($res1['pd_price']*$res['ct_qty']);
    $total=$total+$m;
  echo"<tr>
    <td><img src='upload/$res1[6]' class='img-responsive'><input name='id' type='hidden' value='$res[1]'><br>$res1[2]</td>
    <td>$res[5]</td>
	<td>  $res[3]</td>
	<td>$m</td>
	    <td><a href='cart_delete.php ? bid=$res[0]' >Delete</a>
		</tr>";
		}
 ?>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><div align="center"><strong>Total</strong></div></td>
    <td bgcolor="#FFFFFF"><input type="text" name="textfield2"value="<?php echo $total; ?>" class="form-control"/></td>
    <td bgcolor="#FFFFFF"><p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
  <tr>
    <td height="102" bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><input type="reset" name="clear" value="Reset" class='btn btn-small btn-primary'/>
	&nbsp&nbsp <a href="index.php">
	<input type="button" name="Button" value="Continue Shopping" class='btn btn-small btn-primary'/></a>
	&nbsp&nbsp <a href="shpingifo.php">
      <input name="Button" type="button" value="Proceed To Checkout" class='btn btn-small btn-primary'/></a></td>
 <td bgcolor="#FFFFFF"></td>
    </tr>
  </table>
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