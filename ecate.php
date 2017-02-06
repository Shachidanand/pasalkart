<?php
include("indludes/db.php");
include("function/functions.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PasalKart - New and Old Store </title>
<link rel="stylesheet" href="styles/font-awesome.min.css">
<link rel="stylesheet"  href="styles/style.css">
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/Javascript.js"></script>
</head>
<body style="background-color:#E8E8E8";>
<!---header starts here-->
 <?php	include("header.php"); ?>

<div id="pro_contant">
<?php showcato() ?>
<?php search_pro() ?>
</div>
<!--- fotter area starts-->
<div class="fotter">
<?php footer(); ?>
</div>


</body>
</html>
