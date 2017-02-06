
		<?php  post_realstate(); ?>
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
					Property Type<input type="text" name="ptype" placeholder="Property Type" required/>
				</div>
        <div class="fields">
					Price <input type="text" name="price" placeholder="Price" required/>
				</div>
				<div class="fields">
					Rate/sqft. <input type="text" name="rate" placeholder="Rate/Sqft" required/>
				</div>
        <div class="fields">
					City <input type="text" name="city" placeholder="City" required/>
				</div>
        <div class="fields">
					Location <input type="text" name="location" placeholder="Location" required/>
				</div>
	        Description <textarea name="desc" placeholder="Write few line about your product !" class="form-control" rows="7"></textarea>
	        <input type="submit" name="realstate" value="Post My Ad" />
	</form>
</div>
