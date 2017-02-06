<?php post_laptops(); ?>
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
					condition <input type="radio" name="cate" value="new" />NEW
        	<input type="radio" name="cate" value="used"  />USED<br>
				</div>
        <div class="fields">
					Type <input type="text" name="ctype" placeholder="Type" required/>
				</div>
        <div class="fields">
					Brand Name<input type="text" name="brand" placeholder="Brand Name" required/>
				</div>
        <div class="fields">
					Screen Size <input type="text" name="ssize" placeholder="Screen Size" required/>
				</div>
        <div class="fields">
					RAM <input type="text" name="ram" placeholder="RAM" required/>
				</div>
        <div class="fields">
					Hard Disk <input type="text" name="hdd" placeholder="Hard Disk" required/>
				</div>
        <div class="fields">
					Processor <input type="text" name="pro" placeholder="processor" required/>
				</div>
        <div class="fields">
					Also Include <input type="text" name="also" placeholder="Also Include" required/>
				</div>
        <div class="fields">
					Price <input type="text" name="price" placeholder="Price" required/>
				</div>
        Description <textarea name="desc" rows="4" cols="69" placeholder="Write few line about your product !" ></textarea>
        <input type="submit" name="laptops" value="Post My Ad" />
	</form>
</div>
