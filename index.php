<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <?php
    include 'required.php'
  ?>
	<title>Add item form</title>
</head>
<body>
	<!-- <h1>Add a new item!</h1> -->
	<?php
		include "dbcon.php";

		if (isset($_GET['product_id'])) {

			  $product_id = $_GET['product_id'];

			 //  $sql = "SELECT
			 //  product.id, name, stock, price, description,
			 //  product_details.product_id, image
				// FROM product JOIN product_details ON product.id = product_details.product_id";
				// $result = $conn->query($sql);

			  //Query DB for details on that beer
			  $productSQL = "SELECT * FROM product where id = $product_id";

			  // $result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
 
			  $product =  $conn->query($productSQL)->fetch_assoc();

			}
	?>
	

	<div class="header yellow-bg">
		<div class="row">
			<div class="large-6 large-offset-3 medium-6 medium-offset-3 small-12 columns">
				<a href="view.php"><button class="button button-custom button-top blue-bg">VIEW PRODUCTS</button></a>
				<div class="content">
					<div class="card">
						<form action="add_item.php" method="post">
							<!-- <label>Item Name</label> -->
							<?php if(isset($product_id)) echo "<input type='hidden' name='product_id' value=" . $product_id ." >"; ?>
							<input class="custom-input input-big" placeholder="Product Name" type="text" id="name" name="item_name" <?php if (isset($product['name'])) echo "value='" . $product['name'] . "'"; ?> required />
							<textarea placeholder="Describe the product" class="custom-textarea" name="item_description"><?php if (isset($product['description'])) echo $product['description'];?></textarea>
							<!-- <label>Description</label> -->
							
							<!-- <label>Stock in inventory</label> -->
							<input class="custom-input" placeholder="Inventory in stock" type="text" id="stock" name="item_stock"<?php if (isset($product['stock'])) echo "value='" . $product['stock'] . "'"; ?> >
							<!-- <label>Price</label> -->
							<input class="custom-input input-big input-price" placeholder="Price" type="text" id="price" name="item_price" <?php if (isset($product['price'])) echo "value='" . $product['price'] . "'"; ?>>
							
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


	<script type="text/javascript" src="js/vendor/jquery.js"></script>
	<!-- <script src="js/vendor/fastclick.js"></script> -->
	<script src="js/vendor/foundation.min.js"></script>
	<script>
	  $(document).foundation();
	</script>



</body>
</html>