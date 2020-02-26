<h1>Bạn chắc chắn muốn xóa ?</h1>
<h3><?php echo $product->productName; ?></h3>
<form action="./index.php?page=deleteProduct" method="post">
  <input type="hidden" name="id" value="<?php echo $product->productCode; ?>"/>
  <div class="form-group">
      <input type="submit" value="Delete" class="btn btn-danger"/>
      <a class="btn btn-default" href="index.php">Cancel</a>
  </div>
</form>