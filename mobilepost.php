
<div class="mobpost">
	<form action="" enctype="multipart/form-data" method="post">
				    <div class="fields">
					Tile of Your Ad
					<input type="text" name="title" placeholder="Product Title" required/>
				</div>
        <div class="file">
						<input type="file" name="product_img1" class="col-md-6"/>
						<input type="file" name="product_img2" class="col-md-6"/>
        		<input type="file" name="product_img3" class="col-md-6"/>
						<input type="file" name="product_img4" class="col-md-6"/>
						<input type="file" name="product_img5" class="col-md-6"/>
				</div>
        <div class="fields">
					condition
					<input type="radio" name="cate" value="new" />NEW
        	<input type="radio" name="cate" value="used"  />USED<br>
				</div>
        <div class="fields">
					Price <input type="text" name="price" placeholder="Price" required/>
				</div>
        <div class="fields">
					Year of Purchase <input type="text" name="yop" placeholder="Year of Purchase" required/>
				</div>
        <div class="fields">
					Brand
					<input type="text" name="brand" placeholder="Brand Name" required/>
				</div>
        <div class="fields">
					Operating System <input type="text" name="os" placeholder="Operating System" required/>
				</div>
        <div class="fields">
					No of SIM <input type="text" name="nos" placeholder="No of SIM" required/>
				</div>
        <div class="fields">
					Also Include <input type="text" name="also" placeholder="Also Include" required/>
				</div>
        Description
				<textarea rows="7" cols="69" name="desc" placeholder="Write few line about your product !" ></textarea>
       <input type="submit" name="mob_submit" value="Post My Ad" />

	</form>
	<?php post_mob();	?>

</div>
