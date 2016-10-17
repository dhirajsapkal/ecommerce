<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <?php
    include 'required.php'
  ?>
	<title>Edit item form</title>
</head>
<body>
	<!-- <h1>Add a new item!</h1> -->
	

	<div class="header yellow-bg">
		<div class="row">
			<div class="large-6 large-offset-3 medium-6 medium-offset-3 small-12 columns">
				<a href="view.php"><button class="button button-custom button-top blue-bg">VIEW PRODUCTS</button></a>
				<div class="content">
					<div class="card">
						<form action="add_item.php" method="post">
							<!-- <label>Item Name</label> -->
							<input class="custom-input input-big" placeholder="Product Name" type="text" id="name" name="item_name">
							<textarea placeholder="Describe the product" class="custom-textarea" name="item_description"></textarea>
							<!-- <label>Description</label> -->
							
							<!-- <label>Stock in inventory</label> -->
							<input class="custom-input" placeholder="Inventory in stock" type="text" id="stock" name="item_stock">
							<!-- <label>Price</label> -->
							<input class="custom-input input-big input-price" placeholder="Price" type="text" id="price" name="item_price">
							
							<input class="button button-custom red-bg" type="submit" value="SUBMIT">
						</form>
						<p class="seperator-text">OR</p>
		        <a href="add_details.php"><button class="button button-custom blue-bg">ADD IMAGES</button></a>

					</div>
				</div>
			</div>
		</div>
			
		</div>
	</div>



</body>
</html>