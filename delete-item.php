<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <?php
    include 'required.php'
  ?>
  <title>Success!</title>
</head>
<body>
  <?php
    include 'dbcon.php';

		$product_id = $_GET['product_id'];

		$sql = "DELETE FROM product WHERE id=$product_id";

		$result = $conn->query($sql);

		if ($conn->query($sql) === TRUE) {
        echo '
        <div class="success callout" data-closable="slide-out-right">
          <h5>Product sucessfully deleted.</h5>
          <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
    } else {
        echo "Error deleting record: " . $conn->error;
    }
  ?>

  <div class="header red-bg">
    <div class="large-6 large-offset-3 medium-6 medium-offset-3 small-12 columns">  
      <h1>No bugs... Again!??!?... hmmm... stranger</h1>
      <div class="card">
        <a href="index.php"><button class="button button-custom yellow-bg">ADD ANOTHER ITEM</button></a>
        <a href="add_details.php"><button class="button button-custom blue-bg">ADD ANOTHER IMAGE</button></a>
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