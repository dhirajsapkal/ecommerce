<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <?php
    include 'required.php'
  ?>
  <!-- <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/style.css"> -->
  <title>Add more details</title>
</head>
<body>
	<!-- <h1>Let's add more details to the items</h1> -->
	
	<?php
    include 'dbcon.php';
  ?>
  <!-- <h1>Let's add more details to a product!</h1> -->
  

  <div class="header red-bg">
    <div class="large-6 large-offset-3 medium-6 medium-offset-3 small-12 columns">
      <div class="card card-top">
        <form action="add_sucess.php" method="post">
          <select name="product_id">  
          <?php
            $sql = "SELECT id, name FROM product";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
              }
            }
          ?>
          </select>
          <input class="custom-input" placeholder="Product image link" type="text" id="link" name="product_link">
          
          <input class="button button-custom blue-bg" type="submit" value="SUBMIT">
        </form>
      </div>
      <div class="card">
        <a href="index.php"><button class="button button-custom yellow-bg">ADD ANOTHER</button>
        <a href="view.php"><button class="button button-custom red-bg">VIEW PRODUCTS</button></a>
      </div>
    </div>

</body>
</html>