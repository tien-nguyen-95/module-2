<h1>Are you sure to delete <?php echo $product->productName; ?> ?</h1>
<form action="./product.php?page=deleteProduct" method="post">
  <input type="hidden" name="id" value="<?php echo $product->productCode; ?>"/>
  <div class="form-group">
      <input type="submit" value="Delete" class="btn btn-danger"/>
      <a class="btn btn-default" href="product.php">Cancel</a>
  </div>
</form>