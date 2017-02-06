<?php
include("indludes/db.php");
include("function/functions.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width" />
<title>PasalKart - New and Old Store </title>
<link rel="stylesheet" href="styles/font-awesome.min.css">
<link rel="stylesheet"  href="styles/style.css">
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="js/Javascript.js"></script>
<body style="background-color:#E8E8E8";>

  <?php	include("header.php"); ?>
  <!--- contanner starts-->
  <?php detail(); ?>
  <!--contanner ends-->
  <!--- fotter area starts-->
<?php related(); ?>
<div class="fotter">
  <?php footer(); ?>
</div>



</body>
</html>
