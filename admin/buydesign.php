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
    <script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
    </script>
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
<?php
  include("connection.php");
  
  //echo $id=$_GET['bid'];
   $id=$_POST['id'];
   $sid=$_POST['sid'];
   $OrderDate=date('y-m-d');
   $s="update tbl_cart  set ct_date='$OrderDate' where ct_session_id='$sid'";
  mysql_query($s);
   $q="select * from `tbl_shpinfo`where `session_id`='$sid'";
echo" <table class='table table-bordered'>";
 $result=mysql_query($q);
 while($res=mysql_fetch_array($result))
 {
 
  echo"<tr>
      <td>First Name</td>
      <td><input type='text' name='FirstName' value='$res[1]' class='form-control'/></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><input type='text' name='LastName' value='$res[2]' class='form-control'/></td>
    </tr>
    <tr>
      <td>First Address</td>
      <td><textarea name='Address1' class='form-control'>$res[3]</textarea></td>
    </tr>
    <tr>
      <td>Second Address</td>
      <td><textarea name='Address2' class='form-control'>$res[4]</textarea></td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><input type='text' name='PhoneNumber'value='$res[5]' class='form-control'/></td>
    </tr>
    <tr>
      <td>Province/State</td>
      <td><input type='text' name='State' value='$res[6]' class='form-control'/></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input type='text' name='City'value='$res[7]' class='form-control'/></td>
    </tr>
    <tr>
      <td>Postal/Zip Code</td>
      <td><input type='text' name='ZipCode'value='$res[8]' class='form-control'/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
    </tr>";
	}
 ?>
  </table>
  <form action="buy.php" method="post">
  <input type="submit"name="OK" Value="OK" class="btn btn-success"/></form>
    
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