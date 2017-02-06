<?php
include("indludes/db.php");
include("function/functions.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PasalKart - New and Old Store </title>
<link rel="stylesheet"  href="styles/style.css">
</head>
<body style="background-color:#E8E8E8">
<!---header starts here-->
<?php	head() ?>
 <!---Header Ends Here-->
	<!--- navigation bar starts -->
    <div id="navbar">
		<ul>
<?php getCato(); ?>
        </ul>
 	</div>	
    <!--- navigation bar ends -->
<!--- contanner starts-->
<div style="width:auto; height:auto">
	<!-- left contaner starts-->
	<!--- <div id="left_contant"> -->

   <!--- </div>  -->
    <!-- left contaner ends-->
	<!-- right contaner starts-->
    <div id="right_contant">

<?php search_pro(); ?>


    </div>
    <!-- right contaner ends-->
</div>
<!--contanner ends-->
<!--- fotter area starts-->
<div class="fotter">
<?php footer(); ?>
</div>
<!--- fotter area ends-->



</body>
</html>