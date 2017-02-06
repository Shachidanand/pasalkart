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
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<link rel="stylesheet"  href="styles/style.css">
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/Javascript.js"></script>
<script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#E8E8E8";>
<!--- header-->
	<?php include("posthed.php"); ?>
<!--- header ends -->
<!--- contanta -->
<div class="categorieg">
	<div class="listcate">
    <div CLASS="title">
    	<p>CATEGORIES</p>
    </div>
 		<?php postadd(); ?>
	</div>
	<div class="post">
        <div CLASS="title">
    		<p>POST YOUR ADs</p>
    	</div>
		<?php postad();?>
	</div>
</div>
<!--- contants ends -->
<!--- footer -->
<div class="fotter">
	<?php footer(); ?>
</div>
<!---footer ends -->

</body>
