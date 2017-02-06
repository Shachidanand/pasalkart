<?php session_start(); ?>
<div id='header'>
<?php include("loginplate.php"); ?>
		<div class='logo'>
    			<a href='index.php'><img src='./Images/logo2.png'/></a>
		</div>
 		<div  class='search-product' >
					<form action='ecate.php' enctype='multipart/form-data' method='get' class='searchbox' >
        			<input type='text' name='product_search' placeholder='Search Your Product !'/ class='input' >
              <input type='submit' name='search' value=''/ id='srcbtn'>
        	</form>
    </div>
    <div class='post-btn'>
					<a href='./admin_area/insert_product.php?action=post'><button class='button' name="add_post_tab"><span>Post Free Ad</span></button></a>

					<?php add_post_tab(); ?>
    </div>
</div>
