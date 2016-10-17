<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/style.css">
	<title>Add item form</title>
</head>
<body>
	<!-- <h1>Add a new item!</h1> -->
	<?php
    include "dbcon.php";

    $sql = "SELECT
	  product.id, name, stock, price, description,
	  product_details.product_id, image
		FROM product JOIN product_details ON product.id = product_details.product_id
		GROUP BY product.id";

		// $sql = "SELECT * FROM product";

		$result = $conn->query($sql);
	?>
	

	<div class="header blue-bg">
		<!-- <div class="add-button">
	    <div class="sub-button tl"></div>
	    <div class="sub-button tr"></div>
	    <div class="sub-button bl"></div>
	    <div class="sub-button br"></div>
	  </div> -->
		<div class="row">
			<div class="large-8 large-offset-2 medium-8 medium-offset-2 small-12 columns">
				<a href="index.php"><button class="button button-custom button-top yellow-bg">ADD ANOTHER PRODUCT</button></a>
				<div class="content">
					<?php
						if ($result->num_rows > 0) {
					    // output data of each row

							// Take product id store in variable
							// if new product id == old product id, then it's an image, otherwise it's a new product 

					    while($row = $result->fetch_assoc()) {
				        // echo $row['name'] . " | " . $row['stock'] . " | " . $row['price'] .
				        // " | " . $row['description'] . " | " . '<img src="' . $row['image'] . '">' ."<br>";
				        echo '<div class="card">' .
								        '<div class="row">'.
								        	'<div class="medium-6 columns">';


								echo '<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
												<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span> &#9664;&#xFE0E;</button>
												<button class="orbit-next"><span class="show-for-sr">Next Slide</span> &#9654;&#xFE0E;</button>
												<ul class="orbit-container">';

													$product_id = $row['id'];
								        		$imageSQL = "SELECT * FROM product_details WHERE product_details.product_id = $product_id";
								        		$image_result = $conn->query($imageSQL);
								        		if($image_result->num_rows > 0){
								        			while($row_img = $image_result->fetch_assoc()){
										        		echo '
											        		<li class="orbit-slide is-active">
																    <img class="orbit-image" src="' . $row_img['image'] . '">
																  </li>';


								        			}
								        		}

												  
									echo '</ul>
											</div>';


								        		

								        	echo '</div>'.
								        	'<div class="medium-6 columns">'.
								        		'<h2 class="product-title">'. $row['name'].'</h2>'.
								        		'<p class="product-descript">'.$row['description'].'</p>'.
								        		'<h3 class="product-price">$ '.$row['price'].'</h3>'.
								        		'<div class="row">'.
									        		'<div class="medium-6 columns">'.
									        			// '<form action="edit-item.php">'.
											        	// 	'<input type="submit" name="edit" value="EDIT" class="button button-custom blue-bg">'.
											        	// '</form>'.
										        		'<a class="button button-custom blue-bg" href=index.php?product_id="' . $row['id']  .'">EDIT</a>'.
									        		'</div>'.
									        		'<div class="medium-6 columns">'.
									        			// '<form action="delete-item.php">'.
									        			// 	'<input type="hidden" name="product_id" value="'. $row['id'] .'">'.
											        	// 	'<input type="submit" name="delete" value="DELETE" class="button button-custom red-bg">'.
											        	// '</form>'.
									        			'<a class="button button-custom red-bg" href=delete-item.php?product_id="' . $row['id']  .'">DELETE</a>'.
									        		'</div>'.
								        		'</div>'.
							        		'</div>'.
								        '</div>'.
							        '</div>'; 

					    }
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- <script src="js/vendor/modernizr.js"></script> -->
	<script type="text/javascript" src="js/vendor/jquery.js"></script>
	<!-- <script src="js/vendor/fastclick.js"></script> -->
	<script src="js/vendor/foundation.min.js"></script>
	<script>
	  $(document).foundation();
	</script>
</body>
</html>