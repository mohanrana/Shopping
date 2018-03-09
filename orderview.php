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
  <p>&nbsp;</p>
  <form name="form1" method="post" action="index.php">
<?php
include("connection.php");
session_start();
echo "<br><br><br>";
echo "<p align='center'><font color='red'  face='Times New Roman, Times, serif' size='+2' style='border-top-style:solid'> CLIENT COINFIRMATION</font><p>";
echo"<table width='50%' height='100%' border='3' cellpadding='0' cellspacing='0'align='center' >";
echo "<tr> <td><p align='center' ><h3>Thanks for shopping;You Have done shopping successfully........<br>
Your ORDER Number is:</h3></p></td></tr><br><br><br><br>";
echo"</table>";
   $id=$_GET['bid'];
 session_destroy();
?>
<p align="center"><input name="Ok" type="Submit"value="Ok" width="100%" class="btn btn-success"></p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</p>
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