<?php
include("indludes/db.php");
include("function/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PasalKart - A Online Store for New and Old </title>
<link rel="stylesheet" href="styles/font-awesome.min.css">
<link rel="stylesheet"  href="styles/style.css">
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/Javascript.js"></script>
</head>
<body style="background-color:#E8E8E8";>
<!---header starts here-->
<?php  include("header.php"); ?>
<!--banner -->
<?php banner() ?>
<!--- CATO-->
<div class='wraper'>
  <div class='back'>
<?php listcato() ?>
</div >
</div>
<!--- CATO ENDS -->
	<!-- right contaner starts-->
    <div id="pro_contant">
<?php getPro(); ?>
    </div>
    <!-- right contaner ends-->
</div>
<!--contanner ends-->
<!--- fotter area starts-->
<div class="fotter">
<?php footer(); ?>
</div>
<!--- fotter area ends-->
<!--- LOGIN/SIGNUP FORM -->
<?php //login(); ?>
</body>
</html>
