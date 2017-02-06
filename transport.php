<?php post_transport(); ?>
<div class="mobpost">
	<form action="" enctype="multipart/form-data" method="post">
	    <div class="fields">
				Tile of Your Ad <input type="text" name="title" placeholder="Product Title" required/>
			</div>
        <div class="file">
					<input type="file" name="product_img1"/>
					<input type="file" name="product_img2"/>
					<input type="file" name="product_img3"/>
        	<input type="file" name="product_img4"/>
					<input type="file" name="product_img5"/>
				</div>
        <div class="fields">
					condition
					<input type="radio" name="cate" value="new" />NEW
        	<input type="radio" name="cate" value="used"  />USED<br>
				</div>
        <div class="fields">
					Brand Name
					<input type="text" name="brand" placeholder="Brand Name" required/>
				</div>
        <div class="fields">
					KMS Driven
					<input type="text" name="kms" placeholder="KMS Driven" required/>
				</div>
        <div class="fields">
					Fuel Type
					<input type="text" name="ftype" placeholder="Fuel Type" required/>
				</div>
				<div class="fields">
					Year of Registration
					<input type="text" name="yreg" placeholder="Year of Registration (YYYY-MM-DD)" required/>
				</div>
        <div class="fields">
					Price
					<input type="text" name="price" placeholder="Price" required/>
				</div>
        <div class="fields">
					Color
					<input type="text" name="color" placeholder="Color" required/>
				</div>
        <div class="fields">
					Insurance Valid Till
					<input type="text" name="valid" placeholder="Insurance Valid Till (YYYY-MM-DD)" required/>
				</div>
        Description <textarea name="desc" rows="7" cols="69" placeholder="Write few line about your product !" ></textarea>
        <input type="submit" name="transport" value="Post My Ad" />
	</form>
</div>
