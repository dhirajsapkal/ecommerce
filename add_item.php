<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <?php
    include 'required.php'
  ?>
  <title>success!</title>
</head>
<body>
	<?php
    include 'dbcon.php';


    $name = mysql_real_escape_string ($_POST["item_name"]);
    $description = mysql_real_escape_string ($_POST["item_description"]);
    $stock = $_POST["item_stock"];
    $price = $_POST["item_price"];

    if (isset($_POST['product_id']))
    {
      $product_id = $_POST['product_id'];
      $sql =  "UPDATE product SET name='$name', stock='$stock', price = '$price', description='$description'
      WHERE id = $product_id";

    } else {
      $sql  = "INSERT INTO product (name, stock, price, description)
      VALUES ('$name', '$stock', '$price', '$description')";
    }

    

    if ($conn->query($sql) === TRUE) {
    echo '
    <div class="success callout green-toast" data-closable="slide-out-right">
      <h5>Product sucessfully added</h5>
      <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    ';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  ?>

  <div class="header red-bg">
    <div class="large-6 large-offset-3 medium-6 medium-offset-3 small-12 columns">  
      <!-- <h1>No bugs... hmmm... strange</h1> -->
      <div class="card card-top">
        <a href="index.php"><button class="button button-custom yellow-bg">ADD ANOTHER</button></a>
        <a href="add_details.php"><button class="button button-custom blue-bg">ADD IMAGES</button></a>
        <a href="view.php"><button class="button button-custom red-bg">VIEW PRODUCTS</button></a>
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